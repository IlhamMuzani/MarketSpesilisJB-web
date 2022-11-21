@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Detail Pengajuan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Data Master</a></li>
          <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Pengajuan</a></li>
          <li class="breadcrumb-item active">Pengajuan Detail</li>
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
        <h3 class="card-title">Detail Pengajuan</h3>  
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <th colspan="3" class="border-top-0">
              <h3>{{ $pengajuan->produk['jenis_pembuatan'] }}</h3>
            </th>
          </thead>
          <tbody>
          <tr>
              <td class="w-25">Pembeli</td>
              <td>:</td>
              <td class="text-break">{{ $pengajuan->user['username'] }}</td>
            </tr>
          
            <tr>
              <td class="w-25">Deskripsi</td>
              <td>:</td>
              <td class="text-break">{{ $pengajuan->deskripsi }}</td>
            </tr>
            <tr>                  
              <td class="w-25">Harga</td>
              <td>:</td>
              <td class="text-break">{{ $pengajuan->harga }}</td>
            </tr>

            <tr>                  
              <td class="w-25">Latitude</td>
              <td>:</td>
              <td class="text-break">{{ $pengajuan->latitude }}</td>
            </tr>

            <tr>                  
              <td class="w-25">Longitude</td>
              <td>:</td>
              <td class="text-break">{{ $pengajuan->longitude }}</td>
            </tr>

            <tr>                  
              <td class="w-25">Status</td>
              <td>:</td>
              <td class="text-break">{{ $pengajuan->status }}</td>
            </tr>

          </tbody>
          <tfoot>
            <tr>
              <td colspan="3"></td>
            </tr>
          </tfoot>
        </table>
        <div class="row">
        <img src="{{ asset('storage/uploads/'.$pengajuan->gambar) }}" class="img-thumbnail"  width="500px">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
