@extends('layouts.app')

@section('content')


    <div class="container">
        <h1 class="text-center">{{__('student.add student')}}</h1>
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('img/studentImg/addStudent.png')}}" alt="addStudent" style="width:450px; padding-top:70px;"/>
            </div>
            <div class="col-lg-6">
                <form action="{{route('addStudent')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                    <div class="form-group">
                        <label>{{__('student.name_eng')}}</label>
                        <input type="text" class="form-control" name="name_en" />
                    </div>
                    <div class="form-group">
                        <label>{{__('student.name_ar')}}</label>
                        <input type="text" class="form-control" name="name_ar"/>
                    </div>
                    <div class="form-group">
                        <label>{{__('student.phone_number')}}</label>
                        <input type="number" class="form-control" name="phon_number" />
                    </div>
                            <div class="form-group">
                                <label>{{__('student.adress_ar')}}</label>
                                <input type="text" class="form-control" name="address_ar" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                    <div class="form-group">
                        <label>{{__('student.adrees_en')}}</label>
                        <input type="text" class="form-control" name="address_en" />
                    </div>
                    <div class="form-group">
                        <label>{{__('student.image_student')}}</label>
                        <input type="file" class="form-control" name="image_student" />
                    </div>
                    <div class="form-group">
                        <label>select teacher</label>

                        <select class="form-control" name="teacher_id">
                            @foreach($teachers as $teacher)
                                @if(app()->getLocale()=="en")
                                   <option value="{{$teacher->id}}">{{$teacher->name_en}}</option>
                                @elseif(app()->getLocale()=="ar")
                                    <option  value="{{$teacher->id}}">{{$teacher->name_ar}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" style="margin-top:37px;" class="btn color-btn" value="{{__('student.add student')}}"
                    </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @endsection

