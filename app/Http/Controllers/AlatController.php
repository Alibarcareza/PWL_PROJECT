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
        //'gambar'=>'required',
        ]);

        if($request->file('gambar')){
            $image_name = $request->file('gambar')->store('image', 'public');
        }
        
        $alat = new Alat;
        $alat -> nama = $request->get('nama');
       // $gambar = $request->file('gambar')->store('gambar', 'public');
        //$alat -> gambar = $gambar;
        $alat -> kategori = $request->get('kategori');
        $alat -> merk = $request->get('merk');
        $alat -> jumlah = $request->get('jumlah');
        $alat -> save();

        return redirect('/homeAdmin') -> with('success', 'Data Barang berhasil Ditambahkan');
    }
    function cetakDataAlat()
    {
        $dataAlat = Alat::get();
        $pdf = PDF::loadView('ViewAdmin.cetakDataAlat',['dataAlat' => $dataAlat]);
        return $pdf->download('Data Alat.pdf');
    }
    function editAlat($id)
    {
        $alat = Alat::find($id);
        return view('ViewAdmin.editDataAlat',['tittle' => 'Edit Data Alat',
            'alat' => $alat,
        ]);
    }

    function updateDataAlat(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            ]);

            // if($request -> hasFile('gambar')){
            //     $alat = Alat::where('id', $id)->first();
            //     // $alat -> id = $request->get('id');
            //     $alat -> nama = $request->get('nama');
            //     $gambar = $request->file('gambar')->store('gambar', 'public');
            //     $alat -> gambar = $gambar;
            //     $alat -> kategori = $request->get('kategori');
            //     $alat -> merk = $request->get('merk');
            //     $alat -> jumlah = $request->get('jumlah');
            //     $alat->save();
            //     return redirect('/dataAlat')->with('success', 'Data Berhasil Diubah');
            // } else {
            //    $alat = Alat::where('id', $id)->first();
            //     // $product -> id = $request->get('id');
            //     $alat -> nama = $request->get('nama');
            //     $alat -> kategori = $request->get('kategori');
            //     $alat -> merk = $request->get('merk');
            //     $alat -> jumlah = $request->get('jumlah');
            //     $alat->save();
            //     return redirect('/dataAlat')->with('success', 'Data Berhasil Diubah');
            // }

            $alat = Alat::where('id', $id)->first();
                // $product -> id = $request->get('id');
                $alat -> nama = $request->get('nama');
                $alat -> kategori = $request->get('kategori');
                $alat -> merk = $request->get('merk');
                $alat -> jumlah = $request->get('jumlah');
                $alat->save();
                return redirect('/dataAlat')->with('success', 'Data Berhasil Diubah');
    }

    public function destroyAlat($id)
    {
        Alat::where('id', $id)->delete();
        return redirect('/dataAlat')-> with('success', 'Data  Berhasil Dihapus');
    }
   
}