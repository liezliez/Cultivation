<?php

namespace App\Models;

use CodeIgniter\Model;

class feedbackModel extends Model
{
    /* Deklarasi Tabel feedback */
    protected $table      = 'feedback';
    protected $useTimestamps = true;
    protected $allowedFields = ['email', 'feedback', 'tanggal'];
    // protected $returnType = "object";


    /* Fungsi Lain-Lain */

    // Fungsi Get Semua feedback Berdasarkan
    public function getAllFeedback()
    {
        return $this->db->table('feedback')
            ->get()
            ->getResultArray();
    }

    public function getAllfeedbackById($id)
    {
        return $this->db->table('feedback')
            ->where('id', $id)
            ->get()
            ->getResultArray();
    }


    //Fungsi Edit User berdasarkan id, berbentuk object
    public function editfeedback($data)
    {
        $this->db->table('feedback')
            ->where('id', $data['id'])
            ->update($data);
    }
}
