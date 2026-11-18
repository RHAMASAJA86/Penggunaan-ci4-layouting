<?php

namespace App\Controllers;

class Home extends BaseController
{
    //     public function index(): string
//     {
//         // return view('welcome_message');
//         return view('home', [
//             'nama' => 'Andi',
//             'nim' => '23001'
//         ]);

    //     }

    //     public function mahasiswa(): string
//     {
//         echo "ini adalah halaman mahasiswa";
//         return "";
//     }
//     public function dosen(): string
//     {
//         echo "ini adalah halaman dosen";
//         return "";
//     }
//     public function mata_kuliah(): string
//     {
//         echo "ini adalah halaman mata kuliah";
//         return "";
//     }
//     public function tentang(): string
//     {
//         echo "ini adalah halaman tentang";
//         return "";
//     }
// }


    public function index(): string
    {
        return view('home');

    }

        public function mahasiswa()
    {
        return view('mahasiswa/index');
    }

    public function dosen()
    {
        return view('dosen/index');
    }

    public function matakuliah()
    {
        return view('matakuliah/index');
    }

    public function tentang()
    {
        return view('tentang');
    }

}
#
#
#
#
#(index.php)
#   |
#base_url/controller/metod
