<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\hasil_taniRequest;
use App\hasil_tani;
use App\lahan;
use App\distributor;

class hasil_taniController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuahasil_tani = hasil_tani::all();
        return view('hasil_tani.awal', compact('semuahasil_tani'));
    }

    public function tambah(){
        $lahan = new lahan;
        $distributor = new distributor;
        return view('hasil_tani.tambah', compact('lahan','distributor'));
    }

    public function simpan(hasil_taniRequest $input){
        $hasil_tani = new hasil_tani;
        $hasil_tani->nama = $input->nama;
        $hasil_tani->jenis = $input->jenis;
        $hasil_tani->harga = $input->harga;
        $hasil_tani->lahan_id = $input->lahan_id;
        $hasil_tani->distributor_id = $input->distributor_id;
        if($hasil_tani->save()) $this->informasi = "Data Hasil Tani Berhasil Disimpan";
        return redirect('hasil_tani')->with(['informasi'=> $this->informasi]);
    }

    public function edit($id){
        $hasil_tani = hasil_tani::find($id);
        $lahan = new lahan;
        $distributor = new distributor;
        return view ('hasil_tani.edit', compact('lahan','distributor','hasil_tani'));
    }

    public function lihat($id){
        $hasil_tani = hasil_tani::find($id);
        return view('hasil_tani.lihat')->with(array('hasil_tani'=>$hasil_tani));
    }

    public function update ($id, hasil_taniRequest $input){
        $hasil_tani = hasil_tani::find($id);
        $hasil_tani->nama = $input->nama;
        $hasil_tani->jenis = $input->jenis;
        $hasil_tani->harga = $input->harga;
        $hasil_tani->lahan_id = $input->lahan_id;
        $hasil_tani->distributor_id = $input->distributor_id;
        $informasi = $hasil_tani->save() ? 'Berhasil Simpan Data' : 'Gagal Update Data';
        return redirect('hasil_tani')->with(['informasi'=>$informasi]);
    }

    public function hapus($id){
        $hasil_tani = hasil_tani::find($id);
        if($hasil_tani->delete()) $this->informasi = "Data Hasil Tani Berhasil Dihapus";
        return redirect('hasil_tani')->with(['informasi'=>$this->informasi]);
    }
}