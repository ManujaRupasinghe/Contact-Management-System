@extends('student.layout')

@section('content')
<div class="card mt-5">
    <h2>Contacts</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Add Button -->
    <div class="mb-3">
        <a href="{{ route('student.create') }}" class="btn btn-success">Add New Contact</a>
    </div>

    <table class="table table-bordered table-warning ">
        <thead>
            <th>Name</th>
            <th>Telephone No.</th>
            <th>E-mail</th>
            <th>Address</th>
        </thead>
        <tbody>
            @forelse($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->address}}</td>
                <td>


                    <!-- Update button -->
                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary">Update</a>


                    <!-- Delete button -->
                    <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                    </form>

                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="5">There are no data</td>
                </tr>
            @endforelse
        </tbody>

    </table>
</div>
@endsection
