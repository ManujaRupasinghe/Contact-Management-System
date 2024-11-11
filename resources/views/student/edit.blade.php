@extends('student.layout')
@section('content')

<div class="card mt-5">
    <h2 class="card-header">edit student contact details</h2>
    <div class="card-body">
        <form action="{{url('student/update/' . $student->id)}}" method="POST">
            @csrf

            <div class="mt-2">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$student->name}}">
            </div>

            <div class="mt-2">
            <label for="phone">Phone</label>
            <input type="text" name="phone" value="{{$student->phone}}">
            </div>

            <div class="mt-2">
            <label for="email">E-mail</label>
            <input type="text" name="email" value="{{$student->email}}">
            </div>

            <div class="mt-2">
            <label for="address">Address</label>
            <input type="text" name="address" value="{{$student->address}}">
            </div>

            <button type="submit">Update</button>

        </form>
    </div>
</div>