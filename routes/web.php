<?php

use App\http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('contact', [StudentController::class, 'index']);
Route::get('contact/create', [StudentController::class, 'create']);
Route::get('contact/{id}/edit', [StudentController::class, 'edit']);
Route::post('contact/store', [StudentController::class, 'store']);
Route::get('contact/all', [StudentController::class, 'all']);
Route::get('contact/{id}/get', [StudentController::class, 'get']);
Route::post('contact/update/{id}', [StudentController::class, 'update']);
Route::delete('contact/delete/{id}', [StudentController::class, 'delete']);

