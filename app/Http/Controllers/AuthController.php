<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginProses(Request $request)
    {
        $credential = $request->validate([
            'username',
            'password',
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect('/');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
