<?php

namespace App\Http\Controllers;
use App\Models\RegisteredCourse;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class RegisteredCourseController extends Controller
{

    public function index()
    {
        $registeredCourses = RegisteredCourse::where('user_id', Auth::id())->get();

        return view('profile.registed', ['registered_courses' => $registeredCourses]);
    }
    
}
