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
    public function storeAlat(Request $request)
    {
       //melakukan validasi data
        $request->validate([
        'nama' => 'required',
        'kategori' => ['required'],
        'merk' => ['required'],
        'jumlah' => 'required',
        'gambar'=>'required',
        ]);

        if($request->file('gambar')){
            $image_name = $request->file('gambar')->store('image', 'public');
        }
        
        $alat = new Alat;
        $alat -> nama = $request->get('nama');
        $gambar = $request->file('gambar')->store('gambar', 'public');
        $alat -> gambar = $gambar;
        $alat -> kategori = $request->get('kategori');
        $alat -> merk = $request->get('merk');
        $alat -> jumlah = $request->get('jumlah');
        $alat -> save();

        return redirect('/homeAdmin') -> with('success', 'Data Barang berhasil Ditambahkan');
    }
   
}