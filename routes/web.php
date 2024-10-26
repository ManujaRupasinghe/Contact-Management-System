<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('student', [StudentController::class, 'index']);
Route::get('student/create', [StudentController::class, 'create']);
Route::get('student/{id}/edit', [StudentController::class, 'edit']);
Route::post('student/store', [StudentController::class, 'store']);
Route::get('student/all', [StudentController::class, 'all']);
Route::get('student/{id}/get', [StudentController::class, 'get']);
Route::post('student/update/{id}', [StudentController::class, 'update']);
Route::delete('student/delete/{id}', [StudentController::class, 'delete']);

