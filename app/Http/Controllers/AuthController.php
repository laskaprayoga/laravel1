<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function showWelcome(Request $request)
    {
        $namadpn = $request->input('namadepan');
        $namabel = $request->input('namabelakang');
        return view('welcome', [
            'namadpn'=> $namadpn,
            'namabel'=> $namabel
        ]);
    }
}

