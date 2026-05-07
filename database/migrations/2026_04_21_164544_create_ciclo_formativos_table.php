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
        Schema::create('ciclo_formativos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->string('familia_profesional', 100);
            $table->string('grado', 50);
            $table->string('modalidad', 80);
            $table->string('decreto_referencia', 250);
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciclo_formativos');
    }
};
