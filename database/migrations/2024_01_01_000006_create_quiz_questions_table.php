<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_id')->constrained()->onDelete('cascade');

            // Contenu de la question
            $table->text('question_text');

            // Type de question
            $table->enum('type', [
                'single_choice',
                'multiple_choice',
                'true_false',
                'short_answer',
                'essay'
            ])->default('single_choice');

            // Difficulté
            $table->enum('difficulty', ['easy', 'medium', 'hard'])->default('medium');

            // Points et temps
            $table->integer('points')->default(10);
            $table->integer('time_limit')->nullable()->comment('Temps en secondes');

            // Informations complémentaires
            $table->text('explanation')->nullable()->comment('Explication de la bonne réponse');
            $table->integer('order')->default(0);

            // Options
            $table->boolean('show_correct_answers')->default(true);
            $table->boolean('is_required')->default(true);

            $table->timestamps();
            $table->softDeletes();

            // Index pour performance
            $table->index(['quiz_id', 'order']);
            $table->index('type');
            $table->index('difficulty');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
