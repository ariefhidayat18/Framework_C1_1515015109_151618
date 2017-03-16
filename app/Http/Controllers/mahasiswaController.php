<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswaController extends Controller
{
    public function awal()
    {
    	return "Hello dari mahasiswaController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'Arief';
    	$mahasiswa->nim = '1515015109';
    	$mahasiswa->alamat = 'Jl. M.Said Gg.6'; 
    	$mahasiswa->pengguna_id = '2'; 
    	$mahasiswa->save();
    	return "Data mahasiswa dengan nama {$mahasiswa->nama} telah disimpan";
    }

}
