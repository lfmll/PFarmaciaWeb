<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable=["laboratorio_id","presentacion_id","viaadministracion_id"];

    public function laboratorio(){
    	return $this->belongsTo(Laboratorio::class);
    }

    public function presentacion(){
    	return $this->belongsTo(Presentacion::class);
    }

    public function viaadministracion(){
    	return $this->belongsTo(ViaAdministracion::class);
    }
}
