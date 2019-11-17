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
          <form action="{{url('/createinventaris')}}" method="post">
          {{csrf_field()}}
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
                  <input type="text" name="kondisi" value="{{ old('kondisi') }}" class="form-control" placeholder="Tambahkan kondisi barang">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan" value="{{ old('keterangan') }}" class="form-control" placeholder="Tambahkan keterangan">
                </div>
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="text" name="jumlah" value="{{ old('jumlah') }}" class="form-control" placeholder="Jumlah barang">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Jenis</label>
                  <select name="jenis" class="form-control select2" style="width: 100%;">
                  @foreach($jenis as $jenisis)
                    <option value="{{$jenisis->id}}">{{$jenisis->nama_jenis}}</option>
                    @endforeach
                  </select>
                  <!-- <input type="text" name="jenis" value="{{ old('jenis') }}" class="form-control" placeholder="Jenis barang"> -->
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Tanggal Registrasi</label>
                  <input type="date" name="tanggal_registrasi" value="{{ old('tanggal_registrasi') }}" class="form-control" placeholder="Tanggal registrasi">
                </div>
                <div class="form-group">
                  <label>Ruangan</label>
                  <select name="ruangan" class="form-control select2" style="width: 100%;">
                  @foreach($ruangan as $ruangans)
                    <option value="{{$ruangans->id}}">{{$ruangans->nama_ruang}}</option>
                    @endforeach
                  </select>
                  <!-- <input type="text" name="ruangan" value="{{ old('ruangan') }}" class="form-control" placeholder="Ruangan"> -->
                </div>
                <div class="form-group">
                  <label>Kode Inventaris</label>
                  <input type="text" name="kode_inventaris" value="{{ old('kode_inventaris') }}" class="form-control" placeholder="Kode inventaris">
                </div>
                <button type="submit" class="btn btn-info float-right">Tambah</button>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
</form>
@endsection