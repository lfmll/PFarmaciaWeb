<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('codigo');
            $table->string('nombre_comercial');
            $table->string('nombre_generico');
            $table->string('prescripcion')->nullable();
            $table->integer('dosificacion')->nullable();
            $table->integer('stock');
            $table->integer('stock_minimo');

            $table->unsignedInteger('laboratorio_id');
            $table->unsignedInteger('presentacion_id');
            $table->unsignedInteger('viaadministracion_id');

            $table->foreign('laboratorio_id')->references('id')->on('laboratorios')->onDelete('cascade');
            $table->foreign('presentacion_id')->references('id')->on('presentacions')->onDelete('cascade');
            $table->foreign('viaadministracion_id')->references('id')->on('viaadministracions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamentos');
    }
}
