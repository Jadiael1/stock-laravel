<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\VerifyLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login()
    {
        if (!Auth()->check()) {
            return view('auth.login', ['title' => 'Login']);
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function verifyLogin(VerifyLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember') ?? false;
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'loginFailed' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }

    public function logout(Request $request)
    {
        if (Auth()->check()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        } else {
            return redirect('/');
        }
    }
}
