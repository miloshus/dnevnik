@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group mb-5">
                    <a href="{{route('admin.home')}}"><button type="button" class="btn btn-primary col-sm-2">Back</button></a>
                </div>
                <h2>Sections</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Class</th>
                        <th>Title</th>
                        <th>Teacher</th>
                        <th>Students</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($sections)
                        @foreach ($sections as $sec)
                            <tr>

                                <td>{{$sec->is_lower_section}}</td>
                                <td> <a href="{{route('teacher.section', $sec->id)}}">{{$sec->title}}</a></td>
                                <td>{{$sec->user['name']}}</td>
                                <td><a href="{{route('teacher.section', $sec->id)}}" class="btn btn-primary">View Students</a></td>


                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <div class="form-group">
                    <a href="{{route('section.create')}}"><button type="button" class="btn btn-primary col-sm-2">Create Section</button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop