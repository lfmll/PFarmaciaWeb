<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ViasAdministracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('viaadministracions')->insert([
        		'nombre'=>'Oral',
        		'descripcion'=>'Administracion por la boca en presentacion de capsulas, comprimidos, suspension, efervescente, etc',
        	]);
        DB::table('viaadministracions')->insert([
        	'nombre'=>'Sublingual',
        	'descripcion'=>'Debajo de la lengua de rapida absorcion',
        	]);
        DB::table('viaadministracions')->insert([
        	'nombre'=>'Topica',
        	'descripcion'=>'De aplicacion directa y accion local, pertenecen: polvos, soluciones, cremas, lociones, geles, pomadas y uguentos',
        	]);
        DB::table('viaadministracions')->insert([
        	'nombre'=>'Transdermica',
        	'descripcion'=>'farmacos a traves de la piel',
        	]);
        DB::table('viaadministracions')->insert([
        	'nombre'=>'Oftalmica',
        	'descripcion'=>'Aplicacion directa en el ojo',
        	]);
        DB::table('viaadministracions')->insert([
        	'nombre'=>'Otica',
        	'descripcion'=>'Aplicacion en el oido externo',
        	]);
        DB::table('viaadministracions')->insert([
        	'nombre'=>'Intranasal',
        	'descripcion'=>'Actuacion en la mucosa nasal',
        	]);
        DB::table('viaadministracions')->insert([
        	'nombre'=>'Inhalatoria',
        	'descripcion'=>'Absorcion de principio activo a traves de la mucosa. Se administra mediante nebulizadores e inhaladores',
        	]);
        DB::table('viaadministracions')->insert([
        	'nombre'=>'Rectal',
        	'descripcion'=>'Absoracion via rectal en forma de supositorios y enemas',
        	]);
        DB::table('viaadministracions')->insert([
        	'nombre'=>'Vaginal',
        	'descripcion'=>'Absorcion vaginal a traves de la membrana lipoidea para efectos locales, a traves de pomadas, comprimidos y ovulos',
        	]);
        DB::table('viaadministracions')->insert([
        	'nombre'=>'Intravenosa',
        	'descripcion'=>'Se administra mediante una inyeccion directa en una vena de superficie cutanea',
        	]);
        DB::table('viaadministracions')->insert([
        	'nombre'=>'Intramuscular',
        	'descripcion'=>'Se inyecta en el tejido muscular, de absorcion rapida y de volumen reducido a no mas de 5 ml',
        	]);
        DB::table('viaadministracions')->insert([
        	'nombre'=>'Subcotanea',
        	'descripcion'=>'Inyeccion bajo la piel, de absorcion lenta y en pequeñas cantidades',
        	]);
    }
}
