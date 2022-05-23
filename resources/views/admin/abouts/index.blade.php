@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="/assetsadmin/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="/assetsadmin/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>About</h4>
        </div>

        @if (session('success1'))
        <center>
        <div class="alert alert-success alert-dismissible show  fade col-lg-6 ">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>×</span>
              </button>
             {{session('success1')}} <i class="icon fas fa-check"></i></h5>
            </div>
          </div>
        </center>
        @elseif (session('success2'))
        <center>
        <div class="alert alert-info alert-dismissible show fade col-lg-6">
          <div class="alert-body">
            <button class="close" data-dismiss="alert">
              <span>×</span>
            </button>
            {{session('success2')}} <i class="icon fas fa-check"></i></h5>
          </div>
        </div>
       </center>
        @elseif (session('success3'))
        <center>
        <div class="alert alert-danger alert-dismissible show fade col-lg-6">
          <div class="alert-body">
            <button class="close" data-dismiss="alert">
              <span>×</span>
            </button>
            {{session('success3')}} <i class="icon fas fa-check"></i></h5>
          </div>
        </div>
       </center>
          @endif

        @can('role-create')
                <a href="{{route('admin.abouts.create')}}" style="margin-left: 25px" class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-plus"></i></a>
         @endcan
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr style="text-align-last: center">
                    <th scope="col">№</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Body</th>
                    <th scope="col">Image</th>
                    <th scope="col">#</th>
                  </tr>
              </thead>
              <tbody>

                @foreach ($abouts as $about)
                <tr style="text-align-last: center">
                  <th>{{$loop->iteration}}</th>
                  <td>{{$about->title}}</td>
                  <td>{{$about->description}}</td>
                  <td>{!!$about->body!!}</td>
                  <td><img src="/admin2/abouts/{{$about->image}}"  width="150"></td>
                  <td>
                      @can('role-edit')
                  <a  style="margin-top: 15px" class="btn btn-info btn btn-block btn-info btn-sm" href="{{route('admin.abouts.edit', $about->id)}}"><i class="far fa-edit"></i></a>
                      @endcan
                      @can('role-list')
                  <a class="btn btn-primary btn btn-block btn-primary btn-sm" href="{{route('admin.abouts.show', $about->id)}}"><i class="fas fa-eye"></i></a>
                      @endcan
                  @can('role-delete')
                  <form action="{{route('admin.abouts.destroy', $about->id)}}"  method="POST">
                  @csrf
                  @method('DELETE')
                  <button style="margin-top: 8px;" type="submit" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                  @endcan
                  <br>
               </td>
                  </form>
               </tr>
            @endforeach
               </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('js')
<script src="/assetsadmin/bundles/datatables/datatables.min.js"></script>
<script src="/assetsadmin/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="/assetsadmin/bundles/jquery-ui/jquery-ui.min.js"></script>
<script src="/assetsadmin/js/page/datatables.js"></script>
@endsection


