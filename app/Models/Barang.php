<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang extends Model
{
    protected $table = 'db_barang';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_barang', 'slug', 'kode_barang', 'tipe', 'deskripsi', 'stock', 'harga', 'sampul'];

    public function getPages($slug = false)
    {

        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
