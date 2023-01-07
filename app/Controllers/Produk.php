<?php

namespace App\Controllers;

class Produk extends BaseController
{

    public function addProduk()
    {
        $image = $this->request->getFile('image');
        $nama = $image->getRandomName();
        $image->move("riter/images", $nama);

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

        return session()->getTempData("is_login") ? redirect()->to(base_url() . "/produk") : redirect()->to(base_url());
    }

    public function get_produk()
    {
        $data = [
            'produk' => $this->produkModel->findAll()
        ];

        return view('dashboard/produk', $data);
    }

    public function deleteProduk()
    {
        $id_produk = $this->request->getPost('id_produk');

        if (session()->getTempData("is_login")) {
            $nilai = $this->produkModel->delete($id_produk);
        } else $nilai = 0;

        if ($nilai == 1) {
            session()->setFlashData("data", "Data berhasil dihapus");
        } else {
            session()->setFlashData("data", "Data gagal dihapus");
        }

        return session()->getTempData("is_login") ? redirect()->to(base_url() . "/produk") : redirect()->to(base_url());
    }
}