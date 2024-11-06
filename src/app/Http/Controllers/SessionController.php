<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login', ['title' => 'Login']);
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('admin');
        }

        return back()
            ->withInput()
            ->withErrors([
                'email' => 'No matching pair in our database!'
            ]);
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('login');
    }
}
