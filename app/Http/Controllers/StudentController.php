<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Request\storeStudentRequest;

class StudentController extends Controller
{
    public function edit($id){
        $student = Student::findOrFail($id);
        return view('student.edit',student('student'));
    }


    public function update(Request $request, $id){
        $student= Student::findOrFail($id);
        $student->update($request->all());
        return redirect('student')->with('success', 'Student contact details updated.');
    }
}

