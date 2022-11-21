@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Update Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">




<form method="POST" action="{{ route('produkjasa.update',  $produkjasa->id) }}" role="form" enctype="multipart/form-data">
                  @csrf
                  {{ method_field('PUT') }}
                <div class="form-group">
                  <label for="exampleInputFile">Nama Toko</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{ old('nama_toko', $produkjasa->nama_toko) }}" placeholder="Nama_toko" name="nama_toko">
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
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{ old('alamat', $produkjasa->alamat) }}" placeholder="Alamat" name="alamat">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputFile">No telpone</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{ old('phone', $produkjasa->phone) }}"placeholder="Phone" name="phone">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Harga</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{ old('harga', $produkjasa->harga) }}" placeholder="Harga" name="harga">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Latitude</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{ old('latitude', $produkjasa->latitude) }}" placeholder="Latitude" name="latitude">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputFile">Longitude</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"value="{{ old('longitude', $produkjasa->longitude) }}" placeholder="Longitude" name="longitude">
                  </div>
                  <div class="form-group">
                  <div class="form-group">
                  <div class="form-group">
                    <label for="exampleInputFile">Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" value="{{ old('gambar', $produkjasa->gambar) }}" id="exampleInputFile" name="gambar">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="exampleInputFile">Deskripsi</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{ old('deskripsi', $produkjasa->deskripsi) }}" placeholder="Deskripsi" name="deskripsi">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Status</label>
                  <select class="form-control" name="status" value="{{ old('status', $produkjasa->status) }}">
                          <option value='produk'>Produk</option>
                          <option value='material'>Material</option>
                        </select>
                  </div>
                  
                <!-- /.card-body -->

                <div class="modal-footer">
              <a type="button" class="btn btn-secondary" a href="{{ route('produkjasa.index') }}">Tutup</a>
              <button type="submite" class="btn btn-primary">Tambah</button>
            </div>
            </form>

            @endsection
