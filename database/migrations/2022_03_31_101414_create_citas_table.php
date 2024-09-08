<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('fechaHoraInicio');
            $table->dateTime('fechaHoraFin');
            $table->string('descripcion');
            $table->string('observaciones');
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
        Schema::dropIfExists('citas');
    }
}
