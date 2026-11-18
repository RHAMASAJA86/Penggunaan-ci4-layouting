<?php

namespace App\Controllers;

use App\Models\DosenModel;
use App\Models\MahasiswaModel;
use App\Models\MataKuliahModel;

class MataKuliah extends BaseController
{
    public function index()
    {
        $model = new MataKuliahModel();

        $data = [
            'matakuliah' => $model->getAll()
        ];

        return view('matakuliah/index', $data);
    }
}