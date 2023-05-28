<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use App\Models\RegisteredCourse;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
{
    $user = Course::all();

    
    return view('course.index')->with('courses',Course::paginate(8))->with('user',$user);
}
    public function store(Request $request)
{

    $userId = Auth::id();
    $courseId = $request->course_id;

    // Check if the user has already registered for the course
    $existingRegistration = RegisteredCourse::where('user_id', $userId)
        ->where('course_id', $courseId)
        ->exists();

    if ($existingRegistration) {
        // User has already registered for the course, handle accordingly
        // For example, you can redirect back with an error message
        return redirect()->back()->with('error', 'You have already registered for this course.');
    }
    $course = new RegisteredCourse();

    $course->course_id = $request->course_id;
    $course->name = $request->name;
    $course->DocName = $request->DocName;
    $course->image_path = $request->image_path;

    $course->user()->associate(Auth::user());

    $course->save();

    return redirect('/profile/regcourse');
}
}
