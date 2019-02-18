<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
	protected $fillable=["nombre"];
    public function medicamentos(){
    	return $this->hasMany(Medicamento::class);
    }
}
