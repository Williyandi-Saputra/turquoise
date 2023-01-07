<?php

namespace App\Controllers;

class User extends BaseController
{

    public function addUser()
    {
        $nilai = $this->userModel->save([
            "username" => $this->request->getPost('username'),
            "nama" => $this->request->getPost('nama'),
            "email" => $this->request->getPost('email'),
            "password" => $this->request->getPost('password'),
            "alamat" => $this->request->getPost('alamat'),
            "jenis_kelamin" => $this->request->getPost('jenis_kelamin'),
            "type" => "user",
        ]);

        if ($nilai == 1) {
            echo "Berhasil Disimpan";
            $check = true;
            $time = 60 * 9999;
            session()->setTempData("is_login", true, $time);
        } else {
            echo "Gagal Disimpan";
        }

        return session()->getTempData("is_login") ? redirect()->to(base_url() . "/user") : redirect()->to(base_url());
    }

    public function getUser()
    {
        $data = [
            'user' => $this->userModel->findAll()
        ];

        return view('dashboard/user', $data);
    }

    public function deleteUser()
    {
        $id = $this->request->getPost('id');

        if (session()->getTempData("is_login")) {
            $nilai = $this->userModel->delete($id);
        } else $nilai = 0;

        if ($nilai == 1) {
            session()->setFlashData("data", "Data berhasil dihapus");
        } else {
            session()->setFlashData("data", "Data gagal dihapus");
        }

        return session()->getTempData("is_login") ? redirect()->to(base_url() . "/user") : redirect()->to(base_url());
    }
}