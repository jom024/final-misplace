<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisteredStaffController extends Controller
{
    //
    public function create(){
        return view('auth.register.staff');
    }

    public function store(){
        //validate
        $attrs = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' =>  ['required', 'email'],
            'role' => ['required'],
            'password' => ['required', Password::min(6), 'confirmed']
        ]);

        //create the user
        $user = User::create($attrs);

        //login
        Auth::login($user);

        //redirect somewhere
        return redirect('/browse');
    }
}
