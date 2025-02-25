<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/students_excel', [StudentController::class, 'excel']);
Route::get('/students_hello', [StudentController::class, 'hello']);

Route::resource('students', StudentController::class);

