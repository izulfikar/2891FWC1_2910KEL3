<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\petaniRequest;
use App\petani;

class petaniController extends Controller
{
    public function awal(){
        return view('petani.awal', ['data'=>petani::all()]);
    }
public function tambah(){
    return view('petani.tambah');
    }

public function simpan(petaniRequest $input){
    $petani = new petani;
    $petani->nama = $input->nama;
    $petani->alamat = $input->alamat;
    $petani->hp = $input->hp;
    $informasi = $petani->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect('petani')->with(['informasi'=>$informasi]);
    }

public function edit($id){
    $petani = petani::find($id);
    return view('petani.edit')->with(array('petani'=>$petani));
    }

public function lihat($id){
    $petani = petani::find($id);
    return view('petani.lihat')->with(array('petani'=>$petani));
}

public function update($id, petaniRequest $input){
    $petani = petani::find($id);
    $petani->nama = $input->nama;
    $petani->alamat = $input->alamat;
    $petani->hp = $input->hp;
    $informasi = $petani->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('petani')->with(['informasi'=>$informasi]);
}

public function hapus($id){
    $petani = petani::find($id);
    $informasi = $petani->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('petani')->with(['informasi'=>$informasi]);
}

}
