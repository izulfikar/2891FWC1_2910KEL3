<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hasil_tani extends Model
{
    protected $table ='hasil_tani';
    protected $fillable =['nama','jenis','harga','lahan_id','distributor_id'];

    public function distributor(){
    	return $this->belongsTo(distributor::class);	
    }

    public function lahan(){
    	return $this->belongsTo(lahan::class);	
    }


    public function membeli(){
    	return $this->hasOne(membeli::class,'membeli_id');
	}
}
