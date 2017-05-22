<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    //
     protected $table='pelanggan';
     //protected $fillable=['nama','Alamat','hp','pengguna_id'];
    protected $guarded=['id'];

    public function pengguna(){
    	return $this->belongsTo(pengguna::class);
    }

    public function membeli(){
		return $this->hasMany(membeli::class,'pelanggan_id');
	}


}
