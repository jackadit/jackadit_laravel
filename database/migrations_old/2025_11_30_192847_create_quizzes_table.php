<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('passing_score')->default(70); // Score minimum pour réussir (en %)
            $table->integer('time_limit')->nullable(); // Temps limite en minutes (null = illimité)
            $table->integer('max_attempts')->default(3); // Nombre de tentatives autorisées
            $table->boolean('shuffle_questions')->default(true); // Mélanger les questions
            $table->boolean('show_correct_answers')->default(true); // Afficher les réponses après
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
