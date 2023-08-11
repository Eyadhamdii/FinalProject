<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendanceRecord extends Model
{
    protected $fillable = ['student_id', 'attendance_status'];

    public function student()
    {
        return $this->belongsTo(RegisteredCourse::class, 'student_id');
    }
}

