<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventaris;

class InventarisController extends Controller
{
    public function index(){
        $data = Inventaris::all();
        return view('user.inventaris.index',['data' => $data]);
    }
    public function create(){
        return view('user.inventaris.tambah');
    }
}
