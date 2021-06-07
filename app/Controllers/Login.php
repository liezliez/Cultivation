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
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        /* Cari Data user di Database */
        $dataUser = $users->where([
            'username' => $username,
        ])->first();

        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'email' => $dataUser->email,
                    'role_id' => $dataUser->role_id,
                    'gambar' => $dataUser->gambar,
                    'logged_in' => TRUE
                ]);
                // Jika role Admin
                if (session()->role_id == 1) {
                    return redirect()->to(base_url('admin'));
                }
                // Jika role user
                else {
                    return redirect()->to(base_url('user'));
                }
            } else {
                session()->setFlashdata('error', 'Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username Salah');
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
