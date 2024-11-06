<?php

namespace App\Http\Controllers;

use App\Mail\UserRegistered;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(5) ,'confirmed'],
        ]);

        $user = User::create($credentials);

        Mail::to('vadkasik@gmail.com')->queue(new UserRegistered($user));

        return redirect('/login');
    }
}
