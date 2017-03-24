<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matakuliah;

class MatakuliahController extends Controller
{
    public function awal ()
    {
        // return "Hello dari PenggunaController";
      return view('matakuliah.awal',['data'=>matakuliah::all()]);
    }
    public function tambah()
   {
       // return $this->simpan();
      return view('matakuliah.tambah');
   }
   public function simpan(Request $input)
   {
    $matakuliah = new matakuliah();
    $matakuliah->title = $input->title;
    $matakuliah->keterangan = $input->keterangan;
    $informasi = $matakuliah->save()? 'Berhasil simpan data': 'Gagal Simpan Data';
      return redirect ('matakuliah') ->with (['informasi'=>$informasi]);
   }
   public function edit($id)
   {
    $matakuliah = Matakuliah::find($id);
    return view('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));
   }
   public function lihat($id)
   {
    $matakuliah = Matakuliah::find($id);
    return view('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
    }
   public function update(Request $input, $id)
   {
    $matakuliah = matakuliah::find($id);
    $matakuliah->title = $input->title;
    $matakuliah->keterangan = $input->keterangan;
    $informasi = $matakuliah->save()? 'Berhasil update data': 'Gagal update Data';
      return redirect ('matakuliah') ->with(['informasi'=>$informasi]);
   }
   public function hapus($id)
   {
    $matakuliah = Matakuliah::find($id);
    $informasi = $matakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus Data';
      return redirect ('matakuliah') ->with (['informasi'=>$informasi]);
  }
    
}
