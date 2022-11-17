<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ProdukController extends Controller
{
    public function index()
    {
    $barang = DB::table('barang')->get();
    return view('barang', ['barang' => $barang]);
    }
}

//{
//    public function index()
//    {
//        $produk = 'Aqua 400ML';
//        return view('produk',['produk'=> $produk]);
//    }
//}