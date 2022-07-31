<?php

namespace App\Http\Controllers;

use App\Models\StudentUser;
use App\Models\User;
use Illuminate\Http\Request;


class StudentUserController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
    public function show(){
        return view('components.post-show');
    }

   public function create(){
       return view('student-form');
    }

    public function store(){


        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'gpa' => 'required|max:4|min:0',
            'factualy' => 'required',
        ]);




        $user = User::create([
            'name' => $attributes['name'],
            'email' => $attributes['email'],
            'password' => bcrypt($attributes['password']),
            'role' => 'student',
        ]);
        $attributes['user_id'] = $user->id;
        StudentUser::create($attributes);

        auth()->login($user);
        return redirect('/');
    }

    // public function show(){
    //     $student = auth()->user()->student;
    //     return view('student-profile', compact('student'));

    // }

    public function dashboard(){

        return view('dashboards.student-dashboard');

    }




}



