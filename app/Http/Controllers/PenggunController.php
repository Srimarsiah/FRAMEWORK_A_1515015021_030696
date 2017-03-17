<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna;

class Penggunacontroller extends Controller
{
    public function awal()
    {
    	return "Hello dari penggunacontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$pengguna = new Pengguna();
    	$pengguna-> username = 'srimarsiah';
    	$pengguna-> password ='12345';
    	$pengguna->save();
    	return "data dengan username {$pengguna->username} telah disimpan";

    }
}
