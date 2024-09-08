<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Class CreateCitaServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita_servicio', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->text('observaciones');
            $table->integer('duracion');
            $table->foreignId('cita_id')->constrained()->onDelete('cascade');
            $table->foreignId('servicio_id')->constrained()->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita_servicio');
    }
};
