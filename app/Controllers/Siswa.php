<?php

namespace App\Controllers;
use App\Models\SiswaModel;

class Siswa extends BaseController
{
    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
        
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

    public function create()
	{
        return view('siswa/create');
	}

    public function save()
	{
       $this->siswaModel->save([
           'nama_depan' => $this->request->getVar('nama_depan'),
           'nama_belakang' => $this->request->getVar('nama_belakang'),
           'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
           'agama' => $this->request->getVar('agama'),
           'alamat' => $this->request->getVar('alamat')
       ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/siswa');
	}

    public function delete($id)
    {
        $this->siswaModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('/siswa');
    }

    public function edit($id)
    {
        $data = [
        'siswa' => $this->siswaModel->get($id)
        ];
        return view('siswa/edit', $data); 
    }
}