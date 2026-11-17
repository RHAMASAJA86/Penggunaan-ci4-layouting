<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function mahasiswa(): string
    {
        return view('mahasiswa/index');
    }

    public function dosen(): string
    {
        return view('dosen/index');
    }

    public function matakuliah(): string
    {
        return view('matakuliah/index');
    }

    public function tentang(): string
    {
        return view('tentang');
    }
}
