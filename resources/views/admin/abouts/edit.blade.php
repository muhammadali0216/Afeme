@extends('layouts.admin')

@section('content')

<form action="{{route('admin.abouts.update', $about->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="card col-lg-12">
    <div class="card-header">
     <h4 style="margin-top: 30px;">TEXT</h4>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label>Title</label>
        <input type="text" value="{{$about->title}}" class="form-control form-control-sm" name="title">
      </div>
      <div class="form-group">
        <label>Description</label>
        <input type="text" value="{{$about->description}}" class="form-control form-control-sm" name="description">
      </div>
      <div class="form-group">
        <label>Body</label>
        <textarea class="summernote"  name="body">{!!$about->body!!}</textarea>
      </div>
      <label>IMAGE</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" name="image" id="customFile">
        <label class="custom-file-label" for="customFile"></label>
      </div>
    </div>

    <img style="margin-left: 27px" src="/admin2/abouts/{{$about->image}}" width="200" alt="">

    <div class="card-footer">
        <button  style="margin-left: 1px ;" type="submit" class="btn btn-outline-primary col-lg-1"><i class="fas fa-edit"></i></button>
      </div>
    </form>
  </div>

  @endsection
