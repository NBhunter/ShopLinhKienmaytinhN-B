<?php

namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Http\Request;

class mainpagecontroller extends Controller
{
    public function getHome()
	{
		
		$data['products'] = products::paginate(24);
		return view('trangchu',compact('data'));
	}
	public function getDangKy()
	{
		return view('auth.register');
	}
	public function getlogin()
	{
		return view('auth.login');
	}
	

}
