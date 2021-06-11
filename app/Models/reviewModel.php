<?php

namespace App\Models;

use CodeIgniter\Model;

class reviewModel extends Model
{
    /* Deklarasi Tabel review */
    protected $table      = 'review';
    protected $useTimestamps = true;
    protected $allowedFields = ['user_id', 'review', 'tempat_kuliner_slug'];
    protected $primaryKey = "id";
    protected $returnType = "object";


    /* Fungsi Lain-Lain */
    public function search($user_id)
    {
        return $this->table('review')->like('user_id', $user_id);
    }
}
