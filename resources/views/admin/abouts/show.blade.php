 @extends('layouts.admin')

 @section('content')

 <div class="card col-lg-12">
    <div class="card-header">
     <h2 style="margin-top: 30px;  color:black">Korish</h2>
    </div>
    <div class="card-body">
      <div class="form-group">
        <h6 style="color:black">Sarlavha:</h6>
        {{$about->title}}
      </div>
      <div class="form-group">
        <h6 style="color:black">Tafsifi:</h6>
       {{$about->description}}
      </div>
      {{-- <div class="form-group">
        <h6 style="color:black">Faollik:</h6>
       {{$about->status==1 ? 'faol' : 'faol emas'}}
      </div> --}}
      <div class="form-group">
        <h6 style="color:black">Matin:</h6>
       {!!$about->body!!}
      </div>

    <img  src="/admin2/abouts/{{$about->image}}" width="200" alt="">

    <div class="card-footer">
        <a class="btn btn-info btn btn-block btn-primary btn-sm col-lg-1" href="{{route('admin.abouts.index')}}"><i class="fas fa-backspace"></i></a>
    </div>

  </div>

@endsection

