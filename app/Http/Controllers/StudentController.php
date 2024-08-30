<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list() {
        $student = Student::all();
        return $student;
    }

    public function create(Request $req) {
        $student = Student::create([
            'name' => $req->name,
            'lastname' => $req->lastname,
            'phone' => $req->phone,
        ]);
        return "Student Is Created".$student;
    }
}
