<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceRecord extends Model
{
    use HasFactory;

    protected $table = 'attendance_records';

    protected $fillable = [
        'student_id',
        'attendance_status',
    ];

    // Define the relationship with the Student model
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
