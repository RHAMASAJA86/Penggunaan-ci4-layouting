<?php

namespace App\Controllers;

use App\Models\DosenModel;
use App\Models\MahasiswaModel;
use App\Models\MataKuliahModel;

class MataKuliah extends BaseController
{
    protected MataKuliahModel $mataKuliahModel;

    public function __construct()
    {
        $this->mataKuliahModel = new MataKuliahModel();
    }

    public function index()
    {
        return view('matakuliah/index', [
            'title' => 'Data Mata Kuliah',
            'matakuliah' => $this->mataKuliahModel->findAll(),
        ]);
    }

    public function create()
    {
        helper('form');

        return view('matakuliah/create', ['title' => 'Tambah Mata Kuliah']);
    }

    public function store()
    {
        $data = $this->formData();

        if (! $this->validateData($data, $this->validationRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        if ($this->mataKuliahModel->find($data['kode']) !== null) {
            return redirect()->back()->withInput()->with('error', 'Kode mata kuliah sudah terdaftar.');
        }

        $this->mataKuliahModel->insert($data);

        return redirect()->to('/mata-kuliah')->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    public function edit(string $kode)
    {
        helper('form');
        $mataKuliah = $this->mataKuliahModel->find($kode);

        if ($mataKuliah === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data mata kuliah tidak ditemukan.');
        }

        return view('matakuliah/edit', ['title' => 'Edit Mata Kuliah', 'mk' => $mataKuliah]);
    }

    public function update(string $kode)
    {
        if ($this->mataKuliahModel->find($kode) === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data mata kuliah tidak ditemukan.');
        }

        $data = $this->formData();

        if (! $this->validateData($data, $this->validationRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $existing = $this->mataKuliahModel->find($data['kode']);
        if ($existing !== null && $data['kode'] !== $kode) {
            return redirect()->back()->withInput()->with('error', 'Kode mata kuliah sudah digunakan.');
        }

        $this->mataKuliahModel->update($kode, $data);

        return redirect()->to('/mata-kuliah')->with('success', 'Data mata kuliah berhasil diperbarui.');
    }

    public function delete(string $kode)
    {
        if ($this->mataKuliahModel->find($kode) === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data mata kuliah tidak ditemukan.');
        }

        $this->mataKuliahModel->delete($kode);

        return redirect()->to('/mata-kuliah')->with('success', 'Data mata kuliah berhasil dihapus.');
    }

    private function formData(): array
    {
        return [
            'kode' => strtoupper(trim((string) $this->request->getPost('kode'))),
            'nama' => trim((string) $this->request->getPost('nama')),
            'sks' => trim((string) $this->request->getPost('sks')),
        ];
    }

    private function validationRules(): array
    {
        return [
            'kode' => 'required|max_length[20]',
            'nama' => 'required|max_length[100]',
            'sks' => 'required|integer|greater_than[0]|less_than_equal_to[6]',
        ];
    }
}