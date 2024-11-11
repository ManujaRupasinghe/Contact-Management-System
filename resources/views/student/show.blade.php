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
               
            </tr>
        </thead>
        <tbody>
            @forelse ($student as $st)
            <tr>
                <td>{{$st->name}}</td>
                <td>{{$st->phone}}</td>
                <td>{{$st->email}}</td>
                <td>{{$st->address}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4">There are no data</td>
            </tr>
            @endforelse
        </tbody>

    </table>

</div>

@endsection