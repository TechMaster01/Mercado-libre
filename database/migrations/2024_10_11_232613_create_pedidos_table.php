<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('id_pedido'); 
            $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade'); 
            $table->timestamp('fecha_pedido')->default(DB::raw('CURRENT_TIMESTAMP')); 
            $table->decimal('monto_total', 10, 2); 
            $table->string('estado_envio', 100)->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
