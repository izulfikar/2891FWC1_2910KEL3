<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lahan extends Model
{
    //
     protected $table ='lahan';
     //protected $fillable = ['nama','alamat','status','petani_id'];
    protected $guarded =['id'];

    public function petani(){
    	return $this->belongsTo(petani::class);
    }

    public function hasil_tani(){
    	return $this->hasOne(hasil_tani::class,'hasil_tani_id');
    }

}
