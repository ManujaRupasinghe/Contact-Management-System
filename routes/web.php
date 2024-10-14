<?php

use App\Http\Controllers\StudentController;

Route::get('student', [StudentController::class, 'index'])->name('student.index');
Route::get('student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('student/store', [StudentController::class, 'store'])->name('student.store');

// update
Route::get('student/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('student/{id}', [StudentController::class, 'update'])->name('student.update');

// delete
Route::delete('student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
