@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Create Student</h1>


                {!! Form::open(['method'=>'POST', 'action' => 'StudentsController@store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('section_id', 'Section:') !!}
                    {!! Form::select('section_id', ['1'=> 'I-1','2'=> 'II-1','3'=> 'III-1','4'=> 'IV-1','5'=> 'V-1','6'=> 'VI-1','7'=> 'VII-1','8'=> 'VIII-1'] + $section, null, ['class'=>'form-control']) !!}
                </div>
                {{--<div class="form-group">--}}
                    {{--{!! Form::label('email', 'Email:') !!}--}}
                    {{--{!! Form::email('email', null, ['class'=>'form-control']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('is_lower_section', 'Section:') !!}--}}
                    {{--{!! Form::select('is_lower_section', ['1'=> '1-4','2'=> '5-8'] + $section, null, ['class'=>'form-control']) !!}--}}
                {{--</div>--}}


                {{--<div class="form-group">--}}
                    {{--{!! Form::label('title', 'Title:') !!}--}}
                    {{--{!! Form::text('title', null, ['class'=>'form-control']) !!}--}}
                {{--</div>--}}


                <div class="form-group">
                    {!! Form::submit('Create Student', ['class'=>'btn btn-primary']) !!}
                </div>


                {!! Form::close() !!}

                @include('includes.errors')

            </div>
        </div>
    </div>
@stop