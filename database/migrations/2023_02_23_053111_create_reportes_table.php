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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_id');
            $table->date('fecha');
            /* $table->unsignedBigInteger('user_id'); */
            $table->string('especialidad');
            $table->string('grupo');
            $table->string('turno');
            $table->string('generacion');
            $table->unsignedBigInteger('detalle_id');

            $table->timestamps();
            $table->softDeletes();


            $table->foreign('tipo_id')->references('id')->on('tipo__reportes');
            $table->foreign('detalle_id')->references('id')->on('detalles');
            /* $table->foreign('user_id')->references('id')->on('usuarios'); */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportes');
    }
};
