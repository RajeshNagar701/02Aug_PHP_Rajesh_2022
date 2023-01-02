<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController1 extends Controller
{
    
	function signup()
	{
		return view('frontend.register');
	}
	
	function login()
	{
		return view('frontend.login');
	}
	
}
