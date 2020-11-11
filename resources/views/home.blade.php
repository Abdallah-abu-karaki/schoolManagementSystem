@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center">Management School</h1>
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <div class="card" >
                <img class="card-img-top" style="height:200px" src="{{asset('img/teacherImg.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Teacher</h5>
                    <p class="card-text">Number teacher in school .<span class="badge bg-warning ">{{$number_teacher}}</span></p>
                    <a href="{{route('teacher')}}" class="btn btn-primary">show more </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card" >
                <img class="card-img-top" style="height:200px" src="{{asset('img/classImg.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Student</h5>
                    <p class="card-text">Number student in school .<span class="badge bg-warning ">{{$number_student}}</span></p>
                    <a href="{{route('student')}}" class="btn btn-primary">show more</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card" >
                <img class="card-img-top" style="height:200px" src="{{asset('img/stuentImg.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Class Room</h5>
                    <p class="card-text">Number class room in school .<span class="badge bg-warning ">{{$number_class}}</span></p>
                    <a href="{{route('classRoom')}}" class="btn btn-primary">show more</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
