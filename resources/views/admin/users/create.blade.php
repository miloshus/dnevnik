@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-group mb-5">
                <a href="{{route('admin.home')}}"><button type="button" class="btn btn-primary col-sm-2">Back</button></a>
            </div>
            <h1>Create User</h1>


                {!! Form::open(['method'=>'POST', 'action' => 'AdminUsersController@store']) !!}

                <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('role_id', 'Role:') !!}
                        {!! Form::select('role_id', ['1'=> 'Administrator','2'=> 'Teacher','3'=> 'Professor','4'=> 'Parent','5'=> 'Principal'] + $roles, null, ['class'=>'form-control']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::label('password', 'Password:') !!}
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::submit('Create User', ['class'=>'btn btn-primary col-sm-2']) !!}
                    </div>


                {!! Form::close() !!}

            @include('includes.errors')

            </div>
        </div>
    </div>
    @stop