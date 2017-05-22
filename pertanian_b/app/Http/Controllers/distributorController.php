<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\distributorRequest;
use App\distributor;

class distributorController extends Controller
{
    public function awal(){
        return view('distributor.awal', ['data'=>distributor::all()]);
    }
public function tambah(){
    return view('distributor.tambah');
    }
public function simpan(distributorRequest $input){
    $distributor = new distributor;
    $distributor->nama = $input->nama;
    $distributor->alamat = $input->alamat;
    $distributor->hp = $input->hp;
    $distributor->no_rek = $input->no_rek;
    $informasi = $distributor->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect('distributor')->with(['informasi'=>$informasi]);
    }
public function edit($id){
    $distributor = distributor::find($id);
    return view('distributor.edit')->with(array('distributor'=>$distributor));
    }
public function lihat($id){
    $distributor = distributor::find($id);
    return view('distributor.lihat')->with(array('distributor'=>$distributor));
}
public function update($id, distributorRequest $input){
    $distributor = distributor::find($id);
    $distributor->nama = $input->nama;
    $distributor->alamat = $input->alamat;
    $distributor->hp = $input->hp;
    $distributor->no_rek = $input->no_rek;
    $informasi = $distributor->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('distributor')->with(['informasi'=>$informasi]);
}
public function hapus($id){
    $distributor = distributor::find($id);
    $informasi = $distributor->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('distributor')->with(['informasi'=>$informasi]);
}

}
