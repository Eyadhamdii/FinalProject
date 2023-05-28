<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

use Illuminate\Http\Request;

class ProCoursesController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'Doctor') {
            $courses = Course::where('DocName', $user->name)->paginate(8);
        } else {
            $courses = Course::paginate(8);
        }

        return view('course.doctor', compact('courses'));
    }}
