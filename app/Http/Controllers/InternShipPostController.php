<?php

namespace App\Http\Controllers;

use App\Models\InternShipApplication;
use App\Models\internShipPost;
use Illuminate\Http\Request;

class InternShipPostController extends Controller
{

    public function create()
    {
        return view('components.company.post-form');
    }

    public function store(){
       request()->validate([
            'title' => 'required',
            'description' => 'required',
            'paid' => 'required',
            'thumbnail' => 'required|image',
        ]);

        $paid=request('paid');
        if($paid=='on'){
            $paid=0;
        }else{
            $paid=1;
        }

        internShipPost::create([
            'title' => request('title'),
            'description' => request('description'),
            'company_users_id' => auth()->user()->company->id,
            'paid' => $paid,
            'thumbnail' => request()->file('thumbnail')->store('thumbnails'),
        ]);

        return redirect('/');

    }

    public function show(InternShipApplication $application){

        return view('components.company.application',[
            'application' => $application,
        ]);

    }

}
