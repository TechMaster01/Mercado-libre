<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosFiscalesTable extends Migration
{
    public function up()
    {
        Schema::create('datos_fiscales', function (Blueprint $table) {
            $table->id('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->string('rfc')->nullable();
            $table->string('direccion_fiscal')->nullable();
            $table->text('beneficiarios')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('datos_fiscales');
    }
}
