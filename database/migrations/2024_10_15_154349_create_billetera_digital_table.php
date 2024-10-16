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
        Schema::create('billetera_digital', function (Blueprint $table) {
            $table->id('id_billetera');
            $table->unsignedBigInteger('id_usuario');
            $table->decimal('saldo', 10, 2)->default(0.00);
            $table->string('tipo_moneda', 10)->default('MXN');
            $table->string('metodo_pago', 50)->nullable();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billetera_digital');
    }
};
