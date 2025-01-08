<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(){

        return view('auth.login');
        
    }
    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (!auth()->guard()->attempt($attributes)) {
            return back()->withInput()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }

        return redirect('/')->with('success', 'Welcome back!');
    }
}
