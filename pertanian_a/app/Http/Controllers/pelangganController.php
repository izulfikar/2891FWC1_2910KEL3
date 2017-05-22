<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\pelangganRequest;
use App\pelanggan;
use App\pengguna;

class pelangganController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuapelanggan = pelanggan::all();
        return view('pelanggan.awal', compact('semuapelanggan'));
    }

    public function tambah(){
        $pengguna = new pengguna;
        return view('pelanggan.tambah', compact('pengguna'));
    }

    public function simpan(pelangganRequest $input){
        $pelanggan = new pelanggan;
        $pelanggan->nama = $input->nama;
        $pelanggan->alamat = $input->alamat;
        $pelanggan->hp = $input->hp;
        $pelanggan->pengguna_id = $input->pengguna_id;
        if($pelanggan->save()) $this->informasi = "Data Pelanggan Berhasil Disimpan";
        return redirect('pelanggan')->with(['informasi'=> $this->informasi]);
    }

    public function edit($id){
        $pelanggan = pelanggan::find($id);
        $pengguna = new pengguna;
        return view ('pelanggan.edit', compact('pengguna', 'pelanggan'));
    }

    public function lihat($id){
        $pelanggan = pelanggan::find($id);
        return view('pelanggan.lihat')->with(array('pelanggan'=>$pelanggan));
    }

    public function update ($id, pelangganRequest $input){
        $pelanggan = pelanggan::find($id);
        $pelanggan->nama = $input->nama;
        $pelanggan->alamat = $input->alamat;
        $pelanggan->hp = $input->hp;
        $pelanggan->pengguna_id = $input->pengguna_id;  
        $informasi = $pelanggan->save() ? 'Berhasil Simpan Data' : 'Gagal Update Data';
        return redirect('pelanggan.lihat')->with(['informasi'=>$informasi]);
    }

    public function hapus($id){
        $pelanggan = pelanggan::find($id);
        if($pelanggan->delete()) $this->informasi = "Data Pelanggan Berhasil Dihapus";
        return redirect('pelanggan')->with(['informasi'=>$this->informasi]);
    }
}