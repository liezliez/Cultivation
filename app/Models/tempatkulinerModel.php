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
    public function search($nama)
    {
        return $this->table('tempatkuliner')->like('nama', $nama);
    }
    public function getAllTempatk()
    {
        return $this->findAll();
    }
    public function getTempatk($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
    public function getTempatkByRating()
    {
        return $this->db->table('tempatkuliner')
            ->where('rating', 5)
            ->get()
            ->getResultArray();
    }

    public function getTempatkByKategori($kategori_tempat)
    {
        return $this->db->table('tempatkuliner')
            ->where('kategori', $kategori_tempat)
            ->get()
            ->getResultArray();
    }
}
