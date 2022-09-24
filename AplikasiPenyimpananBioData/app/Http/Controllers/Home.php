<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\ShoppinCart;

class Home extends Controller
{

    public function index()
    {
        return view('home');
    }


}
