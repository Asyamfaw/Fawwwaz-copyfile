<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function index()
    {
        $books = Books::all();
        return view('user.index', compact('books'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function dashboard()
    {
        return view('index');
    }

    public function actionLogin(Request $request){
        $login = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(!$login){
            return redirect()->back()->with('error', 'Isi yang benerlah kocak');
        }

        if(Auth::attempt($login)){
            if(Auth::user()->role == 'admin'){
                return redirect()->route('dashboard')->with('success', 'Login Berhasil Sebagai Admin');
            }
            return redirect()->route('home')->with('success', 'berhasil login sebagi user');
        }
        return redirect()->route('home')->with('error', 'Login Gagal, pastikan email dan password benar');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home')->with('success', 'Logout Berhasil');
    }

    public function ActionRegister(Request $request){
        $validation = $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8'
        ]);

        if(!$validation){
            return redirect()->back()->with('error', 'Isi yang benerlah kocak');
        }
        User::create([
            'name'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>'user'
        ]);
        return redirect()->route('login')->with('success', 'Berhasil Membuat Akun');
    }
}