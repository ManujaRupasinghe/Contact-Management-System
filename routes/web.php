<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('student',[StudentController::class, 'index']);
Route::get('student/create', [StudentController::class, 'create']);

Route::post('student/store', [StudentController::class, 'store']);

Route::get('student/all',[StudentController::class, 'all']);
Route::get('student/{id}/get',[StudentController::class, 'get']);
