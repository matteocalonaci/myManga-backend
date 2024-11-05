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
        Schema::create('mangas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('cover_image');
            $table->string('volume');
            $table->decimal('price', 8, 2);
            $table->boolean('availability')->default(true);
            $table->year('year');
            $table->boolean('in_progress')->default(true);;
            $table->string('slug')->nullable();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('editor_id')->constrained();
            $table->foreignId('author_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mangas');
    }
};