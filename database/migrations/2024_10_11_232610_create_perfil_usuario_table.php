<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilUsuarioTable extends Migration
{
    public function up()
    {
        Schema::create('perfil_usuario', function (Blueprint $table) {
            $table->id('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->string('nombre_completo');
            $table->date('fecha_nacimiento')->nullable();
            $table->enum('sexo', ['masculino', 'femenino', 'otro'])->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perfil_usuario');
    }
}

