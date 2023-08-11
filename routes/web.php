<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\RegisteredCourseController;
use App\Http\Controllers\ProCoursesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PythonController;
use App\Http\Controllers\FaceRecognitionController;
use App\Http\Controllers\RecognitionController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Auth\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/professor' , [HomeController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/contact', [ProfileController::class, 'contact'])->name('contact');
Route::get('/courses', [CoursesController::class, 'index'])->name('courses.index');
Route::post('/courses', [CoursesController::class, 'store'])->name('courses.store');
Route::get('/profile/regcourse', [RegisteredCourseController::class, 'index'])->name('Regcourses.index');
Route::get('/profile/procourse', [ProCoursesController::class, 'index'])->name('Procourses.index');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/attendance/{course_id}', [AttendanceController::class, 'show'])->name('attendance.show');
Route::post('/attendance/mark', [AttendanceController::class, 'markAttendance'])->name('attendance.mark');

Route::get('/run-python-script', [PythonController::class, 'runScript']);
Route::get('/face-recognition', [FaceRecognitionController::class, 'recognize'])->middleware('web');
Route::post('/api/data', [RecognitionController::class, 'store']);
Route::get('/timetable', [TimetableController::class, 'index'])->name('timetable.index');
Route::get('/timetable/{id}', [TimetableController::class, 'show']);Route::post('/attendance/save', [AttendanceController::class, 'save'])->name('attendance.save');
Route::post('/attendance/save', [AttendanceController::class, 'save'])->name('attendance.save');
Route::post('/submit', [FormController::class, 'submit'])->name('form.submit');
Route::post('/upload-photo', [RegisterController::class, 'uploadPhoto'])->name('upload.photo');
Route::get('/admin/dashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/admin/courses', [ProfileController::class, 'addcourse'])->name('addcourse');
Route::get('/admin/complain', [ProfileController::class, 'complain'])->name('complain');
