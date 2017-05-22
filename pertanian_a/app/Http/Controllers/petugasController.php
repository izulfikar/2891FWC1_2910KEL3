<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\petugasRequest;
use App\petugas;
use App\pengguna;

class petugasController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuapetugas = petugas::all();
        return view('petugas.awal', compact('semuapetugas'));
    }

    public function tambah(){
        $pengguna = new pengguna;
        return view('petugas.tambah', compact('pengguna'));
    }

    public function simpan(petugasRequest $input){
        $petugas = new petugas;
        $petugas->nama = $input->nama;
        $petugas->pengguna_id = $input->pengguna_id;
        if($petugas->save()) $this->informasi = "Data petugas Berhasil Disimpan";
        return redirect('petugas')->with(['informasi'=> $this->informasi]);
    }

    public function edit($id){
        $petugas = petugas::find($id);
        $pengguna = new pengguna;
        return view ('petugas.edit', compact('pengguna', 'petugas'));
    }

    public function lihat($id){
        $petugas = petugas::find($id);
        return view('petugas.lihat')->with(array('petugas'=>$petugas));
    }

    public function update ($id, petugasRequest $input){
        $petugas = petugas::find($id);
        $petugas->nama = $input->nama;
        $petugas->pengguna_id = $input->pengguna_id;
        $informasi = $petugas->save() ? 'Berhasil Simpan Data' : 'Gagal Update Data';
        return redirect('petugas')->with(['informasi'=>$informasi]);
    }

    public function hapus($id){
        $petugas = petugas::find($id);
        if($petugas->delete()) $this->informasi = "Data petugas Berhasil Dihapus";
        return redirect('petugas')->with(['informasi'=>$this->informasi]);
    }
}