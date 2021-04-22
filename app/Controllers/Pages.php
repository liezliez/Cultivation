<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		return view('/pages/home');
	}
	public function home()
	{
		return view('/pages/home');
	}
	public function details()
	{
		return view('/pages/tempatkuliner-details');
	}
}
