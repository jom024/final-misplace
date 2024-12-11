<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisteredUserController extends Controller
{
    //
    public function create(){
        return view('auth.register.user');
    }

    public function store(){
        //validate
        $attrs = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' =>  ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed'],
            'role' =>  ['required']
        ]);

        //create the user
        $user = User::create($attrs);

        //login
        Auth::login($user);

        //redirect somewhere
        return redirect('/browse');
    }
}
