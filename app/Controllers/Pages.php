<?php

namespace App\Controllers;

use \App\Models\TempatkulinerModel;
use \App\Models\KamiModel;

class Pages extends BaseController
{
	public function __construct()
	{
		$this->tempatkulinerModel = new TempatkulinerModel();
		$this->kamiModel = new KamiModel();
	}

	public function home()
	{
		$data = [
			'title' => 'Cultivation | Cari Tempat Kulinermu Disini',
			'tempatkuliner' => $this->tempatkulinerModel->getTempatk(),
			'tempatkulinerbaru' => $this->tempatkulinerModel->getTempatkBaru(),
		];
		return view('/pages/home', $data);
	}
	public function index_v2()
	{
		$data = [
			'title' => 'Cultivation | Cari Tempat Kulinermu Disini',
			'tempatkuliner' => $this->tempatkulinerModel->getTempatk(),
		];
		return view('/tempat-kuliner/index_v2', $data);
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
			'title' => 'Cultivation | Tentang Kami',
			'kami' => $this->kamiModel->findAll(),
		];
		return view('/pages/tentangkami', $data);
	}
}
