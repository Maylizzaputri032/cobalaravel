<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SatuController extends Controller
{
    public function getLogin() 
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        dd('Login berhasil');
    }

    public function getRegister() 
    {
        return view('register');
    }
    public function postRegister(Request $request)
    {
        dd('Kenapa Kamu susah sekali sih');
    }
}
