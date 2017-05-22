<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class pengguna extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
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
