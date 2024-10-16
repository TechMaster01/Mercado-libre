<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('seguridad_usuario', function (Blueprint $table) {
            $table->id('id_evento_seguridad');
            $table->unsignedBigInteger('id_usuario');
            $table->text('dispositivos_logueados')->nullable();
            $table->text('problema_reportado')->nullable();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguridad_usuario');
    }
};
