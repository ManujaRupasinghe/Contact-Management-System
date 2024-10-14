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

    public function create() {
        return view('student.create');
    }

    public function store(StoreStudentRequest $request) {
        Student::create($request->validated());
        return redirect()->route('student.index')->with('success', 'Contact created successfully.');
    }

    public function edit($id) {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }
    
    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string|regex:/^[0-9]+$/', // Allows only digits
            'email' => 'nullable|string',
            'address' => 'nullable|string',
        ]);
    
        // Convert phone to integer if needed
        $validatedData['phone'] = (int) $validatedData['phone']; 
    
        $student = Student::findOrFail($id);
        $student->update($validatedData);
    
        return redirect('student')->with('success', 'Contact updated successfully.');
    }
    
    public function destroy($id) {
        $student = Student::findOrFail($id);
        $student->delete();
    
        return redirect('student')->with('success', 'Contact deleted successfully.');
    }
    
    
    
}
