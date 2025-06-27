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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->text('fecha_registro');
            $table->text('kpi');
            $table->text('agente_comercial');
            $table->foreignId('agente_id')->nullable();
            $table->foreign('agente_id')->references('id')->on('agentes');
            $table->text('asesor');
            $table->text('pdv');
            $table->text('referencia');
            $table->text('presentacion');
            $table->text('galonaje');
            $table->text('cantidad');
            $table->text('valor_unitario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
