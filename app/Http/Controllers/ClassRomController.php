<?php

namespace App\Http\Controllers;

use App\Models\ClassRom;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassRomController extends Controller
{
    public function classRoom(){
        $classRooms =ClassRom::select('id','name_ar','name_en','number_count')->paginate(5);
        return view('classStudent.classRoom',compact('classRooms'));
    }

    public function delete($id){
        $classroom = ClassRom::find($id);
        $classroom->delete();
        return redirect()->back();
    }
    public function add(Request $request){
        ClassRom::create([
           'name_ar'=>$request->name_ar,
           'name_en'=>$request->name_en,
           'number_count'=>$request->number_count,
            'number_st_avilable'=>$request->number_count,

        ]);
        return redirect('classRoom');
    }
}
