<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\membeliRequest;
use App\membeli;
use App\pelanggan;
use App\hasil_tani;

class membeliController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuamembeli = membeli::all();
        return view('membeli.awal', compact('semuamembeli'));
    }

    public function tambah(){
        $pelanggan = new pelanggan;
        $hasil_tani = new hasil_tani;
        return view('membeli.tambah', compact('pelanggan','hasil_tani'));
    }

    public function simpan(membeliRequest $input){
        $membeli = new membeli;
        $membeli->pelanggan_id = $input->pelanggan_id;
        $membeli->hasil_tani_id = $input->hasil_tani_id;
        $membeli->jumlah = $input->jumlah;
        $membeli->total_harga =  $input->total_harga;
        if($membeli->save()) $this->informasi = "Data Transaksi Berhasil Disimpan";
        return redirect('membeli')->with(['informasi'=> $this->informasi]);
    }   

    public function edit($id){
        $membeli = membeli::find($id);
        $pelanggan = new pelanggan;
        $hasil_tani = new hasil_tani;
        return view ('membeli.edit', compact('pelanggan', 'hasil_tani', 'membeli'));
    }

    public function lihat($id){
        $membeli = membeli::find($id);
        return view('membeli.lihat')->with(array('membeli'=>$membeli));
    }

    public function update ($id, membeliRequest $input){
        $membeli = membeli::find($id);
        $membeli->hasil_tani_id = $input->hasil_tani_id;
        $membeli->pelanggan_id = $input->pelanggan_id;
        $membeli->jumlah = $input->jumlah;
        $membeli->total_harga = $input->total_harga;
        $informasi = $membeli->save() ? 'Berhasil Simpan Data' : 'Gagal Update Data';
        return redirect('membeli')->with(['informasi'=>$informasi]);
    }

    public function hapus($id){
        $membeli = membeli::find($id);
        if($membeli->delete()) $this->informasi = "Data Transaksi Berhasil Dihapus";
        return redirect('membeli')->with(['informasi'=>$this->informasi]);
    }
}