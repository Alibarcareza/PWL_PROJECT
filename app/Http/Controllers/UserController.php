<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Transaksi;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('HomePage.index',['barang' => $data],['tittle' => 'Home Page',
        ]);
    }
}