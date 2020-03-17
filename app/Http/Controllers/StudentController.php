<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;

    public function show($id) 
    {
        $this->students = config('students.students');

        if(!array_key_exists($id, $this->students)) {
            abort('404');
        }
        $student = $this->students[$id];

        return view('students.show-student', compact('student'));
        
    }
}
