<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $table = 'timetables';

    protected $fillable = [
        'day',
        'time',
        'course_id',
        // Add more fillable attributes as needed
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function recognizedName()
    {
        return $this->hasOne(RecognizedName::class, 'day', 'day');
    }
    public function recognizedNames()
    {
        return $this->hasOne(RecognizedName::class, 'day', 'day');
    }
    
}
