<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Uploads;
use Illuminate\Http\Request;
use Storage;

class RegisterController extends Controller
{
    public function index()
    {
        return view('LoginPage.register', [
            'tittle' => 'Register Page',
        ]);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'nomor' => 'required|unique:users,notelp',
            'fotoKTP' => 'required',
        ]);

        $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:jpg,jpeg,png|max:2000'
        ]);
        
        //  if($request->file('fotoKTP')){
        //      $image_name = $request->file('fotoKTP')->store('fotoKTP', 'public');
        //  }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->notelp = $request->nomor;
        $user->password = bcrypt($request->password);
        //  $fotoKTP = $request->file('fotoKTP')->store('fotoKTP', 'public');
        $user->fotoKTP = $request->fotoKTP;
        $user->level = 'user';
        $user->save();

        return redirect('/login')->with('success', 'Registration Success! Please Login');
    }


}
