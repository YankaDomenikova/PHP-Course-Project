<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(){
        $course = Course::all();
        return view('dashboard', compact('course'));
    }

    public function add(){
        $teacher = Teacher::all();
        $course = Course::all();
        $organization = Organization::all();
        return view('add_course', compact('course', 'teacher', 'organization'));
    }

    public function preview(Course $course){
        return view('course_info', compact('course'));
    }

    public function create(Request  $request){
        $this->validate($request, [
            'course_name' => 'required',
            'category' => 'required',
            'date' => 'required',
            'duration' => 'required',
            'venue' => 'required',
            'organization_name' => 'required',
            'full_name' => 'required'
        ]);
        $course = new Course();
        $course->course_name = $request->course_name;
        $course->category = $request->category;
        $course->date = $request->date;
        $course->duration = $request->duration;
        $course->venue = $request->venue;

        $teacher = DB::table('teachers')->where('full_name', $request->full_name)->first();
        if ($teacher != null){
            $course->teacher_id = $teacher->id;
        }

        $org = DB::table('organizations')->where('organization_name', $request->organization_name)->first();
        if ($org != null){
            $course->organization_id = $org->id;
        }
        $course->save();

        return redirect('/dashboard');
    }
}
