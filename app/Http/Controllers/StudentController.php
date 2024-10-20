<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function create()  {
        return view('student.create');
    }

    public function store(StoreStudentRequest $request) {
        Student::create($request->validated());
        return redirect('student')->with('success', 'Contact created successfully.');
    }

}
