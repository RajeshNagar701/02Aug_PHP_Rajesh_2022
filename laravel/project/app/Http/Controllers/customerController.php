<?php

namespace App\Http\Controllers;


use App\Models\countrie;
use App\Models\customer;

use Hash;
use Alert;
use session;

use Illuminate\Http\Request;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	   $country=countrie::all();	  // select * from
       return view('frontend.register',['country'=>$country]);
    }
	
	function login()
	{
		return view('frontend.login');
	}
	
	function userlogin(Request $request)
	{
		$username=$request->username;
					  //where('username',$username) // = is default
		$data=customer::where('username','=',$username)->first();
		if($data)   // if(! $data || Hash::check($request->password,$data->password))
		{
			$chk=Hash::check($request->password,$data->password);
			if($chk)
			{
				
				if($data->status=="Unblock")
				{
					session()->put('userId',$data->id);
					session()->put('name',$data->name);
					session()->put('username',$data->username);
					Alert::success('Congrats', 'You\'ve Successfully Login');
					
					return redirect('/index');
				}
				else
				{
					Alert::error('Login Failed', 'Account Blocked so Failed Login');
					return redirect()->back();
				}
			}
			else
			{
				Alert::error('Login Failed', 'Wrong Password');
				return redirect()->back();
			}
		}
		else
		{
			Alert::error('Login Failed', 'Wrong UserName');
			return redirect()->back();
		}	
		
	}
	
	function logout()
	{
		session()->pull('userId');
		session()->pull('name');
		session()->pull('username');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/index');
	}
	
	function manage_user()
	{
		$customer=customer::all();
        return view('backend.manage_user',['fetch'=>$customer]);
	}
	
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new customer;
		$data->name=$request->name;
		$data->username=$request->username;
		$data->password=Hash::make($request->password);
		$data->gen=$request->gen;
		$data->lag=implode(",",$request->lag);
		$data->cid =$request->cid ;
		$data->mobile=$request->mobile;
		
		// img upload
		$file=$request->file('file');		
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('frontend/img/upload/',$filename);  // use move for move image in public/images
		$data->file=$filename; // name store in db

		$data->save();
		Alert::success('success', 'Register Success');
		return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
		//$data=customer::where("id",'=',session('userId'))->first();  single data fetch
		$data=customer::join('countries','customers.cid','=','countries.id')
		->where("customers.id",'=',session('userId'))->first(['customers.*','countries.cnm']); //(['customers.*','countries.cnm']);
		return view('frontend.profile',['fetch'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$country=countrie::all();
        $data=customer::where("id",'=',$id)->first();
		return view('frontend.editprofile',['country'=>$country,'fetch'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$data=customer::where("id",'=',$id)->delete();
		$data=customer::find($id);
		$data->delete();
		Alert::success('success', 'Delete Success');
		return back();
    }
}
