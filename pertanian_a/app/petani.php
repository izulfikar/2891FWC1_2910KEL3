<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petani extends Model
{
    //
     protected $table ='petani';
    // protected $fillable = ['nama','alamat','hp'];
    protected $guarded =['id'];

    public function lahan(){
    	return $this->hasOne(lahan::class,'lahan_id');
    }
}
