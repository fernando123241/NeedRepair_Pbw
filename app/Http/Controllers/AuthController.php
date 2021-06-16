<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function proses_login(Request $reguest)
    {
    //     request()->validate(
    //         [
    //             'name' => 'required',
    //             'password' => 'required',
    //         ]);

    //     $kredensil = $erequest->only('name', 'password');

    //         if (Auth::attempt($kredensil)) {
    //             $user = Auth::user();
    //             if ($user->level == 'admin') {
    //                 return redirect()->intended('admin');
    //             }
    //             return redirect()->intended('/');
    //         }
    //     return redirect('login');
    // }
    // public function Logout(Request $reguest)
    // {
    //     $request->session()->flush();
    //     Auth::logout();
    //     return redirect('login');
    // }
}
