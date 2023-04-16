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
        Schema::create('variables', function (Blueprint $table) {
            $table->id();
            $table->string('variable',20);
            $table->string('detalle',5000);
            
            $table->unsignedBigInteger('dimension_id');
            $table->foreign('dimension_id')->references('id')->on('dimensions');
            
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
        Schema::dropIfExists('variables');
    }
};
