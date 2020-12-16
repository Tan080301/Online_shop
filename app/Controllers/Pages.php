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
            'db_barang' => $db_barang
        ];

        return view('/pages/home', $data);
    }

    //--------------------------------------------------------------------

}
