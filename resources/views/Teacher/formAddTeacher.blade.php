@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{__('teacher.add teacher')}}</h1>
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('img/teacherImg/addTeacher.png')}}" alt="img" style="width:600px;">
            </div>
            <div class="col-lg-6">
                <form action="{{route('insert_teacher')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>{{__('teacher.name_en')}}</label>
                        <input type="text" class="form-control" name="name_en" />
                    </div>
                    <div class="form-group">
                        <label>{{__('teacher.name_ar')}}</label>
                        <input type="text" class="form-control" name="name_ar"/>
                    </div>
                    <div class="form-group">
                        <label>{{__('teacher.phon_number')}}</label>
                        <input type="number" class="form-control" name="phon_number" />
                    </div>
                    <div class="form-group">
                        <label>{{__('teacher.address_ar')}}</label>
                        <input type="text" class="form-control" name="address_ar" />
                    </div>
                    <div class="form-group">
                        <label>{{__('teacher.address_en')}}</label>
                        <input type="text" class="form-control" name="address_en" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-dark color-btn" value="{{__('teacher.add teacher')}}">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
