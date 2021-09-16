<?php

namespace App\Http\Controllers;

use App\Http\Requests\AkunRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;


class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  Tampilkan file Login
    public function showLogin(){
        // Cek menggunakan library Auth
        if (Auth::check()) {
            //Login Success
            return redirect()->route('admin');
        }
        return view('userLogin');
    }
    
    // Proses Login Menggunakan Library Auth
    public function Login(Request $request){
        
    }

    // Tampilkan Register
    public function showRegister(){
        return view('userRegister');
    }    

    // Proses Registrasi User
    public function Register( Request $request){
    $request->validate([
        'nama'      => 'required',
        'alamat'    => 'required',
        'password'  => 'required',
        'email'     => 'required|email'

    ]);

        $user           = new User;
        $user->nama_user     = $request->nama;
        $user->password = bcrypt($request->password);
        $user->email    = $request->email;
        $user->alamat   = $request->alamat;
        $user->telepon  = $request->telepon;
        $user->save();

        if($user){
        //redirect dengan pesan sukses
        return redirect()->route('login.show')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('regis.show')->with(['error' => 'Data Gagal Disimpan!']);
    }
    }

}
