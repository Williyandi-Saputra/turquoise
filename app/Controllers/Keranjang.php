<?php

namespace App\Controllers;

class Keranjang extends BaseController
{
    public function AddProdukToKeranjang()
    {
        $keranjang = $this->keranjangModel->save([
            "produk" => $this->request->getPost('id_produk')
        ]);

        echo $this->request->getPost('id_produk');

        if ($keranjang == 1) {
            echo " Berhasil menambahkan produk ke keranjang";
            $check = true;
            session()->settempData("role", true);
        } else {
            echo "gagal menambahkan";
        }

        return $check ? redirect()->to(base_url() . "/") : redirect()->to(base_url() . "/tentang");
    }
}
