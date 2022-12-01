<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito_items', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->string('precio_publico');
            $table->foreignId('articulo_id')->constrained()->onDelete('cascade');
            $table->foreignId('carrito_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('descuento_id')->constrained()->onDelete('cascade');
            $table->integer('unidad_minima');
            $table->integer('categoria_id');
            $table->string('tipo_precio');
            $table->string('plazoley_dcto');
            $table->string('tipo_oferta');
            $table->string('tipo_oferta_elegida');
            $table->string('descripcion');
            $table->string('tipo_fact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrito_items');
    }
};
