<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang extends Model
{
    protected $table = 'db_barang';
    protected $useTimestamps = true;

    public function getPages($slug = false)
    {

        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
