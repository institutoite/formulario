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
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string('tema', 250);
            $table->string('slogan', 250);
            $table->string('detalle', 5000);
            $table->bigInteger('indice')->unsigned();

            $table->unsignedBigInteger('materia_id');
            $table->foreign('materia_id')->references('id')->on('materias');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temas');
    }
};
