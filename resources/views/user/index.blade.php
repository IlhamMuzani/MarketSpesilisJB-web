@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tabel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url ('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Tabel</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

    
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Tabel</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="card">
              <div class="card-header">
              <form method="get" action="{{route('user.index')}}">
                <h3 class="card-title"> 
                  <input type="text" name="keyword" class="form-control float-right" placeholder="Search" value="{{Request::get('keyword')}}">
                </h3>
                <h3 class="card-title">  
                  <button type="submit" class="btn btn-default ml-2"><i class="fas fa-search"></i></button>
                </h3>
              </form>
              </div>

             
          

      <!-- End Breadcrumb-->
      <div class="row">
      <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data User Jasa</h5>
              <div class="card-body table-responsive p-4">
                <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Username</th>
                      <th>No Telepon</th>
                      <th>Action</th>
                      <!-- <th style ="width: 140px"> Action </th> -->
                    </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($jasa as $key => $data)
                    <tr>
                      <td>{{  $jasa->firstItem() + $key }}</td>
                      <td>{{ $data->username }}</td>
                      <td>{{ $data->phone }}</td>
                      <td>
                      <form method="post" action="{{ route('user.destroy', $data->id) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus data ini ?')">
                                @csrf
                                {{ method_field('DELETE') }}
                                <!-- <a class="btn btn-warning" href="{{ route('user.edit', $data->id)}}">Edit</a> -->
                                <!--<button class="btn btn-danger"> <i class ="fa fa-trash"> </i></button>-->
                                <a class="btn btn-primary" href="{{ route('user.show', $data->id)}}"> <i class="fas fa-info-circle"></i></a>
                                </form>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                <div class="">
                {{ $jasa->appends(Request::all())->links('pagination::bootstrap-4') }}
              </div>           
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data User Pembeli</h5>
              <div class="card-body table-responsive p-4">
                <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Username</th>
                      <th>No Telepon</th>
                      <th>Action</th>
                      <!-- <th style ="width: 140px"> Action </th> -->
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($pelanggan as $key => $data)
                    <tr>
                      <td>{{ $pelanggan->firstItem() + $key }}</td>
                      <td>{{ $data->username }}</td>
                      <td>{{ $data->phone }}</td>
                      <td>
                      <form method="post" action="{{ route('user.destroy', $data->id) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus data ini ?')">
                                @csrf
                                {{ method_field('DELETE') }}
                                <!-- <a class="btn btn-warning" href="{{ route('user.edit', $data->id)}}">Edit</a> -->
                                <!--<button class="btn btn-danger"> <i class ="fa fa-trash"> </i></button>-->
                                <a class="btn btn-primary" href="{{ route('user.show', $data->id)}}"> <i class="fas fa-info-circle"></i></a>
                                </form>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                {{ $pelanggan->appends(Request::all())->links('pagination::bootstrap-4') }}
                    </div>              
                  </div>
                 </div>          
              </div>
            </div>          
          </div>
        </div>
      </div>
    </section>
@endsection
