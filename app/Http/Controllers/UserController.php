<?php

namespace App\Http\Controllers;
use App\Models\alat;
use App\Models\PinjamAlat;
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

    function pinjam()
    {
        $dataAlat = alat::all();
        return view('userPage.pinjam', ['tittle' => 'Pinjam Alat', 'dataAlat' => $dataAlat]);
    }

    function cetakSurat()
    {
        $dataAlat = Alat::where('id');
        $pdf = PDF::loadView('ViewAdmin.cetakDataAlat',['dataAlat' => $dataAlat]);
        return $pdf->download('Data Alat.pdf');
    }

    public function pinjamAlat(Request $request)
    {
       //melakukan validasi data
        $request->validate([
        'ktp' => 'required',
        'nama' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        'nama_alat' => 'required',
        'jumlah' => 'required',
        'tanggal_peminjaman'=>'required',
        'tanggal_pengembalian' => 'required',
        'surat' => 'required',
        'fk_id_alat' => 'required',
        ]);

        if($request->file('ktp')){
            $image_name = $request->file('ktp')->store('image', 'public');
        } elseif($request->file('surat')){
            $image_name = $request->file('surat')->store('image', 'public');
        }

        $dataAlat = alat::where('id', $request->get('fk_id_alat'))->first();
        $dataAlat->jumlah = $dataAlat->jumlah - $request->get('jumlah');
        $dataAlat->save();

        $pinjamAlat = new PinjamAlat;
        $ktp = $request->file('ktp')->store('ktp', 'public');
        $pinjamAlat -> ktp = $ktp;
        $pinjamAlat -> nama = $request->get('nama');
        $pinjamAlat -> alamat = $request->get('alamat');
        $pinjamAlat -> no_hp = $request->get('no_hp');
        $pinjamAlat -> nama_alat = $request->get('nama_alat');
        $pinjamAlat -> jumlah = $request->get('jumlah');
        $pinjamAlat -> tanggal_peminjaman = $request->get('tanggal_peminjaman');
        $pinjamAlat -> tanggal_pengembalian = $request->get('tanggal_pengembalian');
        $surat = $request->file('surat')->store('surat', 'public');
        $pinjamAlat -> surat = $surat;
        $pinjamAlat -> fk_id_alat = $request->get('fk_id_alat');
        $pinjamAlat -> save();

        return redirect('/peminjamanAlat') -> with('success', 'Data Barang berhasil Ditambahkan');
    }
}