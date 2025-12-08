<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quiz_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_attempt_id')->constrained()->onDelete('cascade');
            $table->foreignId('quiz_question_id')->constrained()->onDelete('cascade');

            // Réponse
            $table->json('answer'); // Peut être une chaîne, un tableau, etc.
            $table->boolean('is_correct')->default(false);
            $table->integer('points_earned')->default(0);

            $table->timestamps();

            // Index
            $table->index('quiz_attempt_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_answers');
    }
};
