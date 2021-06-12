<?php

namespace App\Controllers;

use \App\Models\UsersModel;

class User extends BaseController
{
    protected $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    public function index()
    {
        $data['title'] = 'Cultivation | Homepage';
        $data['user'] = [
            'username' => session()->get('username'),
            'email' => session()->get('email'),
        ];
        $data['users'] = $this->usersModel->getAllUsers();

        return view('user/index', $data);


        /* // Pagination nomor
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

        return view('user/index', $data); */
    }

    public function editUser($id_user)
    {
        $data = [
            'id' => $id_user,
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'role_id' => $this->request->getPost('role_id'),
            'active' => $this->request->getPost('active'),
        ];
        $this->usersModel->editUser($data);
        session()->setFlashdata('edit', 'data berhasil diubah');
        return redirect()->to(base_url('user'));
    }

    public function deleteUser($id_user)
    {
        $data = [
            'id' => $id_user,
        ];
        $this->usersModel->deleteUser($data);
        session()->setFlashdata('delete', 'data berhasil didelete');
        return redirect()->to(base_url('user'));
    }
}
