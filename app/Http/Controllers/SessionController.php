<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    //
    public function create(){
        return view('auth.login');
    }

    public function store(){
        //validate
        $attrs = request()->validate([
                'email' => ['required', 'email'],
                'password' => ['required']
            ]
        );

        //attempt login
        if (! Auth::attempt($attrs)){
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.'
            ]);
        }

        //regenerate session token
        request()->session()->regenerate();

        //redirect
        return redirect('/');
    }

    public function destroy(){

        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
