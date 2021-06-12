<?php

namespace App\Models;

use CodeIgniter\Model;

class tempatkulinerModel extends Model
{
    protected $table      = 'tempatkuliner';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'pemilik', 'alamat', 'deskripsi', 'gambar', 'slug'];

    public function getTempatk($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
