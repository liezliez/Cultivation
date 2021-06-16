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

    // Index return Controller
    public function index()
    {

        $data = [
            'title' => 'Daftar Tempat Kuliner',
            'tempatk' => $this->tempatkulinerModel->getTempatk(),

        ];

        return view('tempat-kuliner/index', $data);
    }

    // Menampilkan Detail Tempat Kuliner berdasarkan Slug
    public function detail($slug)
    {

        $data = [
            'tempatk' => $this->tempatkulinerModel->getTempatk($slug),
            // 'reviews' => $this->reviewModel->getAllReview(),
        ];

        /* Jika gak ada */
        if (empty($data['tempatk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Tempat ' . $slug . ' Tidak Ditemukan');
        }
        $tempatk_sama = $this->tempatkulinerModel->getTempatkByKategori($data['tempatk']['kategori']);
        $data = [
            'title' => 'Detail Tempat Kuliner',
            'tempatk_sama' => $tempatk_sama,
            'tempatk' => $this->tempatkulinerModel->getTempatk($slug),
            'reviews' => $this->reviewModel->getAllReviewBySlug($slug),
            'countReviews' => $this->reviewModel->countAllReviewBySlug($slug),
        ];
        return view('tempat-kuliner/detail', $data);
    }

    // Menambah Tempat Kuliener Baru
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

    // Validasi dan Insert Data ke Database
    public function save()
    {

        // validasi dengan aturan inputan yang telah kami tentukan
        if (!$this->validate(
            [
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
                ],
                'deskripsi' => [
                    'rules' => 'required[tempatkuliner.deskripsi]|max_length[800]',
                    'errors' => [
                        'required' => '{field} harus diisi'
                    ]
                ],
                'kategori' => [
                    'rules' => 'required[tempatkuliner.kategori]',
                    'errors' => [
                        'required' => '{field} harus diisi'
                    ]
                ],
                'rating' => [
                    'rules' => 'required[tempatkuliner.rating]',
                    'errors' => [
                        'required' => '{field} harus diisi'
                    ]
                ],
                'harga_min' => [
                    'rules' => 'required[tempatkuliner.harga_min]|greater_than[0]',
                    'errors' => [
                        'required' => '{field} harus diisi'
                    ]
                ],
                'harga_max' => [
                    'rules' => 'required[tempatkuliner.harga_max]|greater_than[0]',
                    'errors' => [
                        'required' => '{field} harus diisi'
                    ]
                ],
                'jam_buka' => [
                    'rules' => 'required[jam_buka.deskripsi]',
                    'errors' => [
                        'required' => '{field} harus diisi'
                    ]
                ],
                'jam_tutup' => [
                    'rules' => 'required[jam_tutup.deskripsi]',
                    'errors' => [
                        'required' => '{field} harus diisi'
                    ]
                ],
            ]
        )) {
            // Jika Rules Tidak Terpenuhi
            return redirect()->to('/tempat-kuliner/tambah')->withInput();
        }

        // Fungsi ambil gambar dari Upload Request
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
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kategori' => $this->request->getVar('kategori'),
            'rating' => $this->request->getVar('rating'),
            'harga_min' => $this->request->getVar('harga_min'),
            'harga_max' => $this->request->getVar('harga_max'),
            'jam_buka' => $this->request->getVar('jam_buka'),
            'jam_tutup' => $this->request->getVar('jam_tutup'),
            'gambar' => $namaGambar,
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/tempat-kuliner');
    }

    // Fungsi Delete Tempat Kuliner berdasarkan parameter ID
    public function delete($slug)
    {
        // hapus gambar di public
        $tempatkulinerModel = $this->tempatkulinerModel->find($slug);
        // kalau gambar default
        if ($tempatkulinerModel['gambar'] != 'default.jpg') {
            unlink('img/tempat-kuliner/' . $tempatkulinerModel['gambar']);
        }
        // hapus data di database
        $this->tempatkulinerModel->delete($slug);
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
            'kategori' => [
                'rules' => 'required[tempatkuliner.kategori]',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'rating' => [
                'rules' => 'required[tempatkuliner.rating]',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'harga_min' => [
                'rules' => 'required[tempatkuliner.harga_min]|greater_than[0]',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'harga_max' => [
                'rules' => 'required[tempatkuliner.harga_max]|greater_than[0]',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'jam_buka' => [
                'rules' => 'required[jam_buka.deskripsi]',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'jam_tutup' => [
                'rules' => 'required[jam_tutup.deskripsi]',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
        ])) {
            return redirect()->back()->withInput();
        }

        // cek gambar , gambar lama atau baru

        $fileGambar = $this->request->getFile('gambar');
        $gambar_lama = $this->request->getVar('gambarLama');
        // kalau ternyata make gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $gambar_lama;
            // kalau ternyata ganti gambar
        } else {
            $namaGambar = $fileGambar->getName();
            $fileGambar->move('img/tempat-kuliner', $namaGambar);
            // hapus gambar lama
            unlink('img/tempat-kuliner/' . $gambar_lama);
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->tempatkulinerModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'pemilik' => $this->request->getVar('pemilik'),
            'alamat' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kategori' => $this->request->getVar('kategori'),
            'rating' => $this->request->getVar('rating'),
            'harga_min' => $this->request->getVar('harga_min'),
            'harga_max' => $this->request->getVar('harga_max'),
            'jam_buka' => $this->request->getVar('jam_buka'),
            'jam_tutup' => $this->request->getVar('jam_tutup'),
            'gambar' => $namaGambar,

        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/tempat-kuliner');
    }

    public function murah()
    {

        $data = [
            'title' => 'Daftar Tempat Kuliner',
            'tempatkuliner' => $this->tempatkulinerModel->getTempatk(),
        ];

        return view('tempat-kuliner/index_murah', $data);
    }

    public function bersih()
    {

        $data = [
            'title' => 'Daftar Tempat Kuliner',
            'tempatkuliner' => $this->tempatkulinerModel->getTempatk(),
        ];

        return view('tempat-kuliner/index_bersih', $data);
    }

    public function enak()
    {

        $data = [
            'title' => 'Daftar Tempat Kuliner',
            'tempatkuliner' => $this->tempatkulinerModel->getTempatk(),
        ];

        return view('tempat-kuliner/index_enak', $data);
    }

    public function easterEgg()
    {
        $data = [
            'title' => 'Cultivation | Tentang Kami',
            'tempatkuliner' => $this->tempatkulinerModel->getTempatk(),
        ];
        return view('/pages/easterEgg', $data);
    }

    public function ratingTertinggi()
    {

        $data = [
            'title' => 'Daftar Tempat Kuliner',
            'tempatkuliner' => $this->tempatkulinerModel->getTempatkByRating(),
        ];

        return view('tempat-kuliner/index_rating_tertinggi', $data);
    }
}
