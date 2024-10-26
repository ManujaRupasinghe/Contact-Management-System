<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\http\Requests\StoreStudentRequest;

class StudentController extends Controller
{
    public function index(){
        $student = Student::all();
        return view('student.index',compact('student'));
    }

    public function all() 
    { 
        return Student::all(); 
    } 
 
    public function get($id) 
    { 
        return Student::findOrFail($id); 
    } 

    public function create()  {
        return view('student.create');
    }

    public function store(StoreStudentRequest $request) {
        Student::create($request->validated());
        return redirect('student')->with('success', 'Contact created successfully.');
    }

    public function delete($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('student')->with('success', 'Contact deleted successfully.');
        
    }

    public function edit($id){
        $student = Student::findOrFail($id);
        return view('student.edit',student('student'));
    }

    public function update(Request $request, $id){
        $student= Student::findOrFail($id);
        $student->update($request->all());
        return redirect('student')->with('success', 'student update suscusfull.');
    }
      
}
