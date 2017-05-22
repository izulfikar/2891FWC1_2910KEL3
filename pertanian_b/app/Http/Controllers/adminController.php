<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\adminRequest;
use App\admin;
use App\pengguna;

class adminController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuaadmin = admin::all();
        return view('admin.awal', compact('semuaadmin'));
    }

    public function tambah(){
        $pengguna = new pengguna;
        return view('admin.tambah', compact('pengguna'));
    }

    public function simpan(adminRequest $input){
        $admin = new admin;
        $admin->nama = $input->nama;
        $admin->pengguna_id = $input->pengguna_id;
        if($admin->save()) $this->informasi = "Data Admin Berhasil Disimpan";
        return redirect('admin')->with(['informasi'=> $this->informasi]);
    }

    public function edit($id){
        $admin = admin::find($id);
        $pengguna = new pengguna;
        return view ('admin.edit', compact('pengguna', 'admin'));
    }

    public function lihat($id){
        $admin = admin::find($id);
        return view('admin.lihat')->with(array('admin'=>$admin));
    }

    public function update ($id, adminRequest $input){
        $admin = admin::find($id);
        $admin->nama = $input->nama;
        $admin->pengguna_id = $input->pengguna_id;
        $informasi = $admin->save() ? 'Berhasil Simpan Data' : 'Gagal Update Data';
        return redirect('admin')->with(['informasi'=>$informasi]);
    }

    public function hapus($id){
        $admin = admin::find($id);
        if($admin->delete()) $this->informasi = "Data Admin Berhasil Dihapus";
        return redirect('admin')->with(['informasi'=>$this->informasi]);
    }
}