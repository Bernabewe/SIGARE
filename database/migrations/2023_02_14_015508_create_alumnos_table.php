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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('carrera');
            $table->string('generacion');
            $table->string('turno');
            $table->integer('semestre');
            $table->string('grupo');
            $table->string('numero_control');
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('nombre_completo');
            $table->string('curp');
            $table->string('sexo');

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
        Schema::dropIfExists('alumnos');
    }
};
