<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
	protected $table ='pengguna';
	//protected $fillbale = ['username','password','level'];
    protected $guarded=['id'];

    public function petugas(){
    	return $this->hasOne(petugas::class,'pengguna_id');
    }

    public function admin(){
    	return $this->hasOne(admin::class,'pengguna_id');
    }

    public function pelanggan(){
    	return $this->hasOne(pelanggan::class,'pengguna_id');
    }


}
