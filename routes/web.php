<?php

use App\Http\Controllers\ClassRomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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





Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function(){

    Route::get('/', function () {
        return view('FrontPage.master');
    });

    Auth::routes();

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/student', [StudentController::class, 'student'])->name('student')->middleware(['auth']);
    Route::get('/student/add',[StudentController::class , 'formAdd'])->name('formAdd');
    Route::post('/student/add',[StudentController::class , 'addStudent'])->name('addStudent');
    Route::get('/student/delete/{id}',[StudentController::class , 'delete'])->name('deleteStudent');
    Route::get('/student/edit/{id}',[StudentController::class , 'editForm'])->name('editForm');
    Route::post('/student/update/{id}',[StudentController::class , 'updateStudent'])->name('updateStudent');

    Route::get('/teacher', [TeacherController::class, 'teacher'])->name('teacher');
    Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete_teacher'])->name('delete_teacher');
    Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit_teacher'])->name('edit_teacher');
    Route::post('/teacher/update/{id}', [TeacherController::class, 'update_teacher'])->name('update_teacher');
    Route::get('/teacher/add',[TeacherController::class , 'add_teacher'])->name('add_teacher');
    Route::post('/teacher/insert',[TeacherController::class , 'insert_teacher'])->name('insert_teacher');


    Route::get('/classRoom', [ClassRomController::class, 'classRoom'])->name('classRoom');
    Route::get('/classRoom/delete/{id}', [ClassRomController::class, 'delete'])->name('delete_class');
    Route::post('/classRoom/add',[ClassRomController::class,'add'])->name('addClass');


});







