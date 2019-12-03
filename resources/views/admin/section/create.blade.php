@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group mb-5">
                    <a href="{{route('section.index')}}"><button type="button" class="btn btn-primary col-sm-2">Back</button></a>
                </div>
                <h1>Create Section</h1>

                {!! Form::open(['method'=>'POST', 'action' => 'SectionController@store']) !!}

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('name', 'Name:') !!}--}}
                    {{--{!! Form::text('name', null, ['class'=>'form-control']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('email', 'Email:') !!}--}}
                    {{--{!! Form::email('email', null, ['class'=>'form-control']) !!}--}}
                {{--</div>--}}

                <div class="form-group">
                    {!! Form::label('is_lower_section', 'Section:') !!}
                    {!! Form::select('is_lower_section', ['1'=> '1-4','2'=> '5-8'] + $section, null, ['class'=>'form-control']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <select name="user_id" id="">

                        @foreach($teachers as $teacher)
                             <option value='{{$teacher}}'>{{$teacher}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    {!! Form::submit('Create Section', ['class'=>'btn btn-primary col-sm-2']) !!}
                </div>


                {!! Form::close() !!}

                @include('includes.errors')

            </div>
        </div>
    </div>
@stop