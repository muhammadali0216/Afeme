@extends('layouts.admin')

@section('content')

<form action="{{route('admin.abouts.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="card col-lg-12">
    <div class="card-header">
     <h4 style="margin-top: 30px;">TEXT</h4>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control form-control-sm" name="title">
      </div>
      <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control form-control-sm" name="description">
      </div>
      <div class="form-group">
        <label>Body</label>
        <textarea class="summernote" name="body"></textarea>
      </div>
      <label>IMAGE</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" name="image" id="customFile">
        <label class="custom-file-label" for="customFile"></label>
      </div>
    </div>
    <div class="card-footer">
        <button  style="margin-left: 1px ;" type="submit" class="btn btn-outline-primary col-lg-1"><i class="fas fa-save"></i></button>
      </div>
    </form>
  </div>

  @endsection
