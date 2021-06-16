<?php

namespace App\Models;

use CodeIgniter\Model;

class kamiModel extends Model
{
    /* Deklarasi Tabel kami */
    protected $table      = 'kami';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'deskripsi', 'gambar'];
    // protected $returnType = "object";


    /* Fungsi Lain-Lain */

    // Fungsi Get Semua kami Berdasarkan
    public function getAllKami()
    {
        return $this->db->table('kami')
            ->get()
            ->getResultArray();
    }

    public function getAllKamiById($id)
    {
        return $this->db->table('kami')
            ->where('id', $id)
            ->get()
            ->getResultArray();
    }


    //Fungsi Edit User berdasarkan id, berbentuk object
    public function editKami($data)
    {
        $this->db->table('kami')
            ->where('id', $data['id'])
            ->update($data);
    }
}
