<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function student(){
       $students = Student::select('id','name_ar','name_en','phon_number',
        'address_ar','address_en','image_student')->paginate(5);

        return view('FrontPage.student',compact('students'));
    }
    public function formAdd(){
        $teachers =  Teacher::with(['students'=>function($q){
          $q->select('id','name_ar','name_en','teacher_id');
        }])->get();

        return view('FrontPage.formAdd' ,compact('teachers'));
    }
    public function addStudent(Request $request){


        $file_extention = $request->image_student->getClientOriginalExtension();
        $file_name = time().'.'.$file_extention;
        $path = "img/studentImg";
        $request->image_student->move($path,$file_name);



        Student::create([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'phon_number'=>$request->phon_number,
            'address_ar'=>$request->address_ar,
            'address_en'=>$request->address_en,
            'image_student'=>$file_name,
            'user_id'=>Auth::id(),
            'teacher_id'=>$request->teacher_id,
        ]);
        return redirect()->back();
    }

    public function delete($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('student');
    }
    public function editForm($id){
        $student = Student::find($id);

        $teacher =  Teacher::with(['students'=>function($q){
            $q->select('id','name_ar','name_en','teacher_id');
        }])->find($id);

        $teachers =  Teacher::with(['students'=>function($q){
            $q->select('id','name_ar','name_en','teacher_id');
        }])->get();

        return view('FrontPage.editFrom' ,compact('teachers','student','teacher'));

    }
    public function updateStudent(Request $request, $id){


        $student = Student::find($id);
        $student->update([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'phon_number'=>$request->phon_number,
            'address_ar'=>$request->address_ar,
            'address_en'=>$request->address_en,
            'teacher_id'=>$request->teacher_id,

        ]);

        return redirect('student');

    }


}
