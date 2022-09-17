<?php

namespace App\Http\Controllers;

use App\Models\InternShipApplication;
use App\Models\internShipPost;
use App\Models\StudentUser;
use App\Models\User;
use DeepCopy\Filter\Filter;
use Illuminate\Http\Request;


class StudentUserController extends Controller
{



    public function create()
    {
        return view('student-form');
    }

    public function store()
    {


        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'gpa' => 'required|max:4|min:0',
            'major' => 'required',
            'student_number' => 'required',

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
        return redirect('/student/dashboard');
    }



    public function dashboard($id){

        $student = StudentUser::find($id);
        return view('components.student.student-dashboard',
    [
        'student'=>$student
    ]);
    
    }




    public function updateForm()
    {


        $attributes =  request(['summary', 'image', 'address']);


        foreach ($attributes as $key => $value) {
            if ($value == null) {
                unset($attributes[$key]);
            }
        }

        if ($attributes['image']) {
            $attributes['image'] = request()->file('image')->store('images');
        }

        auth()->user()->student->update($attributes);


        return redirect('/student/dashboard');
    }


    public function update()
    {
        return view('components.student.update-form');
    }
}
