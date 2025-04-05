<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias')->onDelete('cascade');
            $table->unsignedBigInteger('id_sucursal');
            $table->foreign('id_sucursal')->references('id_sucursal')->on('sucursales')->onDelete('cascade');
            $table->string('nombre', 100);
            $table->string('descripcion', 100);
            $table->decimal('precio_publico', 10, 2);
            $table->decimal('precio_caja', 10, 2)->nullable();
            $table->integer('stock');
            $table->tinyInteger('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
