<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');

            // Informations
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->longText('content')->nullable();

            // Ordre et type
            $table->integer('order')->default(0);
            $table->enum('type', ['video', 'text', 'quiz'])->default('text');

            // Contenu média
            $table->string('video_url')->nullable();
            $table->integer('video_duration')->nullable(); // en secondes
            $table->json('attachments')->nullable();

            // Publication
            $table->boolean('is_published')->default(false);
            $table->boolean('is_preview')->default(false);

            $table->timestamps();

            // Index
            $table->unique(['course_id', 'slug']);
            $table->index(['course_id', 'order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
