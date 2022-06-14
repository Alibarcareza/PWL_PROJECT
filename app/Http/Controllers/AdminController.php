<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class AdminController extends Controller
{
    function index()
    {
        return view('ViewAdmin.index',['tittle' => 'Home Page Admin']);
    }
}
