<?php

namespace App\Controllers;

use App\Models\ReviewModel;

class Review extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Cultivation | Review',
            'validation' => \Config\Services::Validation()
        ];
        return $data;
    }

    public function save()
    {
        if (!$this->validate([
            'main-review' => [
                'rules' => 'required|min_length[2]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 2 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $review = new ReviewModel();
        $user_id = session()->get('id');
        $review->insert([
            'review' => $this->request->getVar('main-review'),
            'user_id' => $user_id,
        ]);
        // Flash data message registrasi berhasil
        session()->setFlashdata('message', 'Review Berhasil');
        return redirect()->back();
    }
}
