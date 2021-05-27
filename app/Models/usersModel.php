<?php

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
    protected $table      = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'email', 'password'];
    protected $primaryKey = "id";
    protected $returnType = "object";

    public function search($keyword)
    {
        return $this->table('users')->like('username', $keyword);
    }
}
