<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $guarded=['id'];

    public function dosen_matakuliah()
    {
    	return $this->hasMany(dosen_matakuliah::class,'matakuliah_id');
    }


}
