<?php

namespace App\Http\Controllers;

use App\Models\InternShipPost;
use App\Models\InternShipApplication;
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

        InternShipPost::create([
            'title' => request('title'),
            'description' => request('description'),
            'company_users_id' => auth()->user()->company->id,
            'paid' => $paid,
            'thumbnail' => request()->file('thumbnail')->store('thumbnails'),
        ]);

        return redirect('/student/internships');

    }

    public function show( ){
        return view('components.student.posts-show',[
            'posts' =>InternShipPost::all(),
        ]);

    }




}
