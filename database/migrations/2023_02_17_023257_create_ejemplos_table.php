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
        Schema::create('ejemplos', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->unsigned();
            $table->string('ejemplo', 100);
            $table->string('detalle', 1500);
            $table->bigInteger('indice')->unsigned()->nullable();
            
            $table->unsignedBigInteger('formula_id');
            $table->foreign('formula_id')->references('id')->on('formulas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejemplos');
    }
};
