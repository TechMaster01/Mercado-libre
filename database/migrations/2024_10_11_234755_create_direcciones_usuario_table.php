<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesUsuarioTable extends Migration
{
    public function up()
    {
        Schema::create('direcciones_usuario', function (Blueprint $table) {
            $table->id('id_direccion'); 
            $table->foreignId('id_usuario') 
                  ->constrained('usuarios') 
                  ->onDelete('cascade'); 
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('codigo_postal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('direcciones_usuario'); 
    }
}
