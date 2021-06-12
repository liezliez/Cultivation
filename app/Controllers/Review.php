<?php

namespace App\Controllers;

use App\Models\ReviewModel;

class Review extends BaseController
{

    public function __construct()
    {
        $this->reviewModel = new ReviewModel();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'Cultivation | Review',
            'validation' => \Config\Services::Validation(),
            'reviews' => $this->reviewModel->getAllReview()
        ];
        return $data;
    }

    public function save()
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
            // echo '<script type="text/javascript">toastr.success("Have Fun")</script>';
            return redirect()->back()->withInput();
        }

        $user_id = session()->get('id');
        $this->reviewModel->insert([
            'review' => $this->request->getVar('main-review'),
            'user_id' => $user_id,
        ]);
        // Flash data message registrasi berhasil
        session()->setFlashdata('message', 'Review Berhasil');
        return redirect()->back();
    }
}
