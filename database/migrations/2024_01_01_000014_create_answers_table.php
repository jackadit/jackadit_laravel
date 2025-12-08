<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();

            // ============================================
            // RELATION
            // ============================================

            $table->foreignId('question_id')
                ->constrained()
                ->onDelete('cascade')
                ->comment('Question associée');

            // ============================================
            // CONTENU
            // ============================================

            $table->text('answer_text')
                ->comment('Texte de la réponse');

            // ============================================
            // CONFIGURATION
            // ============================================

            $table->boolean('is_correct')
                ->default(false)
                ->comment('Réponse correcte ?');

            $table->integer('order')
                ->default(0)
                ->comment('Ordre d\'affichage');

            $table->text('explanation')
                ->nullable()
                ->comment('Explication si sélectionnée');

            $table->timestamps();

            // ============================================
            // INDEX
            // ============================================

            $table->index('question_id');
            $table->index('is_correct');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
