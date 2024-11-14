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
        Schema::create('order_manga', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained(); // Colonna per il ordine
            $table->foreignId('manga_id')->constrained(); // Colonna per il manga
            $table->string('quantity')->default();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_manga');
    }
};
