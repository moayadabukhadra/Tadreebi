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
            'adress' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'description' => 'required',
            'industry_id' => 'required',
            
        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 'company',
        ]);
        $data['user_id'] = $user->id;
        CompanyUser::create($data);

        auth()->login($user);
        return redirect('/');
    }

    public function dashboard()
    {
        return view('dashboards.company-dashboard',[
            'applications' => InternShipApplication::all(),
        ]);
    }

    public function show(InternShipApplication $application)
    {
        return view('components.company.application', [
            'application' => $application,
        ]);

    }

    public function showAccepted(){
        return view('dashboards.company-dashboard',[
            'applications' => InternShipApplication::get()->where('status','1'),
        ]);
    }

    public function accept(InternShipApplication $application){
         $application->update([
              'status' => 1,
         ]);

            return redirect('/company/dashboard/accepted');


    }


}
