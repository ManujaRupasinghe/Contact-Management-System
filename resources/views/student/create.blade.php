@extends('student.layout')

@section('content')
    <div class="Class mt-5">
        <h2 class="card-header">Add New Contact</h2>
        <div class="card-body">
            <form action="{{url('student/store')}}" method="post">
                @csrf

                <div>
                    <label for="name" class="form-control">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="ex- john">
                </div>

                <div>
                    <label for="phone" class="form-control">Telephone Number</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="0771234567">
                </div>

                <div>
                    <label for="email" class="form-control">E-mail</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="someone@example.com">
                </div>

                <div>
                    <label for="address" class="form-control">Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                </div>

                <button type="submit" class="mt-2 btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection