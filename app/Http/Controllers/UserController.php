<?php

namespace App\Http\Controllers;
use App\Models\alat;
use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index()
    {
        $data = Alat::all();
        return view('userPage.index',['alat' => $data],['tittle' => 'Home Page',
        ]);
    }
}