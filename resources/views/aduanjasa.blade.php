@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tabel Laporan Jasa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tabel Laporan Jasa</li>
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
                <h3 class="card-title">Laporan Jasa</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">

                    <div class="input-group-append">
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-header">
                <h3 class="card-title"> <input type="text" name="table_search" class="form-control float-right" placeholder="Search"></h3>
                <h3 class="card-title">  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button></h3>
                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Add item</button>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Gambar</th>
                      <th>Deskripsi</th>
                      <th style ="width: 140px"> Action </th>
          

                    </tr>
                  </thead>
                  <tbody>

                  @foreach($listUser as $data)
                    <tr>
                      <td>{{ $data->id }}</td>
                      <td>{{ $data->gambar }}</td>
                      <td>{{ $data->deskripsi }}</td>
                      <td>
                      <a href="3">
                            <i class="fa fa-user-edit blue"></i>
                        </a>
                      /
                      <a href="3">
                            <i class="fa fa-trash red"></i>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          

      </div>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add item</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

              <form method="POST" action="{{ route('produkjasa.store') }}" role="form" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputFile">Jasa User id</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Jasa_userid" name="jasausers_id">
                  </div>
                <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputFile">Nama Toko</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama_toko" name="nama_toko">
                  </div>
                  <div class="form-group">
                  <div class="form-group">
                  <label for="exampleInputFile">Jenis Pembuatan</label>
                    <select class="form-control" name="jenis_pembuatan">
                          <option value='Pembuatan Bangunan'>Pembuatan Pagar</option>
                        </select>
                        </div>
                  <div class="form-group">
                  <label for="exampleInputFile">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat" name="alamat">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputFile">Latitude</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Latitude" name="latitude">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputFile">Longitude</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Longitude" name="longitude">
                  </div>
                  <div class="form-group">
                  <div class="form-group">
                  <div class="form-group">
                    <label for="exampleInputFile">Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Harga</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Harga" name="harga">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputFile">Deskripsi</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" name="deskripsi">
                  </div>
                <!-- /.card-body -->

                <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submite" class="btn btn-primary">Tambah</button>
            </div>
              </form>

            
          </div>
        </div>
      </div>

      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
