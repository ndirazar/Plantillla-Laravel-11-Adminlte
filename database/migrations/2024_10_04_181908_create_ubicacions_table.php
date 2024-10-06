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
        Schema::create('ubicaciones', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social');
            $table->string('direccion');
            $table->decimal('latitud', 10, 8)->nullable(); ;
            $table->decimal('longitud', 11, 8)->nullable(); ;
            $table->string('rubro');
            $table->string('tipo');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubicacions');
    }
};
