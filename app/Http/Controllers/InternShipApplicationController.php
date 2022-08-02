<?php

namespace App\Http\Controllers;

use App\Models\InternShipApplication;
use App\Models\internShipPost;
use Illuminate\Http\Request;

class InternShipApplicationController extends Controller
{

    public function create(internShipPost $post)
    {
        return view('components.student.application-form', [
            'post' => $post
        ]);

    }

    public function store(internShipPost $post)
{


request()->validate([
        'cover_letter' => 'required',
    ]);

    $data['student_user_id'] = auth()->user()->student->id;

    $data['intern_ship_post_id'] = $post->id;
    InternShipApplication::create($data);
    return redirect('/');
}

public function destroy(InternShipApplication $application)
{
    $application->delete();
    return redirect('/');
}



}




