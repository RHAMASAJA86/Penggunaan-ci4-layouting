<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected MahasiswaModel $mahasiswaModel;

    public function __construct() 
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    // READ: Menampilkan seluruh data
    public function index()
    {
        return view('mahasiswa/index', [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->findAll(),
        ]);
    }

    // Menampilkan formulir tambah
    public function create()
    {
        helper('form');

        return view('mahasiswa/create', ['title' => 'Tambah Mahasiswa']);
    }

    // CREATE: Menyimpan data baru
    public function store()
    {
        $data = $this->formData();

        if (! $this->validateData($data, $this->validationRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->mahasiswaModel->insert($data);

        return redirect()->to('/mahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    // Menampilkan formulir edit
    public function edit(int $id)
    {
        helper('form');

        $mahasiswa = $this->mahasiswaModel->find($id);

        if ($mahasiswa === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data mahasiswa tidak ditemukan.');
        }

        return view('mahasiswa/edit', [
            'title' => 'Edit Mahasiswa',
            'mhs' => $mahasiswa,
        ]);
    }

    // UPDATE: Memperbarui data
    public function update(int $id)
    {
        if ($this->mahasiswaModel->find($id) === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data mahasiswa tidak ditemukan.');
        }

        $data = $this->formData();

        if (! $this->validateData($data, $this->validationRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->mahasiswaModel->update($id, $data);

        return redirect()->to('/mahasiswa')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    // DELETE: Menghapus data
    public function delete(int $id)
    {
        if ($this->mahasiswaModel->find($id) === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data mahasiswa tidak ditemukan.');
        }

        $this->mahasiswaModel->delete($id);

        return redirect()->to('/mahasiswa')->with('success', 'Data mahasiswa berhasil dihapus.');
    }

    private function formData(): array
    {
        return [
            'nim' => trim((string) $this->request->getPost('nim')),
            'nama' => trim((string) $this->request->getPost('nama')),
            'prodi' => trim((string) $this->request->getPost('prodi')),
        ];
    }

    private function validationRules(): array
    {
        return [
            'nim' => 'required|max_length[20]',
            'nama' => 'required|max_length[100]',
            'prodi' => 'required|max_length[100]',
        ];
    }
}