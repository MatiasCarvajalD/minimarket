<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{

    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rut_usuario');
            $table->string('direccion');
            $table->timestamps();

            $table->foreign('rut_usuario')->references('rut_usuario')->on('usuarios')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('direcciones');
    }
}
