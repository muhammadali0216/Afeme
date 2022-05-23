@extends('layouts.admin')

@section('content')

<form action="{{route('admin.users.update', $user->id)}}" method="POST">
    @csrf
    @method('PUT')
<div class="card col-lg-12">
    <div class="card-header">
     <h4 style="margin-top: 30px;">User Edit</h4>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label>Name</label>
        <input type="text" value="{{$user->name}}" class="form-control form-control-sm form-control form-control-sm-sm" name="name">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" value="{{$user->email}}" class="form-control form-control-sm form-control form-control-sm-sm" name="email">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control form-control-sm form-control form-control-sm-sm" name="password">
      </div>
      <div class="form-group">
        <label>Confirm Password:</label>
        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control form-control-sm')) !!}
      </div>
      <div class="form-group">
        <label>Role</label>
        <select name="roles[]" class="form-control form-control-sm">
            @foreach($roles as $rol)
                    <option value="{{$rol}}">{{$rol}}</option>
            @endforeach
            </select>
      </div>
    </div>
    <div class="card-footer">
        <button  style="margin-left: 1px ;" type="submit" class="btn btn-outline-primary col-lg-1"><i class="fas fa-edit"></i></button>
      </div>
    </form>
  </div>

  {!! Form::close() !!}

  @endsection
