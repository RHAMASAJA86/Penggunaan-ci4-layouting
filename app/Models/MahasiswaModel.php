<?php

namespace App\Models;
use CodeIgniter\Model;
class MahasiswaModel extends Model {
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nim',
        'nama',
        'prodi'
    ];
    protected $returnType = 'array';
    protected $useTimestamps = false;

    // Method untuk mengambil semua data mahasiswa dari database
    public function getAll() {
        return $this->findAll();
    }

    // Method untuk mengambil satu data berdasarkan id
    public function getById($id) {
        return $this->find($id);
    }

    public function getDataMahasiswa() {
        return $this->db
            ->table('mahasiswa')
            ->get()
            ->getResultArray();
    }

    public function getByProdi($prodi) {
        return $this->db
            ->table('mahasiswa')
            ->where('prodi', $prodi)
            ->get()
            ->getResultArray();
    }

    public function getDataUrut() {
        return $this->db
            ->teble('mahasiswa')
            ->orderBy('nama','ASC')
            ->get()
            ->getResultArray();
    }
    
}
