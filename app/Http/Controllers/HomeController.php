<?php

namespace App\Http\Controllers;

use App\Models\ClassRom;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function about()
    {
        return view('FrontPage.about');
    }
    public function index(){
        $number_teacher = Teacher::all()->count();
        $number_class = ClassRom::all()->count();
        $number_student = Student::all()->count();
        return view('home',compact('number_class','number_student','number_teacher'));
    }
}
