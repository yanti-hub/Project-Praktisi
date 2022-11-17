<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barangController extends Controller
{
    public function insert_eloquent()
    {
    barang::create(['nama' => 'Bahan Bangunan', 'harga_jual' => 1000, ]);  
    
    //return view(‘produk‘, [‘produk‘ => $produk]);
    }
}
