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

    // Fungsi Get Semua Review Berdasarkan
    public function getAllReview()
    {
        return $this->db->table('review')
            ->join('users', 'users.id=review.user_id')
            // ->join('tempatkuliner', 'tempatkuliner.slug=review.tempat_kuliner_slug')
            // ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();
    }

<<<<<<< HEAD
    public function getAllReviewBySlug($slug)
    {
        return $this->db->table('review')
            ->join('users', 'users.id=review.user_id')
            ->where('tempat_kuliner_slug', $slug)
            ->where('active', '1')
            // ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function countAllReviewBySlug($slug)
    {
        $review = $this->db->table('review')
            ->join('users', 'users.id=review.user_id')
            ->where('tempat_kuliner_slug', $slug)
            ->where('active', '1')
            // ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();
        return count($review);
    }

=======
>>>>>>> parent of 2a617e2 (bingung join table)

    //Fungsi Edit User berdasarkan id, berbentuk object
    public function editUser($data)
    {
        $this->db->table('users')
            ->where('id', $data['id'])
            ->update($data);
    }
}
