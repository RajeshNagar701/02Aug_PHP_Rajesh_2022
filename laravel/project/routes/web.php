<?php

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

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/register', function () {
    return view('frontend.register');
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
Route::get('/manage_user', function () {
    return view('backend.manage_user');
});
Route::get('/admin_logout', function () {
    
});