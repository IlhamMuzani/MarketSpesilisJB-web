@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Update User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">




<form method="POST" action="{{ route('user.update',  $user->id) }}" role="form" enctype="multipart/form-data">
                  @csrf
                  {{ method_field('PUT') }}
                <div class="form-group">
                  <label for="exampleInputFile">Username</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{ old('username', $user->username) }}" placeholder="Username" name="username">
                  </div>
                 
                  <div class="form-group">
                  <label for="exampleInputFile">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{ old('alamat', $user->alamat) }}" placeholder="Alamat" name="alamat">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputFile">No telpone</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{ old('phone', $user->phone) }}"placeholder="Phone" name="phone">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Status</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{ old('status', $user->status) }}" placeholder="Status" name="status">
                  </div>

                <!-- /.card-body -->

                <div class="modal-footer">
              <a type="button" class="btn btn-secondary" a href="{{ route('user.index') }}">Tutup</a>
              <button type="submite" class="btn btn-primary">Tambah</button>
            </div>
            </form>

            @endsection
