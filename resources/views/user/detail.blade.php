@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Detail User</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Data Master</a></li>
          <li class="breadcrumb-item"><a href="{{ url()->previous() }}">User</a></li>
          <li class="breadcrumb-item active">User Detail</li>
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
        <h3 class="card-title">Detail User</h3>  
      </div>
      <div class="card-body">
        <table class="table">
         
          <tbody>

          <tr>
              <td class="w-25">Nama</td>
              <td>:</td>
              <td class="text-break">{{ $user->username }}</td>
            </tr>
            
            <tr>                  
              <td class="w-25">Alamat</td>
              <td>:</td>
              <td class="text-break">{{ $user->alamat }}</td>
            </tr>

            <tr>                  
              <td class="w-25">No Telpone</td>
              <td>:</td>
              <td class="text-break">{{ $user->phone }}</td>
            </tr>

            <tr>                  
              <td class="w-25">Status</td>
              <td>:</td>
              <td class="text-break">{{ $user->status }}</td>
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
    <img src="{{ asset('storage/uploads/'.$user->gambar) }}" class="img-thumbnail"  width="500px">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
