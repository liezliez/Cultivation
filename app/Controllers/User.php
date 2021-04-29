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
        // Pagination nomor
        $currentPage = $this->request->getVar('page_user') ? $this->request->getVar('page_user') :
            1;
        // Searching
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $user = $this->userModel->search($keyword);
        } else {
            $user = $this->userModel;
        }

        $data = [
            'title' => 'Daftar User',
            'user' => $user->paginate(8, 'user'),
            'pager' => $this->userModel->pager,
            'currentPage' => $currentPage
        ];

        return view('user/index', $data);
    }
}
