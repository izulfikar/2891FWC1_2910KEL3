<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\pelangganmembeliRequest;
use App\membeli;
use App\pelanggan;
use App\hasil_tani;

class pelangganmembeliController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuamembeli = membeli::all();
        return view('pelangganmembeli.awal', compact('semuamembeli'));
    }

    public function tambah(){
        $pelanggan = new pelanggan;
        $hasil_tani = new hasil_tani;
        return view('pelangganmembeli.tambah', compact('pelanggan','hasil_tani'));
    }

    public function simpan(pelangganmembeliRequest $input){
        $membeli = new membeli;
        $membeli->pelanggan_id = $input->pelanggan_id;
        $membeli->hasil_tani_id = $input->hasil_tani_id;
        $membeli->jumlah = $input->jumlah;
        if($membeli->save()) $this->informasi = "Data Transaksi Berhasil Disimpan";
        return redirect('pelangganmembeli')->with(['informasi'=> $this->informasi]);
    }   

    public function lihat($id){
        $membeli = membeli::find($id);
        return view('pelangganmembeli.lihat')->with(array('membeli'=>$membeli));
    }

}