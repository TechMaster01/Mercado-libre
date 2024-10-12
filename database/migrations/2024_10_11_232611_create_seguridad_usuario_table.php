<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguridadUsuarioTable extends Migration
{
    public function up()
    {
        Schema::create('seguridad_usuario', function (Blueprint $table) {
            $table->id('id_evento_seguridad'); 
            $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade'); 
            $table->text('dispositivos_logueados')->nullable();
            $table->text('problema_reportado')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seguridad_usuario');
    }
}
