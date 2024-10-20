<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function delete($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('student')->with('success', 'Contact deleted successfully.');
    }
      
}
