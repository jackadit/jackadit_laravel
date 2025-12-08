<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quiz_attempts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Tentative
            $table->integer('attempt_number')->default(1);
            $table->timestamp('started_at')->nullable();
            $table->timestamp('completed_at')->nullable();

            // Réponses et résultats
            $table->json('answers')->nullable();
            $table->decimal('score', 5, 2)->nullable();
            $table->boolean('is_passed')->default(false);

            // Statut et suivi
            $table->enum('status', ['in_progress', 'completed', 'abandoned'])->default('in_progress');
            $table->integer('time_spent')->nullable(); // en secondes
            $table->string('ip_address')->nullable();

            $table->timestamps();

            // Index
            $table->index(['user_id', 'quiz_id']);
            $table->index(['quiz_id', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_attempts');
    }
};
