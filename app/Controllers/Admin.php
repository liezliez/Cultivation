<?php

namespace App\Controllers;

class admin extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Cultivation | Admin'
        ];
        return view('/pages/home', $data);
    }
}
