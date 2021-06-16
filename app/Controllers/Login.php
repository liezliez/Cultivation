<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login | Cari Tempat Kulinermu Disini'
        ];
        return view('/auth/login', $data);
    }
    public function process()
    {
        /* Ngambil Data dari Form */
        $users = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        /* Cari Data user di Database */
        $dataUser = $users->where([
            'email' => $email,
        ])->first();

        if ($dataUser) {
            if ((password_verify($password, $dataUser['password'])) && (($dataUser['active']) == 1)) {
                session()->set([
                    'id' => $dataUser['id'],
                    'username' => $dataUser['username'],
                    'email' => $dataUser['email'],
                    'role_id' => $dataUser['role_id'],
                    'gambar' => $dataUser['gambar'],
                    'logged_in' => TRUE
                ]);
                // Jika role Admin
                if (session()->role_id == 1) {
                    return redirect()->to(base_url('/'));
                }
                // Jika role user
                else {
                    return redirect()->to(base_url('/'));
                }
            } else {
                session()->setFlashdata('error', 'Password Salah / Akun anda dinonaktifkan');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'email Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        session()->setFlashdata('message', 'Anda Telah Logout');
        return redirect()->to('/login');
    }
}
