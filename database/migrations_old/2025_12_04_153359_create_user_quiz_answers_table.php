<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_quiz_answers', function (Blueprint $table) {
            $table->id();

            // Relations
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete()
                ->comment('Utilisateur ayant répondu');

            $table->foreignId('quiz_attempt_id')
                ->constrained()
                ->cascadeOnDelete()
                ->comment('Tentative de quiz');

            $table->foreignId('question_id')
                ->constrained()
                ->cascadeOnDelete()
                ->comment('Question posée');

            $table->foreignId('answer_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete()
                ->comment('Réponse choisie (null = pas de réponse)');

            // Données de réponse
            $table->boolean('is_correct')
                ->default(false)
                ->comment('Est-ce que la réponse était correcte ?');

            $table->decimal('points_earned', 5, 2)
                ->default(0)
                ->comment('Points obtenus');

            $table->unsignedInteger('time_taken')
                ->nullable()
                ->comment('Temps pris pour répondre (en secondes)');

            $table->text('user_answer_text')
                ->nullable()
                ->comment('Texte de réponse (pour questions ouvertes)');

            $table->timestamps();

            // Index pour performances
            $table->index(['user_id', 'quiz_attempt_id']);
            $table->index(['quiz_attempt_id', 'question_id']);
            $table->index('is_correct');
            $table->unique(['quiz_attempt_id', 'question_id'], 'unique_answer_per_attempt');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_quiz_answers');
    }
};
