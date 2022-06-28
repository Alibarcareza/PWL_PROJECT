<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use PDF;
use App\Models\User;
use App\Models\alat;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class AdminController extends Controller
{
    function index()
    {
        return view('ViewAdmin.index',['tittle' => 'Home Page Admin']);
    }

    public function createUser()
    {
        return view('ViewAdmin.createDataUser',['tittle' => 'Create Data User']);
    }

    public function storeUser(Request $request)
    {
       
       //melakukan validasi data
       $request->validate([
        'name' => 'required',
        'email' => ['required', 'email:dns', 'unique:users,email,'],
        'notelp' => ['required', 'numeric', 'unique:users,notelp,'],
        'alamat' => 'required',
        'level' => 'required',
        'password' => 'required',
        'foto'=>'required',]);

        if($request->file('foto')){
            $image_name = $request->file('foto')->store('image', 'public');
        }

        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->foto = $image_name;
        $user->notelp = $request->get('notelp');
        $user->alamat = $request->get('alamat');
        $user->level = $request->get('level');
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/homeAdmin') -> with('success', 'Data berhasil Ditambahkan');
    }
    
    function dataAlat()
    {
        $dataAlat = alat::orderBy('id', 'asc')->paginate(5);
        return view('ViewAdmin.dataAlat',['tittle' => 'Data Alat',
            'dataAlat' => $dataAlat,
        ]);
    }
}
