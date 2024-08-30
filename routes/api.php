<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('student', [StudentController::class, 'list']);

Route::post('addStudent', [StudentController::class, 'create']);

