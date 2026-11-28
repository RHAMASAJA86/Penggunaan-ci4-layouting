<?php

namespace App\Controllers;

use App\Models\DosenModel;
use App\Models\MahasiswaModel;

class Dosen extends BaseController
{
    protected DosenModel $dosenModel;

    public function __construct()
    {
        $this->dosenModel = new DosenModel();
    }

    public function index()
    {
        return view('dosen/index', [
            'title' => 'Data Dosen',
            'dosen' => $this->dosenModel->findAll(),
        ]);
    }

    public function create()
    {
        helper('form');

        return view('dosen/create', ['title' => 'Tambah Dosen']);
    }

    public function store()
    {
        $data = $this->formData();

        if (! $this->validateData($data, $this->validationRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        if ($this->dosenModel->find($data['nidn']) !== null) {
            return redirect()->back()->withInput()->with('error', 'NIDN sudah terdaftar.');
        }

        $this->dosenModel->insert($data);

        return redirect()->to('/dosen')->with('success', 'Data dosen berhasil ditambahkan.');
    }

    public function edit(string $nidn)
    {
        helper('form');
        $dosen = $this->dosenModel->find($nidn);

        if ($dosen === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data dosen tidak ditemukan.');
        }

        return view('dosen/edit', ['title' => 'Edit Dosen', 'dsn' => $dosen]);
    }

    public function update(string $nidn)
    {
        if ($this->dosenModel->find($nidn) === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data dosen tidak ditemukan.');
        }

        $data = $this->formData();

        if (! $this->validateData($data, $this->validationRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $existing = $this->dosenModel->find($data['nidn']);
        if ($existing !== null && $data['nidn'] !== $nidn) {
            return redirect()->back()->withInput()->with('error', 'NIDN sudah digunakan dosen lain.');
        }

        $this->dosenModel->update($nidn, $data);

        return redirect()->to('/dosen')->with('success', 'Data dosen berhasil diperbarui.');
    }

    public function delete(string $nidn)
    {
        if ($this->dosenModel->find($nidn) === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data dosen tidak ditemukan.');
        }

        $this->dosenModel->delete($nidn);

        return redirect()->to('/dosen')->with('success', 'Data dosen berhasil dihapus.');
    }

    private function formData(): array
    {
        return [
            'nidn' => trim((string) $this->request->getPost('nidn')),
            'nama' => trim((string) $this->request->getPost('nama')),
            'prodi' => trim((string) $this->request->getPost('prodi')),
        ];
    }

    private function validationRules(): array
    {
        return [
            'nidn' => 'required|is_natural|max_length[20]',
            'nama' => 'required|max_length[100]',
            'prodi' => 'required|max_length[100]',
        ];
    }
}