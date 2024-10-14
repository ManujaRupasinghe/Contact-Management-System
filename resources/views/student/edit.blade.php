@extends('student.layout')

@section('content')
    <div class="Class mt-5">
        <h2 class="card-header">Edit Contact</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-body">
            <form action="{{ route('student.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div>
                    <label for="name" class="form-control">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $student->name }}" required>
                </div>

                <div>
                    <label for="phone" class="form-control">Telephone Number</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="{{ $student->phone }}" required>
                </div>

                <div>
                    <label for="email" class="form-control">E-mail</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{ $student->email }}">
                </div>

                <div>
                    <label for="address" class="form-control">Address</label>
                    <input type="text" name="address" class="form-control" id="address" value="{{ $student->address }}">
                </div>

                <button type="submit" class="mt-2 btn btn-success">Update</button>
            </form>
        </div>
    </div>
@endsection
