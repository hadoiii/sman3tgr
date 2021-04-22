<?php

namespace App\Controllers;
use App\Models\Siswa;

class SiswaController extends BaseController
{
    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new Siswa();
        
    }
	public function index()
	{
        $siswa = $this->siswaModel->findAll();
        
        $data = [
            'title' => 'Data Siswa',
            'siswa' => $siswa
        ];
        return view('siswa/index', $data);
	}
}