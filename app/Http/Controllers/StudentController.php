<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function delete($id){
        $contact = Student::findOrFail($id);
        $contact->delete();
        return redirect('student')->with('success', 'Contact deleted successfully.');
    }
      
}
