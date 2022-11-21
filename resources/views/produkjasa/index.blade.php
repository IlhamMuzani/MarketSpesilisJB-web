@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tabel Produk Jasa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Tabel Produk Jasa</li>
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
                <h3 class="card-title">Data Produk Jasa</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
              </div>

              
              <div class="card">
              <div class="card-header">
              <form method="get" action="{{route('produkjasa.index')}}">
                <h3 class="card-title"> 
                  <input type="text" name="keyword" class="form-control float-right " placeholder="Search" value="{{Request::get('keyword')}}">
                </h3>
                <h3 class="card-title">  
                  <button type="submit" class="btn btn-default ml-2"><i class="fas fa-search"></i></button>
                </h3>
              </form>
                <!-- <a type="button" class="btn btn-info float-right" href="{{ route('produkjasa.create')}}"><i class="fas fa-plus"></i> Add item</a> -->
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-10">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <!-- <th>Kd User</th> -->
                      <th>Nama Toko</th>
                      <th>Jenis Pembuatan</th>
                      <th>Alamat</th>
                      <th>No Telpone</th>
                      <th>Gambar</th>
                      <th>Status</th>
                      <th>Update At</th>
                      <th style ="width: 140px"> Action </th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($listprodukjasa as $key => $data)
                    <tr>
                      <td>{{ $listprodukjasa->firstItem() + $key }}</td>
                      <!-- <td>{{ $data->kd_user }}</td> -->
                      <td>{{ $data->user['nama_toko'] }}</td>
                      <td>{{ $data->jenis_pembuatan }}</td>
                      <td>{{ $data->kelurahan }}</td>
                      <td>{{ $data->phone }}</td>
                      <td>
                      <img class="img-thumbnail" src="{{ asset('storage/uploads/'.$data->gambar) }}" width="100px">
                      </td>                      
                      <td>{{ $data->status }}</td>
                      <td>{{ $data->updated_at }}</td>
                      <td>
                      <form method="post" action="{{ route('produkjasa.destroy', $data->id) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus data ini ?')">
                                @csrf
                                {{ method_field('DELETE') }}
                                <!--<a class="btn btn-primary" href="{{ route('produkjasa.edit', $data->id)}}"> <i class ="fa fa-edit"> </i></a>-->
                                <!--<button class="btn btn-danger"> <i class ="fa fa-trash"> </i></button>-->
                                <!-- <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Add item</button> -->
                                <a class="btn btn-primary" href="{{ route('produkjasa.show', $data->id)}}"> <i class="fas fa-info-circle"></i></a>
                                </form>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                {{ $listprodukjasa->appends(Request::all())->links() }}
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>

      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
