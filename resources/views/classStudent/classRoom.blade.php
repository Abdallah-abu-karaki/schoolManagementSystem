@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <br>
                <br>
                <table class="table table-dark text-center ">
                    <thead>
                    <tr>
                        <th >{{__('classPage.name_ar')}}</th>
                        <th >{{__('classPage.name_eng')}}</th>
                        <th >{{__('classPage.number student can content')}}</th>
                        <th>{{__('classPage.delete')}}</th>
                        <th>{{__('classPage.edit')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($classRooms as $class)
                    <tr>
                        <td>{{$class->name_ar}}</td>
                        <td>{{$class->name_en}}</td>
                        <td>{{$class->number_count}}</td>
                        <td><a class="btn btn-danger" href="/classRoom/delete/{{$class->id}}">{{__('classPage.delete class')}}</a></td>
                        <td><a class="btn btn-info" href="#">{{__('classPage.edit class')}}</a></td>
                    </tr>
                @endforeach
                    </tbody>
                </table>
                {!! $classRooms->links() !!}
            </div>
            <div class="col-lg-4">
                <br>
                <br>
                <form action="{{route('addClass')}}" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label>{{__('classPage.name_eng')}}</label>
                        <input class="form-control" type="text" name="name_ar">
                    </div>
                    <div class="form-group">
                        <label>{{__('classPage.name_ar')}}</label>
                        <input class="form-control" type="text" name="name_en">
                    </div>
                    <div class="form-group">
                        <label>{{__('classPage.number student can content')}}</label>
                        <input class="form-control" type="number" name="number_count">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn color-btn" value="{{__('classPage.Add Class')}}">
                    </div>
                </form>
            </div>

        </div>
    </div>

    @endsection
