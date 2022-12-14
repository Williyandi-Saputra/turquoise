<?php

namespace App\Controllers;

class Komentar extends BaseController
{

    public function inputKomentar()
    {

        //  echo $this->request->getPost('jenis_kelamin');
        $nilai = $this->komentarModel->save([
            "username" => $this->request->getPost('username'),
            "deskripsi" => $this->request->getPost('deskripsi'),
        ]);

        if ($nilai == 1) {
            echo "Berhasil Disimpan";
            $check = true;
            $time = 60 * 9999;
            session()->setTempData("komentar", true, $time);
        } else {
            echo "Gagal Disimpan";
        }

        return $check ? redirect()->to(base_url() . "/home") : redirect()->to(base_url() . "/keranjang");
    }

    // public function Produk()
    // {
    //     return view ('tambah_produk');
    // }

    // public function table_produk ()
    // {
    //     $data = [
    //         'produk' => $this->produkModel->findAll()
    //     ];

    //     return view ('tables_produk', $data);
    // }

    // public function deleteUser() 
    // {
    //     $id_produk = $this->request->getPost('id_produk');

    //     if (session()->getTempData("is_login")){
    //         $nilai = $this->produkModel->delete($id_produk);
    //     } else $nilai = 0;

    //     if($nilai == 1){
    //         session()->setFlashData("data", "Data berhasil dihapus");
    //     } else {
    //         session()->setFlashData("data", "Data gagal dihapus");
    //     }

    //     return session()->getTempData("is_login") ? redirect()->to(base_url() . "/table_produk") : redirect()->to(base_url());
    // }
}