<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matakuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];


public function mahasiswa(){
	return $this->belongsTo(mahasiswa::class);
}

public function dosen_matakuliah(){
	return $this->belongsTo(dosen_matakuliah::class);
}

public function ruangan(){
	return $this->belongsTo(Ruangan::class);
}
}
