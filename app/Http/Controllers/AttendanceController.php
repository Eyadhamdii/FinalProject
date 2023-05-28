<?php

namespace App\Http\Controllers;
use App\Models\RegisteredCourse;
use App\Models\Course;


use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('attendance.show', compact('course'));
    }
}
