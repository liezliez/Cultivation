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

        /* // Pagination nomor/*  */
        $currentPage = $this->request->getVar('page_user') ? $this->request->getVar('page_user') :
            1;

        // Searching
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $users = $this->usersModel->search($keyword);
        } else {
            $users = $this->usersModel;
        }

        $data = [
            'title' => 'Cultivation | Homepage',
            'users' => $users->paginate(5, 'users'),
            'pager' => $this->usersModel->pager,
            'currentPage' => $currentPage,

        ];

        $data['user'] = [
            'username' => session()->get('username'),
            'email' => session()->get('email'),
        ];
        return view('user/index', $data);
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

    // public function deleteUser($id_user)
    // {
    //     $data = [
    //         'id' => $id_user
    //     ];
    //     $this->usersModel->deleteUser($data);
    //     session()->setFlashdata('delete', 'data berhasil didelete');
    //     return redirect()->to(base_url('user'));
    // }

    public function deleteUser($id)
    {
        $data = [
            'id' => $id,
        ];
        // hapus data di database
        $this->usersModel->deleteUser($data);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/user');
    }
}
