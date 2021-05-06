<?php

namespace App\Controllers;

class Pages extends BaseController
{
	//Menampilkan page Home
	public function home()	
	{
		$data = [
			'title' => 'Cultivation | Cari Tempat Kulinermu Disini'
		];
		return view('/pages/home', $data);
	}
	//Menampilkan detail tempat kuliner
	public function details()
	{
		$data = [
			'title' => 'Details | TempatK'
		];
		return view('/pages/tempatkuliner', $data);
	}
	//Menampilkan halaman login
	public function login()
	{
		$data = [
			'title' => 'Cultivation | Login'
		];
		return view('/pages/login', $data);
	}
	//Menampilkan halaman login akun
	public function loginAdmin()
	{
		return view('/pages/loginAdmin');
	}
	//Menampilkan page signup
	public function signup()
	{
		$data = [
			'title' => 'Cultivation | Sign-Up'
		];
		return view('/pages/signup', $data);
	}
	//Menampilkan halaman "tentang kami"
	public function tentangKami()
	{
		$data = [
			'title' => 'Cultivation | Tentang Kami'
		];
		return view('/pages/tentang-kami', $data);
	}
}
