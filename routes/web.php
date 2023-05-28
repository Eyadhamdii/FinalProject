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
Route::get('/courses', [CoursesController::class, 'index'])->name('courses.index');
Route::post('/courses', [CoursesController::class, 'store'])->name('courses.store');
Route::get('/profile/regcourse', [RegisteredCourseController::class, 'index'])->name('Regcourses.index');
Route::get('/profile/procourse', [ProCoursesController::class, 'index'])->name('Procourses.index');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/attendance/{course_id}', [AttendanceController::class, 'show'])->name('attendance.show');
Route::get('/run-python-script', [PythonController::class, 'runScript']);
Route::get('/face-recognition', [FaceRecognitionController::class, 'recognize'])->middleware('web');

