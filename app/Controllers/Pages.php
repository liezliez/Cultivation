<?php

namespace App\Controllers;

class Pages extends BaseController
{

	public function home()
	{
		$data = [
			'title' => 'Cultivation | Cari Tempat Kulinermu Disini'
		];
		return view('/pages/home', $data);
	}
	public function details()
	{
		$data = [
			'title' => 'Details | TempatK'
		];
		return view('/pages/tempatkuliner', $data);
	}
	public function login()
	{
		$data = [
			'title' => 'Cultivation | Login'
		];
		return view('/pages/login', $data);
	}
	public function loginAdmin()
	{
		return view('/pages/loginAdmin');
	}
	public function signup()
	{
		$data = [
			'title' => 'Cultivation | Sign-Up'
		];
		return view('/pages/signup', $data);
	}
	public function tentangkami()
	{
		$data = [
			'title' => 'Tentangkami | Tentang-Kami'
		];
		return view('/pages/tentangkami', $data);
	}
}
