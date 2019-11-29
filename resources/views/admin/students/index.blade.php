@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group mb-5">
                    <a href="{{route('admin.home')}}"><button type="button" class="btn btn-primary col-sm-2">Back</button></a>
                </div>
                <h2>Students</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Section</th>
                        <th>Teacher</th>
                        <th>Created at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($students)
                        @foreach ($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->section['title']}}</td>
                                <td>{{$student->user['name']}}</td>
                                <td>{{$student->created_at}}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <div class="form-group">
                    <a href="{{route('students.create')}}"><button type="button" class="btn btn-primary col-sm-2">Create</button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop