@extends('layouts.admin')

@section('content')

<form action="{{route('admin.roles.index')}}" method="POST">
    @csrf
<div class="card col-lg-12">
    <div class="card-header">
     <h4 style="margin-top: 30px;">Role Create</h4>
    </div>
    <div class="pull-right">
        <a href="{{route('admin.roles.index')}}" style="margin-left: 25px" class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-backspace"></i></a>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control form-control-sm" name="name" required>
      </div>
        <div class="form-group">
            <label>Permission:</label>
            <br/>
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            <br/>
            @endforeach
        </div>
    </div>
    <div class="card-footer">
        <button  style="margin-left: 1px ;" type="submit" class="btn btn-outline-primary col-lg-1"><i class="fas fa-save"></i></button>
      </div>
    </form>
  </div>
  {!! Form::close() !!}
 @endsection


