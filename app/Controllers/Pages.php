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
	public function homes()
	{
		$data = [
			'title' => 'Cultivation | Cari Tempat Kulinermu Disini'
		];
		return view('/pages/homes', $data);
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
	public function register()
	{
		$data = [
			'title' => 'Cultivation | Sign-Up'
		];
		return view('/pages/register', $data);
	}
	public function tentangKami()
	{
		$data = [
			'title' => 'Cultivation | Tentang Kami'
		];
		return view('/pages/tentangkami', $data);
	}
}
