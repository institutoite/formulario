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
        Schema::create('formulas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('formula', 100);
            $table->string('detalle', 800)->nullable();
            $table->bigInteger('indice')->unsigned()->nullable();

            $table->unsignedBigInteger('tema_id');
            $table->foreign('tema_id')->references('id')->on('temas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulas');
    }
};
