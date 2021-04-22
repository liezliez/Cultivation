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
		return view('/pages/tempatkuliner');
	}
	public function login()
	{
		return view('/pages/login');
	}
	public function loginAdmin()
	{
		return view('/pages/loginAdmin');
	}
	public function signup()
	{
		return view('/pages/signup');
	}
}
