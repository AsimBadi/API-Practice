<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('student', [StudentController::class, 'list']);

Route::post('addStudent', [StudentController::class, 'create']);

Route::delete('deleteStudent/{student}', [StudentController::class, 'delete']);

Route::put('updateStudent/{id}', [StudentController::class, 'updatestudent']);

