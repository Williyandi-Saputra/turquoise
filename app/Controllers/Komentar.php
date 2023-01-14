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

}