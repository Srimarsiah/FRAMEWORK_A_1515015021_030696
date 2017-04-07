<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\dosen;
use App\pengguna;

class dosencontroller extends Controller
{
    public function awal(){
        $semuadosen = dosen::all();
        return view('dosen.awal',compact('semuadosen'));
    //return "hello dari dossencontroller";
 }

 public function tambah(){
        return view('dosen.tambah');
    //return $this->simpan();
 }

 public function simpan(Request $input){
    $pengguna = new pengguna($input->only('username','password'));
    if($pengguna->save()){
        $dosen = new dosen;
        $dosen->nama = $input->nama;
        $dosen->nip = $input->nip;
        $dosen->alamat = $input->alamat;
    //$dosen->pengguna_id = $input->pengguna_id;
    if($pengguna->dosen()->save($dosen)) 
        $this->informasi = 'Berhasil simpan data';
    }
    return redirect('dosen')->with(['informasi'=>$this->informasi]);
    /*$dosen = new dosen();
    $dosen->nip    = '1';
    $dosen->nama   = 'Dr.Marsen';
    $dosen->alamat = 'jakarta';
    $dosen->pengguna_id = '1';
    $dosen->save();
    return"data dengan username {$dosen->nama} telah disimpan";*/
 }

 public function edit($id)
    {
        $dosen = dosen::find($id);
        return view('dosen.edit')->with(array('dosen'=>$dosen));
    }

public function lihat($id)
    {
        $dosen = dosen::find($id);
        return view('dosen.lihat')->with(array('dosen'=>$dosen));
    }

public function update($id, Request $input)
    {
        $dosen = dosen::find($id);
        $pengguna = $dosen->pengguna;
        $dosen->nama = $input->nama;
        $dosen->nip = $input->nip;
        $dosen->alamat = $input->alamat;
        $dosen->save();
            $pengguna->fill($input->only('username'));
            if (!empty($input->password)){
                $pengguna->password = $input->password;
            }
            if ($pengguna->save()){
                $this->informasi = 'Berhasil simpan data';
            }
            else{
                $this->informasi = 'Gagal Simpan Data';
            }
        return redirect('dosen')->with(['informasi' => $this->informasi]);
    }

    public function hapus($id)
    {
        $dosen = dosen::find($id);
        if($dosen->pengguna()->delete()){
            if($dosen->delete()) 
                $this->informasi = 'Berhasil hapus data';
            return redirect('dosen')-> with(['informasi'=>$this->informasi]);
        }
    }
}