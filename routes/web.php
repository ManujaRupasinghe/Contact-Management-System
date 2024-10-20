<?php

use App\Http\Controllers\StudentController;

Route::delete('student/delete/{id}', [StudentController::class, 'delete']);