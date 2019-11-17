@extends('layouts.master')

@section('judul')
    <h2>Inventaris</h2>
@endsection

@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Inventaris</h3>
              <a href="{{url('/createinventaris')}}"><button type="button" class="btn btn-info float-right">Tambah</button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Kondisi</th>
                  <th>Keterangan</th>
                  <th>Jumlah</th>
                  <th>Jenis</th>
                  <th>Tanggal Registrasi</th>
                  <th>Ruangan</th>
                  <th>Kode Inventaris</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $datas)
                <tr>
                  <td>{{$datas->nama}}</td>
                  <td>{{$datas->kondisi}}</td>
                  <td>{{$datas->keterangan}}</td>
                  <td>{{$datas->jumlah}}</td>
                  <td>{{$datas->id_jenis}}</td>
                  <td>{{$datas->tanggal_registrasi}}</td>
                  <td>{{$datas->id_ruangan}}</td>
                  <td>{{$datas->kode_inventaris}}</td>
                  <td>
                      <button type="button" class="btn btn-info">Edit</button>
                      <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                @endforeach
            </table>
@endsection