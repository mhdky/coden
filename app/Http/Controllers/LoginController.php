<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('admin.login.index', [
            'title' => 'Code-N | Login Page',
            'description' => 'Code-N adalah blog yang membahas seputar web design dan web programming',
            'poster' => 'logo-icon.png',
        ]);
    }

    public function authenticate(Request $request) {
        $credencials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credencials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard/content');
        }

        return back()->with('loginError', 'Username / Password salah');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
