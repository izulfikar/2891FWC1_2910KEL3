<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class membeli extends Model
{
    protected $table ='membeli';
    protected $fillable =['pelanggan_id','hasil_tani_id'];

    public function pelanggan(){
    	return $this->belongsTo(pelanggan::class);	
    }

    public function hasil_tani(){
    	return $this->belongsTo(hasil_tani::class);	
    }

}
