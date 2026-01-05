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
        Schema::create('log_destrucciones', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->integer('cantidad');
            $table->string('estatus_origen');
            $table->string('constancia_path');
            $table->string('usuario');
            $table->timestamp('created_at');
            
            $table->index('sku');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_destrucciones');
    }
};
