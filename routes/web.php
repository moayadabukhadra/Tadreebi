<?php

use App\Http\Controllers\CompanyUserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InternShipApplicationController;
use App\Http\Controllers\InternShipPostController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentUserController;
use App\Http\Controllers\UniversityController;
use App\Models\internShipPost;
use App\Models\University;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
});

//user
Route::get('login', [SessionController::class, 'create']);
Route::post('login', [SessionController::class, 'store']);
Route::get('logout',[SessionController::class,'destroy']);


// Company
Route::get('company/register',[CompanyUserController::class,'create']);
Route::post('company/register',[CompanyUserController::class,'store']);
Route::get('company/dashboard',[CompanyUserController::class,'dashboard'])->middleware('company');
Route::get('application/{application:id}',[InternShipPostController::class,'show'])->middleware('company');
Route::get('company/dashboard/accepted',[CompanyUserController::class,'showAccepted'])->middleware('company');
Route::patch('application/accept/{application:id}',[CompanyUserController::class,'accept'])->middleware('company');
Route::delete('application/reject/{application:id}',[InternShipApplicationController::class,'destroy'])->middleware('company');
Route::get('company/post/create',[InternShipPostController::class,'create'])->middleware('company');
Route::post('company/post/create',[InternShipPostController::class,'store'])->middleware('company');

//Student
Route::get('student/register',[StudentUserController::class,'create']);
Route::post('student/register', [StudentUserController::class, 'store']);
Route::get('student/dashboard',[StudentUserController::class,'dashboard'])->middleware('student');
Route::get('post',[StudentUserController::class,'show'])->middleware('student');
Route::get('student/apply/{post:id}',[InternShipApplicationController::class,'create'])->middleware('student');
Route::post('student/apply/{post:id}',[InternShipApplicationController::class,'store'])->middleware('student');

// university -- admin
Route::get('university/dashboard',[UniversityController::class,'create']);
Route::get('university/proposal/{proposal:id}',[UniversityController::class,'show']);







