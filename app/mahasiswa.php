<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];

    public function Pengguna()
    {
    	return $this->belongsto(Pengguna::class);
    }

    public function jadwal_matakuliah(){
    	return $this->hasMany(jadwal_matakuliah::class);
    }
    public function getUsernameAttribute(){
    	return $this->pengguna->Username;
    }
    public function listMahasiswaDannim()
    {
        $out = [];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }
}
