<?php

namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Http\Request;

class mainpagecontroller extends Controller
{
    public function getHome()
	{
		$products = products::paginate(24);
		return view('trangchu',compact('products'));
	}
}
