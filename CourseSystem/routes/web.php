<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\OrganizationController;

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

Route::get('/',[CourseController::class, 'index']);
Route::get('/all_teachers',[TeacherController::class, 'index']);
Route::get('/all_organizations',[OrganizationController::class, 'index']);
Route::get('/search',[CourseController::class, 'search']);

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard',[CourseController::class, 'allCourses'])->name('dashboard');
    Route::get('/course', [CourseController::class, 'add']);
    Route::post('/course',[CourseController::class, 'create']);
    Route::get('/course_info/{course}', [CourseController::class, 'preview']);
    Route::get('/edit_course/{course}', [CourseController::class, 'edit']);
    Route::post('/edit_course/{course}', [CourseController::class, 'update']);


    Route::get('/teachers',[TeacherController::class, 'allTeachers'])->name('teachers');
    Route::get('/teacher', [TeacherController::class, 'add']);
    Route::post('/teacher',[TeacherController::class, 'create']);
    Route::get('/edit_teacher/{teacher}', [TeacherController::class, 'edit']);
    Route::post('/edit_teacher/{teacher}', [TeacherController::class, 'update']);

    Route::get('/organizations',[OrganizationController::class, 'allOrganizations'])->name('organizations');

    Route::get('/organization', [OrganizationController::class, 'add']);
    Route::post('/organization',[OrganizationController::class, 'create']);
    Route::get('/edit_organization/{organization}', [OrganizationController::class, 'edit']);
    Route::post('edit_organization/{organization}', [OrganizationController::class, 'update']);
});
