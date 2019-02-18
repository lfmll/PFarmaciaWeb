<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViaAdministracion extends Model
{
    protected $table='viaadministracions';
    protected $fillable=["nombre"];
    public function medicamento(){
    	return $this->hasMany(Medicamento::class);
    }
}
