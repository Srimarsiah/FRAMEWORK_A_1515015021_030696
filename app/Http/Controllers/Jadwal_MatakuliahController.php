<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\jadwal_matakuliah;
use App\mahasiswa;
use App\dosen_matakuliah;
use App\ruangan;
use Input;
use Redirect;
use informasi;

class jadwal_matakuliahcontroller extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi'; 

      
    public function awal(){
        $semuaJadwalMatakuliah = Jadwal_Matakuliah::all();
        return view('jadwalmatakuliah.awal', compact('semuaJadwalMatakuliah'));
    // return "Hello dari jadwal_matakuliahcontroller";
         }   
     public function tambah(){
        $mahasiswa = new mahasiswa;
        $ruangan = new ruangan;
        $dosen_matakuliah = new dosen_matakuliah;
        return view('jadwalmatakuliah.tambah', compact('mahasiswa', 'ruangan', 'dosen_matakuliah'));
         // return $this->simpan();
}

    public function simpan(Request $input){
        $jadwal_matakuliah = new Jadwal_Matakuliah($input->only('ruangan_id', 'dosen_matakuliah_id', 'mahasiswa_id'));
        if ($jadwal_matakuliah->save()) $this->infJadwal_Matakuliahormasi = "Jadwal Mahasiswa Berhasil Disimpan";
        return redirect('jadwal_matakuliah')->with(['informasi' => $this->informasi]);
    //$jadwal_matakuliah->mahasiswa_id  = '1';
    //$jadwal_matakuliah->ruangan_id  = '1';
    //$jadwal_matakuliah->dosen_matakuliah_id  = '1';
    //$jadwal_matakuliah->save();
    //return "data dengan id mahasiswa {$jadwal_matakuliah->mahasiswa_id} dengan id ruangan {$jadwal_matakuliah->ruangan_id} dan dengan id dosen matakuliah {$jadwal_matakuliah->dosen_matakuliah_id} telah disimpan";
}

    public function edit ($id){
        $jadwalmatakuliah = Jadwal_Matakuliah::find($id);
        $mahasiswa = new mahasiswa;
        $ruangan = new ruangan;
        $dosen_matakuliah = new dosen_matakuliah; 
        return view('jadwalmatakuliah.edit', compact('mahasiswa','ruangan','dosen_matakuliah','jadwalmatakuliah'));
}

    public function lihat($id){
        $jadwal_matakuliah = Jadwal_Matakuliah::find($id); 
        return view('jadwalmatakuliah.lihat', compact('jadwal_matakuliah'));
}

    public function update ($id, Request $input){ 
        $jadwal_matakuliah = Jadwal_Matakuliah::find ($id);
        $jadwal_matakuliah->ruangan_id = $input->ruangan_id;
        $jadwal_matakuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
        $jadwal_matakuliah->mahasiswa_id = $input->mahasiswa_id;
        $informasi = $jadwal_matakuliah->save() ? 'Berhasil Update data': 'Gagal Update Data';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
}

    public function hapus($id){
        $jadwal_matakuliah = Jadwal_Matakuliah::find ($id);
        $informasi = $jadwal_matakuliah->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data' ;
        return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
    }
}