<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class distributor extends Model
{
    protected $table = 'distributor';
    protected $fillable=['nama','alamat','hp','no_rek'];

    public function hasil_tani(){
    	return $this->hasOne(hasil_tani::class,'hasil_tani_id');
}
}