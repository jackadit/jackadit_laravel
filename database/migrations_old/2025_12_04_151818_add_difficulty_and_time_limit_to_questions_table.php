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
        Schema::table('questions', function (Blueprint $table) {
            // Difficulté de la question
            $table->enum('difficulty', ['easy', 'medium', 'hard'])
                ->default('medium')
                ->after('type')
                ->comment('Niveau de difficulté');

            // Temps limite en secondes (optionnel)
            $table->unsignedInteger('time_limit')
                ->nullable()
                ->after('points')
                ->comment('Temps limite en secondes pour répondre');

            // Question obligatoire ?
            $table->boolean('is_required')
                ->default(true)
                ->after('show_correct_answers')
                ->comment('La question doit être répondue');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropColumn(['difficulty', 'time_limit', 'is_required']);
        });
    }
};
