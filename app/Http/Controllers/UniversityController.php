<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function create(){
        return view('dashboards.university-dashboard',[
          'proposals'=> Proposal::all(),
        ]);
    }

    public function show(Proposal $proposal){
        return view('components.university.proposal',[
            'proposal'=>$proposal,
        ]);
    

    }
}
