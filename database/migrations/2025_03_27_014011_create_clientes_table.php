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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_suscripcion');
            $table->foreign('id_suscripcion')->references('id_suscripcion')->on('suscripciones')->onDelete('cascade');
            $table->string('nombre', 100);
            $table->string('ap_materno', 100);
            $table->string('ap_paterno', 100);
            $table->string('telefono',15);
            $table->tinyInteger('estatus')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
