<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $komentar = [
            'komentar' => $this->komentarModel->findAll()
        ];

        return view('halaman_welcome', $komentar);
    }

    public function Home()
    {
        $komentar = [
            'komentar' => $this->komentarModel->findAll()
        ];

        return view('halaman_welcome', $komentar);
    }

    public function About()
    {
        return view('about');
    }

    public function Menu()
    {
        $menu = [
            'menu' => $this->produkModel->findAll()
        ];

        return view('menu', $menu);
    }

    public function Contact()
    {
        return view('contact');
    }

    public function Register()
    {
        return view('register');
    }

    public function Komentar()
    {
        $komentar = [
            'komentar' => $this->komentarModel->findAll()
        ];

        return session()->getTempData('is_login') ? view('komentar', $komentar) : redirect()->to(base_url() . "/login");
    }

    public function read_more()
    {
        return view('read-more');
    }

    public function Loginn()
    {
        return view('login');
    }

    public function Hii()
    {
        return view('hii');
    }

    public function contoh_komentar()
    {
        return view('contoh-komentar');
    }

    public function Keranjang()
    {
        return view('keranjang');
    }

    public function birtday()
    {
        return view('diskon_birthday');
    }

    public function jumat_berkah()
    {
        return view('jumat_berkah');
    }

    public function tambah_user()
    {
        return view('tambah_user_dari_admin');
    }

    public function Dashboard()
    {
        $checkSession = session()->getTempData('is_login');
        $checkRole = (strcmp(session()->getTempData('role'), 'admin') == 0);

        $check = ($checkRole && $checkSession);

        return $check ? view('dashboard') : redirect()->to(base_url());
    }

    public function EditUser()
    {
        return view('edit-user');
    }

    public function Table()
    {
        $data = [
            'user' => $this->userModel->findAll()
        ];

        return view('tables_user', $data);
    }

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

        return $check ? redirect()->to(base_url() . "/login") : redirect()->to(base_url() . "/register");
    }
}