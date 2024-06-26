<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCecinasTable extends Migration
{
    public function up()
    {
        Schema::create('cecinas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('marca');
            $table->integer('precio');
            $table->string('imagen');
            $table->integer('peso')->default(250); // Valor por defecto para peso
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cecinas');
    }
}
