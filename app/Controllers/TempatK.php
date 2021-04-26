<?php

namespace App\Controllers;

class TempatK extends BaseController
{
    protected $tempatkuliner;

    public function __construct()
    {
        $this->tempatkulinerModel = new \App\Models\tempatkulinerModel();
    }

    public function index()
    {
        $tempatkuliner = $this->tempatkulinerModel->findAll();
        $data = [
            'title' => 'Daftar Tempat Kuliner',
            'tempatkuliner' => $tempatkuliner
        ];

        return view('tempat-kuliner/index', $data);
    }
}
