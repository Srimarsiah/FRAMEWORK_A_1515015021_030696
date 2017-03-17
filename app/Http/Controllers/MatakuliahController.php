<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
{
      public function awal(){
    	return "ini Matakuliah yang paling buat gila";	
    }
    

      public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$Matakuliah = new Matakuliah();
    	$Matakuliah->title='pemrograman Fremework';
    	$Matakuliah->keterangan='ini bikin gila';
    	$Matakuliah->save();
    	return "data dengan username {$Matakuliah->title} telah disimpan";
	}
}
