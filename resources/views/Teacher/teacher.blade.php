@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="text-center">{{__('teacher.teacher part')}}</h1>
        <div class="row">
            <div class="col-lg-12">
                <br>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">{{__('teacher.name_ar')}}</th>
                        <th scope="col">{{__('teacher.name_en')}}</th>
                        <th scope="col">{{__('teacher.phon_number')}}</th>
                        <th scope="col">{{__('teacher.address_ar')}}</th>
                        <th scope="col">{{__('teacher.address_en')}}</th>
                        <th scope="col">{{__('teacher.operation')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)
                    <tr>
                        <td>{{$teacher->name_ar}}</td>
                        <td>{{$teacher->name_en}}</td>
                        <td>{{$teacher->phon_number}}</td>
                        <td>{{$teacher->address_ar}}</td>
                        <td>{{$teacher->address_en}}</td>
                        <td>
                            <a href="/teacher/delete/{{$teacher->id}}" class="btn btn-danger"><i class="fas fa-user-edit"></i> {{__('student.delete')}}</a>
                            <a href="/teacher/edit/{{$teacher->id}}" class="btn btn-info"><i class="fas fa-user-minus"></i> {{__('student.edit')}}</a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{route('add_teacher')}}" class="btn btn-info color-btn" ><i class="fas fa-plus"></i> {{__('teacher.add teacher')}}</a>
                {!! $teachers->links() !!}
            </div>
        </div>
    </div>

@endsection
