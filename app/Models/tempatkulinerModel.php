<?php

namespace App\Models;

use CodeIgniter\Model;

class tempatkulinerModel extends Model
{
    protected $table      = 'tempatkuliner';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama',         'slug',
        'pemilik',      'alamat',
        'gambar',       'deskripsi',
        'kategori',     'rating',
        'harga_min',    'harga_max',
        'jam_buka',     'jam_tutup',
    ];

    public function getTempatk($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
