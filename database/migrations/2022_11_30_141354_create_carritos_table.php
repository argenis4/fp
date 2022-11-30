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
        Schema::create('carritos', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->string('precio_publico');
            $table->string('articulo_id')->constrained()->onDelete('cascade');
            $table->string('user_id')->constrained()->onDelete('cascade');
            $table->integer('descuento_id')->constrained()->onDelete('cascade');
            $table->integer('unidad_minima');
            $table->integer('categoria_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('carritos');
    }
};
