<?php

namespace App\Controllers;

class admin extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Cultivation | Admin',
            'username' => session()->get('username'),
            'email' => session()->get('email')
        ];
        return view('admin/index', $data);
    }
}
