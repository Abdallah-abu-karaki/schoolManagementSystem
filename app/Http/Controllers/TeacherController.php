<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function teacher(){
        $teachers = Teacher::select('id','name_ar','name_en','address_ar','address_en','phon_number')->paginate(5);
        return view('Teacher.teacher',compact('teachers'));
    }
    public function delete_teacher($id){
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect('teacher');
    }

    public function add_teacher(){
        return view('Teacher.formAddTeacher');
    }

    public function insert_teacher(Request $request){

        Teacher::create([

            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'phon_number'=>$request->phon_number,
            'address_ar'=>$request->address_ar,
            'address_en'=>$request->address_en,
            'user_id'=>Auth::id(),

        ]);
        return redirect('teacher');
    }

    public function edit_teacher($id){
        $teacher = Teacher::find($id);
        return view('Teacher.editFormTeacher',compact('teacher'));
    }
    public function update_teacher(Request $request , $id){
        $teacher = Teacher::find($id);
        $teacher->update([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'phon_number'=>$request->phon_number,
            'address_ar'=>$request->address_ar,
            'address_en'=>$request->address_en,
        ]);
        return redirect('teacher');
    }


}
