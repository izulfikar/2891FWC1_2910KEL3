<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\lahanRequest;
use App\lahan;
use App\petani;

class lahanController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semualahan = lahan::all();
        return view('lahan.awal', compact('semualahan'));
    }

    public function tambah(){
        $petani = new petani;
        return view('lahan.tambah', compact('petani'));
    }

    public function simpan(lahanRequest $input){
        $lahan = new lahan;
        $lahan->nama = $input->nama;
        $lahan->alamat = $input->alamat;
        $lahan->status = $input->status;
        $lahan->petani_id = $input->petani_id;
        if($lahan->save()) $this->informasi = "Data Lahan Berhasil Disimpan";
        return redirect('lahan')->with(['informasi'=> $this->informasi]);
    }

    public function edit($id){
        $lahan = lahan::find($id);
        $petani = new petani;
        return view ('lahan.edit', compact('petani', 'lahan'));
    }

    public function lihat($id){
        $lahan = lahan::find($id);
        return view('lahan.lihat')->with(array('lahan'=>$lahan));
    }

    public function update ($id, lahanRequest $input){
        $lahan = lahan::find($id);
        $lahan->nama = $input->nama;
        $lahan->alamat = $input->alamat;
        $lahan->status = $input->status;
        $lahan->petani_id = $input->petani_id;
        $informasi = $lahan->save() ? 'Berhasil Simpan Data' : 'Gagal Update Data';
        return redirect('lahan')->with(['informasi'=>$informasi]);
    }

    public function hapus($id){
        $lahan = lahan::find($id);
        if($lahan->delete()) $this->informasi = "Data Lahan Berhasil Dihapus";
        return redirect('lahan')->with(['informasi'=>$this->informasi]);
    }
}