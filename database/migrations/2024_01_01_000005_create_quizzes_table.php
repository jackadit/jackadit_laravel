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

            // Informations
            $table->string('title');
            $table->text('description')->nullable();

            // Configuration
            $table->integer('passing_score')->default(70); // pourcentage
            $table->integer('time_limit')->nullable(); // en minutes
            $table->integer('max_attempts')->nullable();
            $table->boolean('shuffle_questions')->default(false);
            $table->boolean('show_correct_answers')->default(true);

            // Publication
            $table->boolean('is_published')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
