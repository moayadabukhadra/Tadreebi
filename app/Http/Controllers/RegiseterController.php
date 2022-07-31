<?php

namespace App\Http\Controllers;

use App\Models\StudentUser;
use App\Models\User;
use Illuminate\Http\Request;


class RegiseterController extends Controller
{

   public function create(){
       return view('student-form');
    }

    public function store(){


        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'gpa' => 'required|max:4|min:0',
            'university' => 'required',
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

    }






