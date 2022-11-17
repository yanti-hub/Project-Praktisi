<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YantiController extends Controller
{
    public function index(){ $produk=“Aqua“;
    return view('produk', ['produk' => $produk]);
    }
    public function show()
    {
    $produk = ['Aqua 115 ML','Minuman Bersoda','Buku Sejarah','Mouse','CPU'];
    return view('show', ['produk' => $produk]);
    }
}