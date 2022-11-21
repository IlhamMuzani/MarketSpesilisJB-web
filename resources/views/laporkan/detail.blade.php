@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Detail Pengaduan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Data Master</a></li>
          <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Pengaduan</a></li>
          <li class="breadcrumb-item active">Pengaduan Detail</li>
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
        <h3 class="card-title">Laporan Pengaduan</h3>  
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <th colspan="3" class="border-top-0">
              <h3>{{ $laporkan->user['username'] }}</h3>
            </th>
          </thead>
          <tbody>

          <tr>
              <td class="w-25">Nama Toko</td>
              <td>:</td>
              <td class="text-break">{{ $laporkan->produk['nama_toko'] }}</td>
            </tr>

          <tr>
              <td class="w-25">Jenis Pembuatan</td>
              <td>:</td>
              <td class="text-break">{{ $laporkan->produk['jenis_pembuatan'] }}</td>
            </tr>
          
            <tr>
              <td class="w-25">Laporan</td>
              <td>:</td>
              <td class="text-break">{{ $laporkan->deskripsi }}</td>
            </tr>

          </tbody>
          <tfoot>
            <tr>
              <td colspan="3"></td>
            </tr>
          </tfoot>
        </table>
        <div class="row">
        <img src="{{ asset('storage/uploads/'.$laporkan->gambar) }}" class="img-thumbnail"  width="500px">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
