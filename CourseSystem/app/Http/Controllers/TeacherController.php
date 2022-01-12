<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function allTeachers(){
        $teacher = Teacher::all();
        return view('teachers_list_admin',  compact('teacher'));
    }

    public function add(){
        $teacher = Teacher::all();
        return view('add_teacher' );
    }

    public function create(Request  $request){
        $this->validate($request, [
            'full_name' => 'required',
        ]);
        $teacher = new Teacher();
        $teacher->full_name = $request->full_name;

        $teacher->save();

        return redirect('/teachers');
    }

    public function edit(Teacher $teacher){
        return view('edit_teacher', compact('teacher'));

    }

    public function update(Request $request, Teacher $teacher)
    {
        if (isset($_POST['delete'])) {
            $teacher->delete();

            return redirect('/teachers');
        } else {
            $this->validate($request, [
                'full_name' => 'required',
            ]);
            $teacher->full_name = $request->full_name;

            $teacher->save();
            return redirect('/teachers');
        }
    }
}
