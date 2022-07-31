<?php

namespace App\Http\Controllers;

use App\Models\CompanyUser;
use App\Models\Industry;
use App\Models\User;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;

class CompanyUserController extends Controller
{
    public function create()
    {
        return view('company-form');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'adress' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'description' => 'required',
            'industry' => 'required',
        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 'company',
        ]);
        CompanyUser::create([
            'user_id' => $user->id,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'adress' => $data['adress'],
            'phone' => $data['phone'],
            'website' => $data['website'],
            'description' => $data['description'],
            'industry' => $data['industry'],
        ]);
        Industry::create([
            'name' => $data['industry'],
        ]);

        auth()->login($user);
        return redirect('/');
    }
}
