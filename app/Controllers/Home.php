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
