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

    // Fungsi Search
    public function search($user_id)
    {
        return $this->table('review')->like('user_id', $user_id);
    }

    // Fungsi Get Semua Review Berdasarkan
    public function getAllReview()
    {
        return $this->db->table('review')
            ->join('users', 'users.id=review.user_id')
            ->join('tempatkuliner', 'tempatkuliner.slug=review.tempat_kuliner_slug')
            // ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();
    }


    //Fungsi Edit User berdasarkan id, berbentuk object
    public function editUser($data)
    {
        $this->db->table('users')
            ->where('id', $data['id'])
            ->update($data);
    }
}
