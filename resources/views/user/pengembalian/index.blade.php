@extends('layouts.master')

@section('judul')
    <h2>Pengembalian</h2>
@endsection

@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Pengembalian</h3>
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
                  <td>Trident</td>
                  <td>Internet</td>
                  <td>Win 95+</td>
                  <td>
                      <button type="button" class="btn btn-info">Edit</button>
                      <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
</table>
@endsection