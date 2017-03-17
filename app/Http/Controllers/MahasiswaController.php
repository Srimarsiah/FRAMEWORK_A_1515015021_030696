<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
     public function awal(){
    	return "heelloo dari mahasiswaController";	
    }
    

      public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama='bebet';
    	$mahasiswa->nim = '1515015000';
    	$mahasiswa->alamat='Jl.pramuka';
    	$mahasiswa->pengguna_id='2';
    	$mahasiswa->save();
    	return "data dengan mahasiswa {$mahasiswa->title} telah disimpan";
	}
}
