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
        Schema::create('agentes', function (Blueprint $table) {
            $table->id();
            $table->string('cod')->unique();
            $table->string('descripcion');
            $table->integer('crecimiento_flagship')->nullable();
            $table->integer('crecimiento_galones')->nullable();
            $table->integer('penetracion_flagship')->nullable();
            $table->integer('mix_flagship')->nullable();
            $table->integer('pops_flagship')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agentes');
    }
};
