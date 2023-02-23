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
            $table->string('motivo');
            $table->string('solicitante');
            $table->string('numero_control');
            $table->string('tutor');
            $table->date('fecha_inicial');
            $table->date('fecha_final');
            $table->string('articulo');
            $table->string('compromisos');
            $table->string('domicilio');
            $table->string('observaciones');

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
