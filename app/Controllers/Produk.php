<?php

namespace App\Controllers;

class Produk extends BaseController
{

    public function addProduk()
    {

        $image = $this->request->getFile('image');
        $nama = $image->getRandomName();
        $image->move(NAMA_FOLDER . "/images", $nama);

        $nilai = $this->produkModel->save([
            "nama_produk" => $this->request->getPost('nama_produk'),
            "jenis_produk" => $this->request->getPost('jenis_produk'),
            "deskripsi_produk" => $this->request->getPost('deskripsi_produk'),
            "harga_produk" => $this->request->getPost('harga_produk'),
            "image" => $nama,
        ]);

        if ($nilai == 1) {
            echo "Berhasil Disimpan";
            $check = true;
            $time = 60 * 9999;
            session()->setTempData("produk", true, $time);
        } else {
            echo "Gagal Disimpan";
        }

        return $check ? redirect()->to(base_url() . "/menu") : redirect()->to(base_url() . "/dashboard");
    }
    {
        return view('welcome_message');
    }
}
