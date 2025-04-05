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
        Schema::create('rol_modulos', function (Blueprint $table) {
            $table->id('id_rol_modulo');
            $table->unsignedBigInteger('id_rol');
            $table->unsignedBigInteger('id_modulo');
            $table->foreign('id_rol')->references('id_rol')->on('roles')->onDelete('cascade');
            $table->foreign('id_modulo')->references('id_modulo')->on('modulos')->onDelete('cascade');
            $table->tinyInteger('editar')->default(0)->nullable();
            $table->tinyInteger('crear')->default(0)->nullable();
            $table->tinyInteger('eliminar')->default(0)->nullable();
            $table->tinyInteger('venta')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol_modulos');
    }
};
