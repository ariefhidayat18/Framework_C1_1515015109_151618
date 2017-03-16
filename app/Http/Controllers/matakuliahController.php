<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahController extends Controller
{
    public function awal()
    {
    	return "Hello dari matakuliahController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$matakuliah = new matakuliah();
    	$matakuliah->title = 'Pemrograman Framework';
    	$matakuliah->keterangan = 'Sks=2';
    	$matakuliah->save();
    	return "Data matakuliah dengan nama {$matakuliah->title} telah disimpan";
    }

}
