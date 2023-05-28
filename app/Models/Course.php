<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['course_id', 'name', 'image_path', 'DocName'];

    public function registeredStudents()
{
    return $this->belongsToMany(User::class, 'registered_courses', 'course_id', 'user_id');
}
}
