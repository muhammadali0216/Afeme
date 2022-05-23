 @extends('layouts.admin')

 @section('content')

 <div class="card col-lg-12">
    <div class="card-header">
     <h4 style="margin-top: 30px;">Role View</h4>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label>Name:</label>
        {{$role->name}}
      </div>
      <div class="form-group">
        <label>Permission:</label>
        @if(!empty($rolePermissions))
            @foreach($rolePermissions as $v)
                <label class="label label-success">{{ $v->name }},</label>
            @endforeach
        @endif
    </div>
    <div class="card-footer">
        <a class="btn btn-info btn btn-block btn-primary btn-sm col-lg-1" href="{{route('admin.roles.index')}}"><i class="fas fa-backspace"></i></a>
    </div>
  </div>

@endsection
