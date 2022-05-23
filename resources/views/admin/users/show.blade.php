@extends('layouts.admin')

@section('content')

<div class="card col-lg-12">
    <div class="card-header">
     <h4 style="margin-top: 30px;">User View</h4>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label>Name:</label>
        {{$user->name}}
      </div>
      <div class="form-group">
        <label>Email:</label>
       {{$user->email}}
      </div>
      <div class="form-group">
        <label>Roles:</label>
        @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
            {{ $v }}
            @endforeach
        @endif
      </div>
    <div class="card-footer">
        <a class="btn btn-info btn btn-block btn-primary btn-sm col-lg-1" href="{{route('admin.users.index')}}"><i class="fas fa-backspace"></i></a>
    </div>
  </div>

@endsection
