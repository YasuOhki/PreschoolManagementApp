<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    // テスト用コード
    public function students() {
        $students = Student::all();
        return view('students', compact('students'));
    }
}
