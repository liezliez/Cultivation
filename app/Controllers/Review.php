<?php

namespace App\Controllers;

use App\Models\ReviewModel;
use App\Models\TempatkulinerModel;

class Review extends BaseController
{

    public function __construct()
    {
        $this->reviewModel = new ReviewModel();
        $this->tempatkulinerModel = new TempatkulinerModel();
        helper('form');
    }

    public function index($slug)
    {
        $data = [
            'title' => 'Cultivation | Review',
            'validation' => \Config\Services::Validation(),
            'reviews' => $this->reviewModel->getAllReview(),
        ];
        return $data;
    }

    public function save($slug)
    {

        if (!$this->validate([
            'main-review' => [
                'rules' => 'required|min_length[2]|max_length[100]',
                'errors' => [
                    'required' => 'Review anda tidak boleh kosong',
                    'min_length' => '{field} Minimal 2 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $tempatk = $this->tempatkulinerModel->getTempatk($slug);
        $slug_sekarang = $tempatk['slug'];
        $user_id = session()->get('id');
        $this->reviewModel->insert([
            'review' => $this->request->getVar('main-review'),
            'user_id' => $user_id,
            'tempat_kuliner_slug' => $slug_sekarang,
        ]);
        // Flash data message registrasi berhasil
        session()->setFlashdata('message', 'Review Berhasil');
        return redirect()->back();
    }
}
