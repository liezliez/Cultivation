<?php

namespace App\Controllers;

class TempatK extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Tempat Kuliner'
        ];

        return view('tempat-kuliner/index', $data);
    }
}
