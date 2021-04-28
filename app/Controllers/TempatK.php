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
            'title' => 'Tambah Tempat Kuliner',
            'validation' => \Config\Services::Validation()
        ];

        return view('tempat-kuliner/create', $data);
    }

    public function save()
    {
        // $this->request->getVar();
        // validasi
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[tempatkuliner.nama]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} tempat kuliner telah terdaftar'
                ]
            ],
            'pemilik' => [
                'rules' => 'required[tempatkuliner.pemilik]',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required[tempatkuliner.alamat]',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'gambar' => [
                'rules' => 'required[tempatkuliner.gambar]',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/tempat-kuliner/tambah')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->tempatkulinerModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'pemilik' => $this->request->getVar('pemilik'),
            'alamat' => $this->request->getVar('alamat'),
            'gambar' => $this->request->getVar('gambar')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/tempat-kuliner');
    }

    public function delete($id)
    {
        $this->tempatkulinerModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/tempat-kuliner');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Edit Tempat Kuliner',
            'validation' => \Config\Services::Validation(),
            'tempatk' => $this->tempatkulinerModel->getTempatk($slug)
        ];

        return view('tempat-kuliner/edit', $data);
    }

    public function update($id)
    {
        // cek nama
        $tempatkLama = $this->tempatkulinerModel->getTempatk($this->request->getVar('slug'));
        if ($tempatkLama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[tempatkuliner.nama]';
        }

        // validasi
        if (!$this->validate([
            'nama' => [
                'rules' => $rule_nama,
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} tempat kuliner telah terdaftar'
                ]
            ],
            'pemilik' => [
                'rules' => 'required[tempatkuliner.pemilik]',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required[tempatkuliner.alamat]',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'gambar' => [
                'rules' => 'required[tempatkuliner.gambar]',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/tempat-kuliner/tambah')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->tempatkulinerModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'pemilik' => $this->request->getVar('pemilik'),
            'alamat' => $this->request->getVar('alamat'),
            'gambar' => $this->request->getVar('gambar')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/tempat-kuliner');
    }
}
