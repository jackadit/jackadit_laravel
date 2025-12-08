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
        Schema::create('user_quiz_answers', function (Blueprint $table) {
            $table->id();

            // ============================================
            // RELATIONS
            // ============================================

            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade')
                ->comment('Utilisateur qui a répondu');

            $table->foreignId('quiz_attempt_id')
                ->constrained()
                ->onDelete('cascade')
                ->comment('Tentative de quiz associée');

            $table->foreignId('question_id')
                ->constrained()
                ->onDelete('cascade')
                ->comment('Question posée');

            $table->foreignId('answer_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null')
                ->comment('Réponse choisie (QCM/Vrai-Faux)');

            // ============================================
            // DONNÉES DE RÉPONSE
            // ============================================

            $table->text('user_answer_text')
                ->nullable()
                ->comment('Réponse textuelle (questions ouvertes)');

            // ============================================
            // ÉVALUATION
            // ============================================

            $table->boolean('is_correct')
                ->default(false)
                ->comment('Réponse correcte ou non');

            $table->decimal('points_earned', 5, 2)
                ->default(0)
                ->comment('Points obtenus pour cette réponse');

            // ============================================
            // MÉTRIQUES TEMPORELLES
            // ============================================

            $table->integer('time_taken')
                ->nullable()
                ->comment('Temps passé en secondes');

            $table->timestamp('answered_at')
                ->nullable()
                ->comment('Date/heure de la réponse');

            // ============================================
            // MÉTADONNÉES
            // ============================================

            $table->timestamps();

            // ============================================
            // INDEX POUR PERFORMANCE
            // ============================================

            // Recherche par utilisateur et tentative
            $table->index(['user_id', 'quiz_attempt_id'], 'idx_user_attempt');

            // Recherche par tentative et question (unique)
            $table->unique(['quiz_attempt_id', 'question_id'], 'unq_attempt_question');

            // Statistiques par question
            $table->index('question_id');

            // Filtrage par correction
            $table->index('is_correct');

            // Tri par date
            $table->index('answered_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_quiz_answers');
    }
};
