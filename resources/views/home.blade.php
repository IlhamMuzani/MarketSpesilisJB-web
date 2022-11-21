@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 col-lg-4">
        <div class="info-box">
          <span class="info-box-icon bg-danger elevation-1">
            <i class="far fa-user nav-icon"></i>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">User</span>
            <span class="info-box-number">
              {{ $jumlah_user }}
              <small>Data</small>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4">
        <div class="info-box">
          <span class="info-box-icon bg-success elevation-1">
            <i class="fas fa-city"></i>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">Produk</span>
            <span class="info-box-number">
              {{ $jumlah_produkjasa }}
              <small>Data</small>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4">
        <div class="info-box">
          <span class="info-box-icon bg-primary elevation-1"><i class="nav-icon fas fa-exchange-alt"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Data Pengajuan</span>
            <span class="info-box-number">
              {{ $jumlah_pengajuan }}
              <small>Data</small>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
    </div>
        <!-- /.row -->
        <!-- Main row -->
     
@endsection
