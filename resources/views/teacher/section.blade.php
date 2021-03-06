@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-group">
            <h1>Students</h1>

            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td><a href="{{route('teacher.student',$student->id)}}">{{$student->name}}</a></td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['SectionController@destroy' , $student->id]]) !!}
                            {!! Form::submit('Delete Student', ['class'=>'btn btn-danger col-sm-5']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <a class="btn btn-primary" href="{{ (auth()->user()->role->name == 'administrator') ? route('section.index') : ((auth()->user()->role->name == 'teacher') ? route('teacher.home') : '')}}">Back</a>

        </div>
    </div>


@stop