@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Create User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">




<form method="POST" action="{{ route('user.store') }}" role="form" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group">
                  <label for="exampleInputFile">Username</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  placeholder="Username" name="username">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Email</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  placeholder="Email" name="email">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="Password" name="password">
                  </div>
                 
                  <div class="form-group">
                  <label for="exampleInputFile">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  placeholder="Alamat" name="alamat">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputFile">No telpone</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone" name="phone">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Status</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  placeholder="Status" name="status">
                  </div>

                <div class="modal-footer">
              <a type="button" class="btn btn-secondary" href="{{ route('user.index') }}">Tutup</a>
              <button type="submite" class="btn btn-primary">Tambah</button>
            </div>
            </form>

            @endsection
