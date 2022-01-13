<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function allCourses(){
        $course = Course::all();
        return view('dashboard', compact('course'));
    }

    public function add(){
        $teacher = Teacher::all();
        $organization = Organization::all();
        return view('add_course', compact( 'teacher', 'organization'));
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
        $course->teacher_id = $teacher->id;

        $org = DB::table('organizations')->where('organization_name', $request->organization_name)->first();
        $course->organization_id = $org->id;

        $course->save();

        return redirect('/dashboard');
    }

    public function preview(Course $course){
        return view('course_info', compact('course'));
    }

    public function edit(Course $course){
        $teacher = Teacher::all();
        $organization = Organization::all();
        return view('edit_course', compact('course', 'teacher', 'organization'));

    }

    public function update(Request $request, Course $course)
    {
        if(isset($_POST['delete'])) {
            $course->delete();
            return redirect('/dashboard');
        }
        else
        {
            $this->validate($request, [
                'course_name' => 'required',
                'category' => 'required',
                'date' => 'required',
                'duration' => 'required',
                'venue' => 'required',
                'full_name' => 'required',
                'organization_name' => 'required',

            ]);

            $course->course_name = $request->get('course_name');
            $course->category = $request->category;
            $course->date = $request->date;
            $course->duration = $request->duration;
            $course->venue = $request->venue;


            $teacher = DB::table('teachers')->where('full_name', $request->get('full_name'))->first();
            $course->teacher_id = $teacher->id;


            $org = DB::table('organizations')->where('organization_name', $request->get('organization_name'))->first();
            $course->organization_id = $org->id;


            $course->save();
            return redirect('/dashboard');
        }
    }
}
