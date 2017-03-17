<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen_Matakuliah;

class Dosen_MatakuliahController extends Controller
{
    public function awal(){
    	return "heelloo dari dosen_matakuliahController";	
    }
    
      public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen_matakuliah = new Dosen_Matakuliah();
    	$dosen_matakuliah->dosen_id='1';
    	$dosen_matakuliah->matakuliah_id = '1';
    	$dosen_matakuliah->save();
    	return "data dengan dosen_matakuliah {$dosen_matakuliah->dosen_id} telah disimpan";
	}
}
