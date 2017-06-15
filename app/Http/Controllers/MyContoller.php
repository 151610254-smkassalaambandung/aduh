<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyContoller extends Controller
{	
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index (){



    return view ('index');
}
}
