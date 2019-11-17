@extends('layouts.master')

@section('judul')
    <h2>Laporan</h2>
@endsection

@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Laporan Inventaris</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Inventaris</th>
                  <th>Peminjaman</th>
                  <th>Tanggal pinjam</th>
                  <th>Tanggal kembali</th>
                  <th>Status</th>
                  <th>Jumlah</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet</td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>12</td>
                </tr>
</table>
@endsection