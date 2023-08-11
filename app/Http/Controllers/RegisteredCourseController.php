<?php

namespace App\Http\Controllers;
use App\Models\RegisteredCourse;
use App\Models\Course;
use App\Models\RecognizedName;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class RegisteredCourseController extends Controller
{

    protected $table = 'registered_courses';

    public function index()
    {
        $registeredCourses = RegisteredCourse::where('user_id', Auth::id())->get();

        return view('profile.registed', ['registered_courses' => $registeredCourses]);
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function recognizedName()
    {
        return $this->belongsTo(RecognizedName::class);
    }
}
