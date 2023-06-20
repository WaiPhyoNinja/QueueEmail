<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() 
    {
        // dd('hee hee');
      return view('course.index');
    }
}
