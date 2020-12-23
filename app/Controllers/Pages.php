<?php

namespace App\Controllers;

use App\Models\Barang;

class Pages extends BaseController
{
    protected $dataBase;
    public function __construct()
    {
        $this->dataBase = new Barang();
    }
    public function index()
    {
        $db_barang = $this->dataBase->findAll();

        $data = [
            'title' => 'Home | Otlizshop',
            'db_barang' => $this->dataBase->getPages()
        ];

        return view('/pages/home', $data);
    }

    public function features()

    {
        $data = [
            'title' => 'Features | Otlizshop'
        ];

        return view('/pages/features', $data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Produk',
            'db_barang' => $this->dataBase->getPages($slug)
        ];

        return view('/databarang/detail', $data);
    }
    //--------------------------------------------------------------------

}
