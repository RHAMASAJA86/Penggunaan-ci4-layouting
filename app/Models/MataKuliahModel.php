<?php

namespace App\Models;

use CodeIgniter\Model;

class MataKuliahModel extends Model
{
    protected $table = 'matakuliah';

    protected $primaryKey = 'kode';

    protected $allowedFields = [
        'kode',
        'nama',
        'sks'
    ];

    protected $returnType = 'array';

    protected $useTimestamps = false;

    public function getAll()
    {
        return $this->findAll();
    }
    public function getById($id)
    {
        return $this->find($id);
    }

    public function getDataMahasiswa()
    {
        return $this->db
            ->table('matakuliah')
            ->get()
            ->getResultArray();
    }
    public function getBySks($sks)
    {
        return $this->db
            ->table('matakuliah')
            ->where('sks', $sks)
            ->get()
            ->getResultArray();
    }
    public function getDataUrut()
    {
        return $this->db
            ->table('matakuliah')
            ->orderBy('nama', 'ASC')
            ->get()
            ->getResultArray();
    }

}