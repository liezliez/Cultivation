<?php

namespace App\Controllers;

use \App\Models\TempatkulinerModel;

class TempatK extends BaseController
{
    protected $tempatkulinerModel;

    public function __construct()
    {
        $this->tempatkulinerModel = new TempatkulinerModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Daftar Tempat Kuliner',
            'tempatkuliner' => $this->tempatkulinerModel->getTempatk()
        ];

        return view('tempat-kuliner/index', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Tempat Kuliner',
            'tempatk' => $this->tempatkulinerModel->getTempatk($slug)
        ];

        /* Jika gak ada */
        if (empty($data['tempatk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Tempat ' . $slug . ' Tidak Ditemukan');
        }

        return view('tempat-kuliner/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Tempat Kuliner'
        ];

        return view('tempat-kuliner/create', $data);
    }

    public function save()
    {
        // $this->request->getVar();

        $slug = url_title($this->request->getVar('nama'), '-', true);

        $this->tempatkulinerModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'pemilik' => $this->request->getVar('pemilik'),
            'alamat' => $this->request->getVar('alamat'),
            'gambar' => $this->request->getVar('gambar')
        ]);
        return redirect()->to('/tempat-kuliner');
    }
}
