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
        $dataUser = User::orderBy('level', 'asc')->where('level', 'user')->paginate(2);
        return view('ViewAdmin.index',['tittle' => 'Home Page Admin',
        'dataUser' => $dataUser,]);
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

    function editUser($id)
    {
        $user = User::find($id);
        return view('ViewAdmin.editDataUser',['tittle' => 'Edit Data User',
            'user' => $user,
        ]);
    }

    function updateDataUser(Request $request, $id)
    {
        //validate laravel

        $this->validate($request,[
            'email' => 'email|unique:users,email,'.$id,
            'notelp' => 'numeric|unique:users,notelp,'.$id,
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request -> hasFile('foto')){
            $foto = $request->file('foto')->store('photoUser', 'public');
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->foto = $foto;
            $user->notelp = $request->notelp;
            $user->alamat = $request->alamat;
            $user->level = $request->level;
            $user->save();
            return redirect('/homeAdmin') -> with('success', 'Data berhasil diubah');
        } else {
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->notelp = $request->notelp;
            $user->alamat = $request->alamat;
            $user->level = $request->level;
            $user->save();
            return redirect('/homeAdmin') -> with('success', 'Data berhasil diubah');
        }

    }
    
    function dataAlat()
    {
        $dataAlat = alat::orderBy('id', 'asc')->paginate(5);
        return view('ViewAdmin.dataAlat',['tittle' => 'Data Alat',
            'dataAlat' => $dataAlat,
        ]);
    }
}
