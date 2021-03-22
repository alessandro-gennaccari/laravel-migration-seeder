<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    public function index(Student $student){

        return view('home', [ 'students' => $student->all() ]);

    }
}
