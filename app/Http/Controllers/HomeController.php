<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Models\products;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getHome()
	{
		$products = products::paginate(24);
		return view('trangchu',compact('products'));
	}
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['user'] = User::paginate(1);
        $data['products'] = products::paginate(24);
		return view('trangchu',compact('data'));
    }
}
