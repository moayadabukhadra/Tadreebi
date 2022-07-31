<?php

use App\Http\Controllers\CompanyUserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentUserController;
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
Route::get('login', [Controller::class, 'create']);
Route::post('login', [Controller::class, 'store']);

// Company
Route::get('company/register',[CompanyUserController::class,'create']);
Route::post('company/register',[CompanyUserController::class,'store']);

//Student
Route::get('student/register',[StudentUserController::class,'create']);
Route::post('student/register', [StudentUserController::class, 'store']);
Route::get('student/dashboard',[StudentUserController::class,'dashboard'])->middleware('student');
Route::get('post',[StudentUserController::class,'show'])->middleware('student');
Route::get('student/logout',[StudentUserController::class,'destroy']);






