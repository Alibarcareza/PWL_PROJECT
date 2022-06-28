<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alat;
use Auth;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AlatController extends Controller
{

    // create data alat
    public function createAlat()
    {
        $tittle = 'Create Alat';
        return view('ViewAdmin.createDataAlat',  ['tittle']);

    }
    // fungsi store data user
   
}