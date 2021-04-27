<?php

namespace App\Controllers;

use \App\Models\TempatkulinerModel;

class TempatK extends BaseController
{
    protected $tempatkulinerModel;

    public function __construct()
    {
        $this->tempatkulinerModel = new TempatkulinerModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Daftar Tempat Kuliner',
            'tempatkuliner' => $this->tempatkulinerModel->getTempatk()
        ];

        return view('tempat-kuliner/index', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Tempat Kuliner',
            'tempatk' => $this->tempatkulinerModel->getTempatk($slug)
        ];
        return view('tempat-kuliner/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Tempat Kuliner'
        ];

        return view('tempat-kuliner/create', $data);
    }

    public function save()
    {
        dd($this->request->getVar());
    }
}
