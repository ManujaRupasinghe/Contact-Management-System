<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function create()  {
        return view('student.create');
    }

    public function store(StoreStudentRequest $request) {
        Student::create($request->validated());
        return redirect('student')->with('success', 'Contact created successfully.');
    }

    public function all() {
        return Student::all();
    }
}
