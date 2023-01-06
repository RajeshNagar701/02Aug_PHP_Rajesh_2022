<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\customerController1; // controller simple type 1
use App\Http\Controllers\customerController2;  // controller --invokable type 2
use App\Http\Controllers\customerController;  // controller --resource type 3 all are ready in controller
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

// controller type & routting method 

//method 1 routing / code in this function
/*
Route::get('/register', function () {
    return view('frontend.register');
});
*/

// method 2 routing by Controllers 
//Route::get('/register',[customerController1::class,'signup']);  // simple controller call
//Route::get('/login',[customerController1::class,'login']);


//Route::get('/invoke',customerController2::class); // --invokable controller call


Route::get('/register',[customerController::class,'index']);  // simple controller call
Route::post('/register',[customerController::class,'store']);


Route::get('/login',[customerController::class,'login']);
Route::post('/userlogin',[customerController::class,'userlogin']);
Route::get('/logout',[customerController::class,'logout']);

Route::get('/profile',[customerController::class,'show']);
Route::get('/editprofile/{id}',[customerController::class,'edit']);
Route::post('/editprofile/{id}',[customerController::class,'update']);

Route::get('/userstatus/{id}',[customerController::class,'userstatus']);


//============================================================
Route::get('/', function () {
    return view('frontend.index');
});


Route::get('/index', function () {
    return view('frontend.index');
});


Route::get('/about', function () {
    return view('frontend.about');
});


Route::get('/service', function () {
    return view('frontend.service');
});


Route::get('/car', function () {
    return view('frontend.car');
});

Route::get('/detail', function () {
    return view('frontend.detail');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/booking', function () {
    return view('frontend.booking');
});

Route::get('/team', function () {
    return view('frontend.team');
});

Route::get('/testimonial', function () {
    return view('frontend.testimonial');
});



//===============================================Admin

Route::get('/admin', function () {
    return view('backend.index');
});
Route::get('/dashboard', function () {
    return view('backend.dashboard');
});
Route::get('/add_categories', function () {
    return view('backend.add_categories');
});
Route::get('/manage_categories', function () {
    return view('backend.manage_categories');
});
Route::get('/add_employee', function () {
    return view('backend.add_employee');
});
Route::get('/manage_employee', function () {
    return view('backend.manage_employee');
});
Route::get('/manage_user',[customerController::class,'manage_user']);
Route::get('/delete_user/{id}',[customerController::class,'destroy']);
Route::get('/admin_logout',[customerController::class,'admin_logout']);