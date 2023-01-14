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

    public function Komentar()
    {
        $komentar = [
            'komentar' => $this->komentarModel->findAll()
        ];

        return session()->getTempData('is_login') ? view('komentar', $komentar) : redirect()->to(base_url() . "/login");
    }

    public function Loginn()
    {
        return view('login');
    }

    public function Dashboard()
    {
        $checkSession = session()->getTempData('is_login');
        $checkRole = (strcmp(session()->getTempData('role'), 'admin') == 0);

        $check = ($checkRole && $checkSession);

        return $check ? view('dashboard/dashboard') : redirect()->to(base_url());
    }
}