<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Class CreateProfesionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesionals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fechaNacimiento');
            $table->enum('tipo',['enfermero/a','auxiliar']);
            $table->foreignId('user_id')->unique()->constrained()->onDelete('cascade');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesionals');
    }
}
