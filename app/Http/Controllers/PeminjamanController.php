<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(){
        return view('user.peminjaman.index');
    }
    public function create(){
        return view('user.peminjaman.tambah');
    }
}
