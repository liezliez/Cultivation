<?php

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
    /* Deklarasi Tabel Users */
    protected $table      = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'email', 'password', 'gambar', 'role_id'];
    protected $primaryKey = "id";
    protected $returnType = "object";

    /* Fungsi Lain-lain */
    public function search($keyword)
    {
        return $this->table('users')->like('username', $keyword);
    }
}
