@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div><a href="{{route ('users.index')}}">Users</a> </div>
                    <div><a href="{{route ('section.store')}}">Sections</a> </div>
                    <div><a href="{{route ('students.index')}}">Students</a> </div>
                    <div><a href="{{route ('teacher.home')}}">Teacher</a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
