@extends('layouts.master')

@section('judul')
    <h2>Peminjaman</h2>
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
                  <label>Inventaris</label>
                  <input type="text" name="inventaris" value="{{ old('inventaris') }}" class="form-control" placeholder="Inventaris">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="text" name="jumlah" value="{{ old('jumlah') }}" class="form-control" placeholder="jumlah">
                </div>
            </div>
</div>
@endsection