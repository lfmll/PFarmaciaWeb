<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViaAdministracion;

class ViaAdministracionController extends Controller
{
    public function index() 
    {
    	$viaadministracion=ViaAdministracion::all();
    	return view("viaadministracion.index",["viaadministracion"=>$viaadministracion]);
    }
}
