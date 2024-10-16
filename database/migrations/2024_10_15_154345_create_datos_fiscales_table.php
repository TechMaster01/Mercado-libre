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
        Schema::create('datos_fiscales', function (Blueprint $table) {
            $table->unsignedBigInteger('id_usuario')->primary();
            $table->string('rfc', 13)->nullable();
            $table->string('direccion_fiscal', 255)->nullable();
            $table->text('beneficiarios')->nullable();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_fiscales');
    }
};
