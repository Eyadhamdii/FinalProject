<?php

namespace App\Models;
use App\Models\Timetable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'name',
        'image_path',
        'DocName',
       'timetable_id',


];
public function users()
{
    return $this->belongsToMany(User::class, 'registered_courses', 'course_id', 'user_id');
}

public function timetable()
{
    return $this->belongsTo(Timetable::class);
}




    public function registeredStudents()
    {
        return $this->hasMany(RegisteredCourse::class, 'course_id');
    }
    
    public function registeredCourses()
    {
        return $this->hasMany(RegisteredCourse::class, 'course_id');
    }
    // public function registeredStudents()
    // {
    //     return $this->belongsToMany(User::class, 'registered_courses', 'course_id', 'user_id');
    // }

}
