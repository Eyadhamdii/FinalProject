<?php
namespace App\Http\Controllers;
use App\Models\Timetable;

use App\Models\Course;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function index()
    {
        $timetables = Timetable::with('course')->get();

        return view('timetable.index', compact('timetables'));
    }
}
