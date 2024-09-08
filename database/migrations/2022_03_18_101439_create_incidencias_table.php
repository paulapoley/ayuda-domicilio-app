<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('fecha');
            $table->string('nombre');
            $table->string('descripcion');
            $table->enum('tipoIncidencia', ['mensaje', 'incidente']);
            $table->integer('nivelGravedad');
            $table->foreignId('profesional_id')->unsigned()->nullable();
            $table->foreignId('familiar_id')->unsigned()->nullable();
            //$table->foreignId('paciente_id')->constrained()->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidencias');
    }
};
