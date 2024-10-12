<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialNotificacionesTable extends Migration
{
    public function up()
    {
        Schema::create('historial_notificaciones', function (Blueprint $table) {
            $table->id('id_notificacion'); 
            $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade'); 
            $table->string('tipo_notificacion', 50)->nullable(); 
            $table->timestamp('fecha_envio')->default(DB::raw('CURRENT_TIMESTAMP')); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('historial_notificaciones');
    }
}
