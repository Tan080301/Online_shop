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

        if (empty($data['db_barang'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($slug . ' tidak ditemukan.');
        }

        return view('/databarang/detail', $data);
    }
    //--------------------------------------------------------------------

    public function create()
    {

        $data = [
            'title' => 'Form Tambah Barang',
            'validation' => \Config\Services::validation()
        ];

        return view('/admin/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama_barang' => [
                'rules' => 'required|is_unique[db_barang.nama_barang]',
                'errors' => [
                    'required' => 'Nama barang harus diisi.',
                    'is_unique' => 'Barang sudah terdaftar.'
                ]
            ],

            'kode_barang' => [
                'rules' => 'required|is_unique[db_barang.kode_barang]',
                'errors' => [
                    'required' => 'Kode barang harus diisi.',
                    'is_unique' => 'Kode barang sudah terdaftar.'
                ]
            ],

            'tipe' => [
                'rules' => 'required|is_unique[db_barang.tipe]',
                'errors' => [
                    'required' => 'Tipe harus diisi.',
                    'is_unique' => 'Tipe sudah terdaftar.'
                ]
            ],

            'deskripsi' => [
                'rules' => 'required[db_barang.deskripsi]',
                'errors' => [
                    'required' => 'Deskripsi harus diisi.',
                ]
            ],

            'stock' => [
                'rules' => 'required[db_barang.stock]',
                'errors' => [
                    'required' => 'Stok harus diisi.',
                ]
            ],

            'harga' => [
                'rules' => 'required[db_barang.harga]',
                'errors' => [
                    'required' => 'Harga harus diisi.',
                ]
            ],

            'sampul' => [
                'rules' => 'max_size[sampul,2048]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/admin/create')->withInput()->with('validation', $validation);
            return redirect()->to('/admin/create')->withInput();
        }

        // ambil gambar
        $fileSampul = $this->request->getFile('sampul');
        // apakah tidak ada gambar yang diupload
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default.jpg';
        } else {

            // generate nama sampul random
            $namaSampul = $fileSampul->getRandomName();

            // pindahkan file ke folder img
            $fileSampul->move('img', $namaSampul);
        }



        $slug = url_title($this->request->getVar('nama_barang'), '-', true);
        $this->dataBase->save([
            'nama_barang' => $this->request->getVar('nama_barang'),
            'slug' => $slug,
            'kode_barang' => $this->request->getVar('kode_barang'),
            'tipe' => $this->request->getVar('tipe'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'stock' => $this->request->getVar('stock'),
            'harga' => $this->request->getVar('harga'),
            'sampul' => $namaSampul

        ]);

        // flash message
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin/create');
    }
}
