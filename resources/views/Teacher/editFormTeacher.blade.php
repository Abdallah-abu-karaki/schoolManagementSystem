@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('img/teacherImg/editTeacher.png')}}" alt="img" style="width:600px;">
            </div>
            <div class="col-lg-6">
                <form action="{{route('update_teacher',$teacher->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>{{__('teacher.name_en')}}</label>
                        <input type="text" class="form-control" name="name_en" value="{{$teacher->name_en}}" />
                    </div>
                    <div class="form-group">
                        <label>{{__('teacher.name_ar')}}</label>
                        <input type="text" class="form-control" name="name_ar"  value="{{$teacher->name_ar}}"/>
                    </div>
                    <div class="form-group">
                        <label>{{__('teacher.phon_number')}}</label>
                        <input type="number" class="form-control" name="phon_number"  value="{{$teacher->phon_number}}"/>
                    </div>
                    <div class="form-group">
                        <label>{{__('teacher.address_ar')}}</label>
                        <input type="text" class="form-control" name="address_ar"  value="{{$teacher->address_ar}}"/>
                    </div>
                    <div class="form-group">
                        <label>{{__('teacher.address_en')}}</label>
                        <input type="text" class="form-control" name="address_en"  value="{{$teacher->address_en}}"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn color-btn" value="{{__('teacher.edit info')}}"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
