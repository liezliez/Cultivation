<?php

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
    /* Deklarasi Tabel Users */
    protected $table      = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'email', 'password', 'gambar', 'role_id', 'active'];
    protected $primaryKey = "id";
    // protected $returnType = "object";

    /* Fungsi Lain-lain */
    public function search($keyword)
    {
        return $this->table('users')->like('username', $keyword);
    }

    public function getAllUsers()
    {
        return $this->db->table('users')
            ->orderBy('username', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function editUser($data)
    {
        $this->db->table('users')
            ->where('id', $data['id'])
            ->update($data);
    }

    public function deleteUser($data)
    {
        $this->db->table('users')
            ->where('id', $data['id'])
            ->delete($data);
    }
}
