@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Detail Produk Jasa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Data Master</a></li>
          <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Produk Jasa</a></li>
          <li class="breadcrumb-item active">Produk Detail</li>
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
        <h3 class="card-title">Detail Produk Jasa</h3>  
      </div>
      <div class="card-body">
        <table class="table">
        <thead>
            <th colspan="3" class="border-top-0">
              <h3>{{ $produkjasa->nama_toko }}</h3>
            </th>
          </thead>
          <tbody>

          <!-- <tr>
              <td class="w-25">Nama Toko</td>
              <td>:</td>
              <td class="text-break">{{ $produkjasa->nama_toko }}</td>
            </tr>
           -->
            <tr>
              <td class="w-25">Jenis Pembuatan</td>
              <td>:</td>
              <td class="text-break">{{ $produkjasa->jenis_pembuatan }}</td>
            </tr>
            <tr>                  
              <td class="w-25">Alamat</td>
              <td>:</td>
              <td class="text-break">{{ $produkjasa->harga }}</td>
            </tr>

            <tr>                  
              <td class="w-25">No Telpone</td>
              <td>:</td>
              <td class="text-break">{{ $produkjasa->latitude }}</td>
            </tr>

            <tr>                  
              <td class="w-25">Status</td>
              <td>:</td>
              <td class="text-break">{{ $produkjasa->status }}</td>
            </tr>

            <tr>                  
              <td class="w-25">Latitude</td>
              <td>:</td>
              <td class="text-break">{{ $produkjasa->latitude }}</td>
            </tr>

            <tr>                  
              <td class="w-25">Longitude</td>
              <td>:</td>
              <td class="text-break">{{ $produkjasa->longitude }}</td>
            </tr>
            
               <tr>                  
              <td class="w-25">Gambar</td>
              <td>:</td>
            </tr>

          </tbody>
          <tfoot>
            <tr>
              <td colspan="3"></td>
            </tr>
          </tfoot>
        </table>
        <div class="row">
        <img src="{{ asset('storage/uploads/'.$produkjasa->gambar) }}" class="img-thumbnail"  width="500px">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
