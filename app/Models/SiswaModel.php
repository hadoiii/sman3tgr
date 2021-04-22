<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{

    protected $table = 'siswa';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama_depan',
        'nama_belakang',
        'jenis_kelamin',
        'agama',
        'alamat'
    ];

}