@extends('layouts.master')

@section('judul')
    <h2>Inventaris</h2>
@endsection

@section('content')
<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Tambahkan</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="{{ old('nama') }}" class="form-control" placeholder="Nama">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Kondisi</label>
                  <input type="text" name="kondisi" value="{{ old('email') }}" class="form-control" placeholder="Tambahkan kondisi barang">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan" value="{{ old('email') }}" class="form-control" placeholder="Tambahkan keterangan">
                </div>
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="text" name="jumlah" value="{{ old('email') }}" class="form-control" placeholder="Jumlah barang">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Jenis</label>
                  <input type="text" name="jenis" value="{{ old('email') }}" class="form-control" placeholder="Jenis barang">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Tanggal Registrasi</label>
                  <input type="text" name="jenis" value="{{ old('email') }}" class="form-control" placeholder="Tanggal registrasi">
                </div>
                <div class="form-group">
                  <label>Ruangan</label>
                  <input type="text" name="ruangan" value="{{ old('email') }}" class="form-control" placeholder="Ruangan">
                </div>
                <div class="form-group">
                  <label>Kode Inventaris</label>
                  <input type="text" name="kode_inventaris" value="{{ old('email') }}" class="form-control" placeholder="Kode inventaris">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
@endsection