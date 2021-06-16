<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Register extends BaseController
{
    /* public function __construct()
    {
        helper('form');
        $this->usersModel = new UsersModel();
    } */

    public function index()
    {
        $data = [
            'title' => 'Cultivation | Sign-Up',
            'validation' => \Config\Services::Validation()
        ];
        return view('auth/register', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'email yang dimasukan tidak valid',
                    'is_unique' => 'email yang dimasukan sudah terdaftar',
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,5024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => '{field} harus ada',
                    'max_size' => '{field} maksimal 5MB',
                    'is_image' => 'File harus gambar',
                    'mime_in' => 'File harus gambar'

                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        /* // Save ke data
        $data = [
            'username' => $this->request->getVar('username'),
            'role_id' => 2,
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'email' => $this->request->getVar('email'),
        ];
        // Insert ke table
        $this->usersModel->save_register($data);
        */


        // ambil gambar
        $fileGambar = $this->request->getFile('gambar');

        // kalau gaada gambar
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {
            // ambil nama gambar
            $namaGambar = $fileGambar->getName();
            // pndah gambar
            $fileGambar->move('img/user');
        }

        $users = new UsersModel();
        $users->insert([
            'username' => $this->request->getVar('username'),
            'role_id' => 2,
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'email' => $this->request->getVar('email'),
            'gambar' => $namaGambar,
        ]);
        // Flash data message registrasi berhasil
        session()->setFlashdata('message', 'Registrasi Berhasil');
        return redirect()->to('/login');
    }
}
