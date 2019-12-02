@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
             <div class="form-group mb-5">
               <a href="{{route('admin.home')}}"><button type="button" class="btn btn-primary col-sm-2">Back</button></a>
             </div>
            <h2>Users</h2>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Created</th>
                      <th></th>
                  </tr>
                </thead>
                <tbody>
                    @if($users)
                    @foreach ($users as $user)
                  <tr>
                    <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                      <td>
                          {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy' , $user->id]]) !!}
                          {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-7']) !!}
                          {!! Form::close() !!}
                      </td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
            {{$users->links()}}
            <div class="form-group">
                <a href="{{route('users.create')}}"><button type="button" class="btn btn-primary col-sm-2">Create User</button></a>
            </div>
   </div>
  </div>
 </div>
</div>
@stop