<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lesson_completions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('lesson_id')->constrained()->onDelete('cascade');

            // Complétion
            $table->boolean('is_completed')->default(false);
            $table->timestamp('completed_at')->nullable();

            // Suivi vidéo
            $table->integer('video_progress')->default(0); // en secondes
            $table->integer('watch_time')->default(0); // temps total regardé

            $table->timestamps();

            // Contraintes
            $table->unique(['user_id', 'lesson_id']);
            $table->index(['lesson_id', 'is_completed']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lesson_completions');
    }
};
