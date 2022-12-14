<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function Login()
    {
        $data = $this->userModel->findAll();
        $check = false;

        $username = $this->request->getPost('InputUsername');
        $password = $this->request->getPost('InputPassword');

        foreach ($data as $f) {
            if (strcmp($f['username'], $username) == 0 && strcmp($f['password'], $password) == 0) {
                $check = true;
                $time = 60 * 99999;
                session()->setTempData("is_login", true, $time);
                session()->setTempData("role", $f['type'], $time);
            }
        }

        return $check ? redirect()->to(base_url() . "/home") : redirect()->to(base_url() . "/login");
    }

    public function logout()
    {
        session()->setTempData("is_login", false);
        session()->setTempData("role", "");

        return redirect()->to(base_url() . "/");
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

        return session()->getTempData("is_login") ? redirect()->to(base_url() . "/tables") : redirect()->to(base_url());
    }

    public function directUpdateUser()
    {
        $data = [
            'id' => $this->request->getPost('id'),
            'username' => $this->request->getPost('username'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'alamat' => $this->request->getPost('alamat'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'type' => $this->request->getPost('type')
        ];

        return view('edit-user', $data);
    }

    public function updateUser()
    {

        $nilai = $this->userModel->save([
            "id" => $this->request->getPost('id'),
            "username" => $this->request->getPost('username'),
            "nama" => $this->request->getPost('nama'),
            "email" => $this->request->getPost('email'),
            "password" => $this->request->getPost('password'),
            "alamat" => $this->request->getPost('alamat'),
            "jenis_kelamin" => $this->request->getPost('jenis_kelamin'),
            "type" => $this->request->getPost('type'),
        ]);

        return redirect()->to(base_url() . "/tables");
    }
    }
}
