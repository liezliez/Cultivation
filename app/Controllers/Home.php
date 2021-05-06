<?php

namespace App\Controllers;

class Home extends BaseController
{
	//Menampilkan Home
	public function index()
	{
		return view('pages/index');
	}
}
