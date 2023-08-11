<?php

namespace App\Models;
use App\Models\Timetable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredCourse extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'course_id',
        'DocName',
        'image_path',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    
    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
    public function timetable()
    {
        return $this->belongsTo(Timetable::class, 'course_id', 'course_id');
    }
    
    
    public function isPresent($recognizedNames)
    {
        return in_array($this->user->name, $recognizedNames);
    }
    
    
    
}
