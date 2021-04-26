<?php

namespace App\Controllers;

class TempatK extends BaseController
{
    protected $tempatkuliner;

    public function __construct()
    {
        $this->TempatkulinerModel = new \App\Models\TempatkulinerModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Daftar Tempat Kuliner',
            'tempatkuliner' => $this->TempatkulinerModel->getTempatk()
        ];

        return view('tempat-kuliner/index', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Tempat Kuliner',
            'tempatk' => $this->TempatkulinerModel->getTempatk($slug)
        ];
        return view('tempat-kuliner/detail', $data);
    }
}
