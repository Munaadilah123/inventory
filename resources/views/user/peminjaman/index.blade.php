@extends('layouts.master')

@section('judul')
    <h2>Peminjaman</h2>
@endsection

@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Peminjaman</h3>
              <a href="{{url('/createpeminjaman')}}"><button type="button" class="btn btn-info float-right">Tambah</button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Inventaris</th>
                  <th>Peminjaman</th>
                  <th>Jumlah</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>meja</td>
                  <td>123</td>
                  <td>2</td>
                  <td>
                      <button type="button" class="btn btn-info">Edit</button>
                      <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
            </table>
@endsection