<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen;

class DosenController extends Controller
{
     public function awal(){
    	return "heelloo dari mata kuliah framework";	
    }
    

      public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->nama='Sri Marsiah';
    	$dosen->nip = '1515015021';
    	$dosen->alamat='pramuka';
    	$dosen->pengguna_id='1';
    	$dosen->save();
    	return "data dengan dosen {$dosen->title} telah disimpan";
	}
}
