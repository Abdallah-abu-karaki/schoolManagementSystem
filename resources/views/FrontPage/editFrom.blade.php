@extends('layouts.app')

@section('content')

    <h1 class="text-center">{{__('student.edit student info')}}</h1>
    <div class="container">
     <div class="row">
         <div class="col-lg-12">
             <form action="{{route('updateStudent',$student->id)}}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group">
                     <label>{{__('student.name_eng')}}</label>
                     <input type="text" class="form-control" name="name_en" value="{{$student->name_en}}"/>
                 </div>
                 <div class="form-group">
                     <label>{{__('student.name_ar')}}</label>
                     <input type="text" class="form-control" name="name_ar" value="{{$student->name_ar}}" />
                 </div>
                 <div class="form-group">
                     <label>{{__('student.phone_number')}}</label>
                     <input type="number" class="form-control" name="phon_number" value="{{$student->phon_number}}"/>
                 </div>
                 <div class="form-group">
                     <label>{{__('student.adress_ar')}}</label>
                     <input type="text" class="form-control" name="address_ar" value="{{$student->address_ar}}" />
                 </div>
                 <div class="form-group">
                     <label>{{__('student.adrees_en')}}</label>
                     <input type="text" class="form-control" name="address_en" value="{{$student->address_en}}" />
                 </div>
                 <div class="form-group">
                     <label>{{__('student.select teacher')}}</label>

                     <select class="form-control" name="teacher_id" >
                         @foreach($teachers as $tea)
                             @if(app()->getLocale()=="en")
                                 <option value="{{$tea->id}}">{{$tea->name_en}}</option>
                             @elseif(app()->getLocale()=="ar")
                                 <option  value="{{$tea->id}}">{{$tea->name_ar}}</option>
                             @endif
                         @endforeach
                     </select>
                 </div>
                 <div class="form-group">
                     <input type="submit" name="submit" class="btn color-btn" value="{{__('student.edit student')}}"/>
                 </div>
             </form>
         </div>
     </div>
    </div>
    @endsection
