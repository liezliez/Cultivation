<?php

namespace App\Controllers;

use \App\Models\TempatkulinerModel;
use \App\Models\ReviewModel;

class TempatK extends BaseController
{
    protected $tempatkulinerModel;

    public function __construct()
    {
        $this->tempatkulinerModel = new TempatkulinerModel();
        $this->reviewModel = new ReviewModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Daftar Tempat Kuliner',
            'tempatkuliner' => $this->tempatkulinerModel->getTempatk(),
            'reviews' => $this->reviewModel->getAllReview()
        ];

        return view('tempat-kuliner/index', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Tempat Kuliner',
            'tempatk' => $this->tempatkulinerModel->getTempatk($slug),
            'reviews' => $this->reviewModel->getAllReview()
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
        if (session()->get('role_id') != 1) {
            return redirect()->back();
        }
        return view('tempat-kuliner/create', $data);
    }

    public function save()
    {
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
                'rules' => 'max_size[gambar,5024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => '{field} harus ada',
                    'max_size' => '{field} maksimal 5MB',
                    'is_image' => 'File harus gambar',
                    'mime_in' => 'File harus gambar'

                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/tempat-kuliner/tambah')->withInput()->with('validation', $validation);
            return redirect()->to('/tempat-kuliner/tambah')->withInput();
        }

        // ambil gambar
        $fileGambar = $this->request->getFile('gambar');

        // kalau gaada gambar
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {
            // ambil nama gambar
            $namaGambar = $fileGambar->getName();
            // pndah gambar
            $fileGambar->move('img/tempat-kuliner');
        }


        // Insert Database

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->tempatkulinerModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'pemilik' => $this->request->getVar('pemilik'),
            'alamat' => $this->request->getVar('alamat'),
            'gambar' => $namaGambar
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/tempat-kuliner');
    }

    public function delete($id)
    {
        // hapus gambar di public
        $tempatkulinerModel = $this->tempatkulinerModel->find($id);
        // kalau gambar default
        if ($tempatkulinerModel['gambar'] != 'default.jpg') {
            unlink('img/tempat-kuliner/' . $tempatkulinerModel['gambar']);
        }
        // hapus data di database
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
                'rules' => 'max_size[gambar,5024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => '{field} harus ada',
                    'max_size' => '{field} maksimal 5MB',
                    'is_image' => 'File harus gambar',
                    'mime_in' => 'File harus gambar'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required[tempatkuliner.deskripsi]|max_length[800]',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
        ])) {
            return redirect()->back()->withInput();
        }

        // cek gambar , gambar lama atau baru

        $fileGambar = $this->request->getFile('gambar');

        // kalau ternyata make gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
            // kalau ternyata ganti gambar
        } else {
            $namaGambar = $fileGambar->getName();
            $fileGambar->move('img/tempat-kuliner', $namaGambar);
            // hapus gambar lama
            unlink('img/tempat-kuliner/' . $this->request->getVar('gambarLama'));
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->tempatkulinerModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'pemilik' => $this->request->getVar('pemilik'),
            'alamat' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' => $namaGambar
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/tempat-kuliner');
    }
}
