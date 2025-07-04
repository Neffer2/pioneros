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
            $table->string('crecimiento_flagship')->nullable();
            $table->string('crecimiento_galones')->nullable();
            $table->string('penetracion_flagship')->nullable();
            $table->string('mix_flagship')->nullable();
            $table->string('pops_flagship')->nullable();
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
