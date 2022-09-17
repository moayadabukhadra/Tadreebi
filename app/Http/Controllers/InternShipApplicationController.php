<?php

namespace App\Http\Controllers;

use App\Models\InternShipApplication;
use App\Models\InternShipPost;
use Illuminate\Http\Request;

class InternShipApplicationController extends Controller
{

    public function create(InternShipPost $post)
    {
        return view('components.student.application-form', [
            'post' => $post
        ]);
    }

    public function store(internShipPost $post)
    {


        $data = request()->validate([
            'cover_letter' => 'required',
            'resume' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:2048',

        ]);
        $data['resume'] = request()->file('resume')->store('resumes');

        $data['student_user_id'] = auth()->user()->student->id;

        $data['intern_ship_post_id'] = $post->id;
        InternShipApplication::create($data);

        return redirect('/student/internships');
    }


    public function show()
    {
        // applications wheres status not equal to rejected
        return view('components.company.applications-show', [
            'applications' => InternShipApplication::get()->where('status', '!=', 'rejected')
        ]);
    }


    public function showApp(InternShipApplication $application)
    {

        return view('components.company.application', [
            'application' => $application,
        ]);
    }



    public function showAccepted()
    {
        return view('components.company.applications-show', [
            'applications' => InternShipApplication::get()->where('status', 'accepted'),
        ]);
    }

    public function update(InternShipApplication $application)
    {
        $data= request(['status', 'feedback']);

        foreach ($data as $key => $value) {
            if ($value == null) {
                unset($data[$key]);
            }
        }

        if(request('status') == 'on'){
            $data['status'] = 'accepted';

        }else{
            $data['status'] = 'rejected';
        }
        $application->update($data);


        return redirect('/company/applications/accepted');
    }

    public function resume(InternShipApplication $application)
    {
        $path='storage/'.$application->resume;
        return response()->download(public_path($path));
    }

    public function applicationResponse()
    {
        return view('components.student.applications-response-show', [
            'applications' => InternShipApplication::get()->where('student_user_id', auth()->user()->student->id )
        ]);

    }

    public function Response(InternShipApplication $application){
        return view('components.student.application-response',[
            'application' => $application,
        ]);

    }

}
