<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function index() {
        return "mengakses fungsi controller dengan menggunakan route";
    }
}
