<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
	protected $fillable=["nombre"];
	
    public function medicamento(){
    	return $this->hasMany(Medicamento::class);
    }
}
