@extends('student.layout') 
@section('content')
<div class="card mt-5">
    <h2>Contacts</h2>

    <table class="table table-bordered">
        <thead>
            <th>Name</th>
            <th>Telephone No.</th>
            <th>E-mail</th>
            <th>Address</th>
        </thead>
        <tbody>
            @forelse($sontacts as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->address}}</td>
            </tr>
            @empty
                <tr colspan="4">There are no data</tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection