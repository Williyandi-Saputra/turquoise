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
