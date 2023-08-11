<?php

namespace App\Http\Controllers;
use App\Models\AttendanceRecord;
use Illuminate\Support\Facades\Mail;
use App\Mail\AbsentNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\Course;
use App\Models\User;
use App\Models\RecognizedName;
use App\Models\RegisteredCourse;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function show($id)
    {
        // Retrieve the registered students for the course
        $registeredStudents = RegisteredCourse::with('user')->where('course_id', $id)->get();
    
        // Retrieve the recognized names data
        $recognizedNamesData = RecognizedName::all();
    
        // Build the recognized names array
        $recognizedNames = [];
        foreach ($recognizedNamesData as $data) {
            $recognizedNames[$data->name] = [
                'day' => $data->day,
                'time' => $data->time,
            ];
        }
    
        // Pass the data to the view
        return view('attendance.show', compact('registeredStudents', 'recognizedNames'));
    }
    

    
    
    
    

    
    
    
public function markAttendance(Request $request)
{
    // Get the student IDs and their attendance status from the request
    $studentIds = $request->input('student_ids');
    $attendanceStatuses = $request->input('attendance_statuses');
    
    // Get the current day
    $currentDay = date('l');
    
    // Iterate over each student
    foreach ($studentIds as $key => $studentId) {
        $student = RegisteredCourse::find($studentId);
        $studentName = $student->name;
    
        // Check if the student's name is recognized for the current day
        $isRecognized = RecognizedName::where('name', $studentName)
            ->where('day', $currentDay)
            ->exists();
    
        // Mark the attendance based on recognition
        $attendanceStatuses[$key] = $isRecognized ? 'Present' : 'Absent';
    
        // Update the attendance status for the student
        $student->attendance_status = $attendanceStatuses[$key];
        $student->save();
        
        // Send absent notification email if the student is absent
        if ($attendanceStatuses[$key] === 'Absent') {
            $mailData = [
                'studentName' => $student->user->name,
                'courseName' => $student->course->name,
            ];
    
            Mail::to($student->user->email)->send(new \App\Mail\AbsentNotification(...$mailData));
        }
        
        // Save the attendance record to the database
        AttendanceRecord::create([
            'student_id' => $studentId,
            'attendance_status' => $attendanceStatuses[$key],
        ]);
    }
    
    // Redirect back to the attendance show page
    return redirect()->back()->with('success', 'Attendance marked successfully.');
}

    public function save(Request $request)
    {
        $data = $request->input('attendance');

        foreach ($data as $studentId => $attendanceStatus) {
            // Save the attendance record to the database
            AttendanceRecord::create([
                'student_id' => $studentId,
                'attendance_status' => $attendanceStatus,
            ]);
        }

        return redirect()->back()->with('success', 'Attendance saved successfully.');
    }
}

