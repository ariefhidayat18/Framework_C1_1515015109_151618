<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

    public function dosen()
    {
    	return $this->belongsTo(dosen::class);
    }

    public function matakuliah()
    {
    	return $this->belongsTo(matakuliah::class);
    }

    public function jadwal_matakuliah()
    {
    	return $this->hasMany(jadwal_matakuliah::class,'jadwal_matakuliah');
    }

    public function listDosenDanMatakuliah()
    {
        $out = [];
        foreach ($this->all() as $dosenMtk) {
            # code...
            $out[$dosenMtk->id] = "{$dosenMtk->dosen->nama} ({$dosenMtk->matakuliah->title})";
        }
        return $out;
    }

}
