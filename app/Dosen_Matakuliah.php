<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

    public function dosen(){
    	return $this->belongsto(Dosen::class);
    }
    public function jadwal_matakuliah(){
    	return $this->hasMany(jadwal_matakuliah::class);
    }

    public function matakuliah(){
    	return $this->belongsto(matakuliah::class);
    }
    public function listDosenDanMatakuliah()
    {
        $out =[];
        foreach ($this->all() as $dsnMtk) {
        $out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} (matakuliah {$dsnMtk->matakuliah->title})";

        }
        return $out;
    }
    public function getNamadosenAttribute(){
        return $this->dosen->nama;
    }
    public function getNimdosenAttribute(){
        return $this->dosen->nim();
    }
    public function getTitleMatakuliahAtribute(){
        return $this->matakuliah->title;
    }
}
