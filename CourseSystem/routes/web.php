<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard',[CourseController::class, 'allCourses'])->name('dashboard');

    Route::get('/course', [CourseController::class, 'add']);
    Route::post('/course',[CourseController::class, 'create']);

    Route::get('/course_info/{course}', [CourseController::class, 'preview']);

    Route::get('/edit_course/{course}', [CourseController::class, 'edit']);
    Route::post('/edit_course/{course}', [CourseController::class, 'update']);


});
