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
        Schema::create('detalles', function (Blueprint $table) {
            $table->id();
            $table->string('motivo')->nullable();
            $table->string('solicitante')->nullable();
            $table->string('numero_control')->nullable();
            $table->string('tutor')->nullable();
            $table->date('fecha_inicial')->nullable();
            $table->date('fecha_final')->nullable();
            $table->string('articulo')->nullable();
            $table->string('compromisos')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('area_canalizacion')->nullable();
            $table->string('observaciones')->nullable();

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles');
    }
};
