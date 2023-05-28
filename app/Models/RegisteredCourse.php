<?php

namespace App\Models;

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
        return $this->belongsTo(Course::class);
    }
    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
