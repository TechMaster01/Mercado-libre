<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto'); 
            $table->string('nombre_producto', 255); 
            $table->text('descripcion_producto')->nullable(); 
            $table->decimal('precio', 10, 2); 
            $table->integer('stock')->default(0); 
            $table->foreignId('id_vendedor')->constrained('usuarios')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
