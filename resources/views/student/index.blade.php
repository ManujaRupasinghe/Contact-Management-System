@extends('student.layout')
@section('content')

<div class="card mt-5">
    <h2>Student Contacts Details</h2>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>E-mail</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($student as $st)
        <tr>
            <td>{{ $st->name }}</td>
            <td>{{ $st->phone }}</td>
            <td>{{ $st->email }}</td>
            <td>{{ $st->address }}</td>
            <td>
            <form action="{{url('student/delete/' . $st->id)}}" method="POST">
                            <a href="{{url('student/' . $st->id . '/edit')}}" class="btn btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
             </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">there are no data.</td>
        </tr>
        @endforelse
      </tbody>
        </table>
</div>

@endsection
