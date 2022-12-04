<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    function index()
    {
        return view('welcome',['tittle' => 'Home Page']);
    }
    function profile()
    {
        return view('profile',['tittle' => 'Home Page']);
    }
}
