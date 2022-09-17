<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('login-form');
    }

    public function store()
    {
        $data = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->attempt($data)) {
            session()->regenerate();
            if (auth()->user()->role == 'student') {
                return redirect('/student/dashboard');
            } else {
                return redirect('/company/dashboard');
            }
        }
        return redirect('/login');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
