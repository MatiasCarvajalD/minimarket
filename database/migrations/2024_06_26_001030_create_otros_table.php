<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtrosTable extends Migration
{
    public function up()
    {
        Schema::create('otros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('categoria'); // Asegúrate de que esta línea esté presente
            $table->string('marca');
            $table->integer('precio');
            $table->integer('peso')->nullable();
            $table->string('unidad')->nullable();
            $table->string('imagen');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('otros');
    }
}

