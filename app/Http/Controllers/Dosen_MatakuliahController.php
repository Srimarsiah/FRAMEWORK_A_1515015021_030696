<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Dosen_Matakuliah;
use App\Dosen;
use App\Matakuliah;
use App\Jadwal_Matakuliah;

class dosen_matakuliahcontroller extends Controller
{
     public function awal(){
       $semuadosenmatakuliah = dosen_matakuliah::all();
       return view('dosenmatakuliah.awal', compact('semuadosenmatakuliah'));

    //return "Hello dari dosen_matakuliahcontroller";
    }
    public function tambah()
    {      
        $dosen = new Dosen;
        $matakuliah = new matakuliah;
        return view('dosenmatakuliah.tambah',compact('dosen','matakuliah'));
       
    }


    public function simpan(Request $input){
        $dosen_matakuliah = new dosen_matakuliah($input->only('dosen_id','matakuliah_id'));
        if($dosen_matakuliah->save()) $this->informasi = "Matakuliah dan Dosen Mengajar berhasil disimpan";
        return redirect('dosenmatakuliah')->with(['informasi'=>$this->informasi]);
        //$dosen_matakuliah= new dosen_matakuliah();
        //$dosen_matakuliah->dosen_id  = '1';
        //$dosen_matakuliah->matakuliah_id  = '1';
        //$dosen_matakuliah->save();
    //return "data dengan id dosen {$dosen_matakuliah->dosen_id} yang mengajar matakuliah dengan id {$dosen_matakuliah->id} telah disimpan";
    }

    public function lihat($id){
        $dosen_matakuliah = dosen_matakuliah::find($id);
        return view('dosenmatakuliah.lihat', compact('dosen_matakuliah'));
    }

    public function edit($id){
        $dosen_matakuliah = dosen_matakuliah::find($id);
        $dosen = new dosen;
        $matakuliah = new matakuliah;
        return view('dosenmatakuliah.edit',compact('dosen','matakuliah','dosen_matakuliah'));
    }

    public function update($id,Request $input)
    {
        $dosen_matakuliah = dosen_matakuliah::find($id);
        $dosen_matakuliah->fill($input->only('dosen_id','matakuliah_id'));
        if($dosen_matakuliah->save()) $this->informasi = "Matakuliah dan Dosen Mengajar berhasil diperbarui";
        return redirect('dosenmatakuliah')->with(['informasi'=>$this->informasi]);
    }

    public function hapus($id)
    {
        $dosen_matakuliah = dosen_matakuliah::find($id);
        if($dosen_matakuliah->delete()) $this->informasi = "Matakuliah dan Mahasiswa berhasil dihapus";
        return redirect('dosenmatakuliah')->with(['informasi'=>$this->informasi]);
    }
}
