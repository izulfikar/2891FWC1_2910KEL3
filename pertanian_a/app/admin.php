<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //
     protected $table='admin';
     //protected $fillbale =['nama','pengguna_id'];
    protected $guarded=['id'];

    public function pengguna(){
    	return $this->belongsTo(pengguna::class);
    }
}
