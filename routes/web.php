<?php

use App\Http\Controllers\CompanyUserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InternShipApplicationController;
use App\Http\Controllers\InternShipPostController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentUserController;
use App\Http\Controllers\UniversityController;
use App\Http\Middleware\MustBeCompany;
use App\Models\internShipPost;
use App\Models\University;
use GuzzleHttp\Middleware;
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
Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');
Route::get('logout',[SessionController::class,'destroy'])->middleware('auth');


// Company
Route::get('company/register',[CompanyUserController::class,'create'])->middleware('guest');
Route::post('company/register',[CompanyUserController::class,'store'])->middleware('guest');
Route::get('company/dashboard/{company:id}',[CompanyUserController::class,'show']);
Route::get('company/update',[CompanyUserController::class,'updateForm'])->middleware('company');
Route::patch('company/update',[CompanyUserController::class,'update'])->middleware('company');
Route::get('company/applications',[InternShipApplicationController::class,'show'])->middleware('company');
Route::get('application/{application:id}',[InternShipApplicationController::class,'showApp'])->middleware('company');
Route::get('company/applications/accepted',[InternShipApplicationController::class,'showAccepted'])->middleware('company');
Route::patch('application/accept/{application:id}',[InternShipApplicationController::class,'update'])->middleware('company');
Route::get('company/post/create',[InternShipPostController::class,'create'])->middleware('company');
Route::post('company/post/create',[InternShipPostController::class,'store'])->middleware('company');
Route::get('company/resume/{application:id}',[InternShipApplicationController::class,'resume'])->middleware('company');

//Student
Route::get('student/register',[StudentUserController::class,'create'])->middleware('guest');
Route::post('student/register', [StudentUserController::class, 'store'])->middleware('guest');
Route::get('student/dashboard/{student:id}',[StudentUserController::class,'dashboard']);
Route::get('post',[StudentUserController::class,'show'])->middleware('student');
Route::get('student/apply/{post:id}',[InternShipApplicationController::class,'create'])->middleware('student');
Route::post('student/apply/{post:id}',[InternShipApplicationController::class,'store'])->middleware('student');
Route::get('student/update',[StudentUserController::class,'update'])->middleware('student');
Route::patch('student/update',[StudentUserController::class,'updateForm'])->middleware('student');
Route::get('student/internships',[InternShipPostController::class,'show']);
Route::get('student/applications',[InternShipApplicationController::class,'applicationResponse'])->middleware('student');
Route::get('student/applications/{application:id}',[InternShipApplicationController::class,'Response'])->middleware('student');


// university -- admin
Route::get('university/dashboard',[UniversityController::class,'create']);
Route::get('university/proposal/{proposal:id}',[UniversityController::class,'show']);







