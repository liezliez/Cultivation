<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    protected $table      = 'user';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'password'];

    public function search($keyword)
    {
        return $this->table('user')->like('nama', $keyword);
    }
}
