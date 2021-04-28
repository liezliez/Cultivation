<?php

namespace App\Controllers;

use \App\Models\UserModel;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_user') ? $this->request->getVar('page_user') :
            1;
        $data = [
            'title' => 'Daftar User',
            'user' => $this->userModel->paginate(8, 'user'),
            'pager' => $this->userModel->pager,
            'currentPage' => $currentPage
        ];

        return view('user/index', $data);
    }
}
