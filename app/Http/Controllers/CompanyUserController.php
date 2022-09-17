<?php

namespace App\Http\Controllers;

use App\Models\CompanyUser;
use App\Models\Industry;
use App\Models\InternShipApplication;
use App\Models\User;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;

class CompanyUserController extends Controller
{
    public function create()
    {
        return view('company-form',[
            'industries' => Industry::all(),
        ]);
    }

    public function store()
    {

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'description' => 'required',
            'industry' => 'required',
            'logo' => 'required|image',

        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 'company',
        ]);

        $data['user_id'] = $user->id;
        $data['logo'] = request()->file('logo')->store('logos');
        CompanyUser::create($data);

        auth()->login($user);
        return redirect('/company/dashboard');

    }

    public function show($id){
        $company= CompanyUser::find($id);
        return view('components.company.company-dashboard',
        [
         'company'=> $company
        ]);
    }

    public function updateForm(){
        return view('components.company.update-form');

    }

    public function update(){
        $attributes=request(['address','phone','website','description','logo']);

        foreach ($attributes as $key => $value) {
            if ($value == null) {
                unset($attributes[$key]);
            }
        }
        if ($attributes['logo']) {
            $attributes['logo'] = request()->file('logo')->store('logos');
        }

        auth()->user()->company->update($attributes);


        return redirect('/company/dashboard');

    }


    }




