<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenController extends Controller
{
    public function awal()
    {
    	return "Hello dari dosenController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->nama = 'Jon Doe';
    	$dosen->nip = '21332412';
    	$dosen->alamat = 'jl.layang-layang'; 
    	$dosen->pengguna_id = '1'; 
    	$dosen->save();
    	return "Data dosen dengan nama {$dosen->nama} telah disimpan";
    }

}
