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

    public function delete($id) {
        $student = Student::destroy($id);
        return 'Data is Deleted';
    }

    public function updateStudent(Request $req, Student $student, $id) {
       $student = Student::find($id)->update([
        'name' => $req->name,
        'lastname' => $req->lastname,
        'phone' => $req->phone,
       ]);
    }
}
