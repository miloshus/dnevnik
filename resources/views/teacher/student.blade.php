@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-group">
            <h1>Student - {{$student->name}}</h1>

            <table class="table">
                <thead>
                <tr>
                    <th>Subject</th>
                    <th>Grade</th>
                </tr>
                </thead>
                <tbody>
                @foreach($grades as $key => $grades_array)
                    @php
                        $subject=\App\Subject::find($key);
                    @endphp

                    <tr>
                        <td>{{$subject->name}}</td>
                            @foreach($grades_array as $grade)
                               <td>  {{$grade->grade}} </td>
                            @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{--<a class="btn btn-primary" href="{{ (auth()->user()->role->name == 'administrator') ? route('section.index') : ((auth()->user()->role->name == 'teacher') ? route('teacher.home') : '')}}">Back</a>--}}

        </div>
    </div>


@stop