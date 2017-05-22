<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    
     protected $table ='petugas';
     //protected $fillable =['nama','pengguna_id'];
    protected $guarded=['id'];

    public function pengguna(){
    	return $this->belongsTo(pengguna::class);
    }

    
}
