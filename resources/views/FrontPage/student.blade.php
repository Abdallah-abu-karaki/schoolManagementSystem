@extends('layouts.app')

@section('content')
<body class="background-image:url('../img/ground.png');background-size:cover;">
<div class="container">
    <h1 class="text-center">{{__('student.student dep')}}</h1>
    <div class="row">
        <div class="col-lg-12">
            <br>
            <table class="table table-dark table-responsive text-center">
                <thead>
                <tr>
                    <th scope="col">{{__('student.name_eng')}}</th>
                    <th scope="col">{{__('student.name_ar')}}</th>
                    <th scope="col">{{__('student.phone_number')}}</th>
                    <th scope="col">{{__('student.adress_ar')}}</th>
                    <th scope="col">{{__('student.adrees_en')}}</th>
                    <th scope="col">{{__('student.image_student')}}</th>
                    <th scope="col">{{__('student.operation')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->name_en}}</td>
                    <td>{{$student->name_ar}}</td>
                    <td>{{$student->phon_number}}</td>
                    <td>{{$student->address_ar}}</td>
                    <td>{{$student->address_en}}</td>
                    <td><img src="{{asset('img/studentImg/'.$student->image_student)}}" alt="img" style="width:100px;height:100px"></td>
                    <td>
                        <a href="/student/delete/{{$student->id}}" class="btn btn-danger"><i class="fas fa-user-edit"></i> {{__('student.delete')}}</a>
                    </td>
                    <td>
                        <a href="/student/edit/{{$student->id}}" class="btn btn-success"><i class="fas fa-user-minus"></i> {{__('student.edit')}}</a>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('formAdd')}}" class="btn color-btn"><i class="fas fa-plus"></i> {{__('student.add student')}}</a>
            {!! $students->links() !!}
        </div>
    </div>
</div>
</body>
    @endsection
