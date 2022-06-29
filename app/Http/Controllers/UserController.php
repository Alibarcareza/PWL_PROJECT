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
        $dataAlat = alat::orderBy('id', 'asc')->paginate(5);
        return view('userPage.index',['tittle' => 'Data Alat',
            'dataAlat' => $dataAlat,
        ]);
    }
    function cetakSurat()
    {
        $dataAlat = Alat::where('id');
        $pdf = PDF::loadView('ViewAdmin.cetakDataAlat',['dataAlat' => $dataAlat]);
        return $pdf->download('Data Alat.pdf');
    }
}