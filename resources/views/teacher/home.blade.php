@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h2>Welcome Teacher - {{ Auth::user()->name }}</h2>

                <div class="form-group">
                    <a href="{{route('students.index')}}"><button type="button" class="btn btn-primary col-sm-2">Section</button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop