<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $contact = Student::all();
        return view('contact.index',compact('contact'));
    }

    public function all() 
    { 
        return Student::all(); 
    } 
 
    public function get($id) 
    { 
        return Student::findOrFail($id); 
    } 
}
