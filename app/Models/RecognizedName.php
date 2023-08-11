<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecognizedName extends Model
{
    use HasFactory;
    protected $table = 'recognized_names'; // Specify the table name if different from the default
    
    protected $fillable = ['name',
'day','time',
];
public function registeredCourses()
{
    return $this->hasMany(RegisteredCourse::class, 'name', 'name');
}


    public function timetable()
{
    return $this->hasOne(Timetable::class);
}

    
}
