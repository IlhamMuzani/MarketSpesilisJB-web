@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Create Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">




<form method="POST" action="{{ route('produkjasa.store') }}" role="form" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group">
                  <label for="exampleInputFile">Kd User</label>
                  <input type="text" name="kd_user" id="kd_user" class="form-control @error('kd_user') is-invalid @enderror" value="{{ old('kd_user') }}" autofocus>
                  @error('kd_user')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror                  
                </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Nama Toko</label>
                  <input type="text" name="nama_toko" id="nama_toko" class="form-control @error('nama_toko') is-invalid @enderror" value="{{ old('nama_toko') }}" autofocus>
                  @error('nama_toko')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror                  
                </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Jenis Pembuatan</label>
                    <select class="form-control" name="jenis_pembuatan" value="{{ old('jenis_pembuatan') }}">
                          <option value='Pembuatan Bangunan'>Pembuatan Bangunan</option>
                          <option value='Pembuatan Pagar'>Pembuatan Pagar</option>
                          <option value='Pembuatan Kanopi'>Pembuatan Kanopi</option>
                          <option value='Pembuatan Tangga'>Pembuatan Tangga</option>
                          <option value='Pembuatan Tralis'>Pembuatan Tralis</option>
                          <option value='Pembuatan Halaman'>Pembuatan Halaman</option>
                        </select>
                        </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Alamat</label>
                  <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" autofocus>
                  @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror                  
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">No Telpone</label>
                  <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" autofocus>
                  @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror                  
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Harga</label>
                  <input type="text" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}" autofocus>
                  @error('harga')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror                  
                </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Latitude</label>
                  <input type="text" name="latitude" id="latitude" class="form-control @error('latitude') is-invalid @enderror" value="{{ old('latitude') }}" autofocus>
                        @error('latitude')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror                  
                      </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Longitude</label>
                  <input type="text" name="longitude" id="longitude" class="form-control @error('longitude') is-invalid @enderror" value="{{ old('longitude') }}" autofocus>
                    @error('longitude')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror                  
                  </div>

                  <div class="form-group">
                  <div class="form-group">
                  <div class="form-group">
                    <label for="exampleInputFile">Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input type="file" name="gambar" id="gambar" class="custom-file-input @error('gambar') is-invalid @enderror" value="{{ old('gambar') }}" autofocus>
                      @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror                        
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Deskripsi</label>
                  <input type="text" name="deskripsi" id="longitude" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}" autofocus>
                    @error('deskripsi')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror                  
                  </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Status</label>
                  <select class="form-control" name="status" value="{{ old('status') }}">
                          <option value='produk'>Produk</option>
                          <option value='material'>Material</option>
                        </select>
                        </div>
                  
                <!-- /.card-body -->

                <div class="modal-footer">
              <a type="button" class="btn btn-secondary" href="{{ route('produkjasa.index') }}">Tutup</a>
              <button type="submite" class="btn btn-primary">Tambah</button>
            </div>
            </form>

            @endsection
