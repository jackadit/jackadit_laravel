<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('quiz_attempts', function (Blueprint $table) {
            // Statut de la tentative
            $table->enum('status', ['in_progress', 'completed', 'abandoned'])
                ->default('in_progress')
                ->after('user_id');

            // Score maximum possible
            $table->integer('max_score')->default(0)->after('score');

            // Informations de traçabilité
            $table->string('ip_address', 45)->nullable()->after('completed_at');
            $table->text('user_agent')->nullable()->after('ip_address');

            // Résumé JSON des réponses
            $table->json('answers_summary')->nullable()->after('user_agent');
        });
    }

    public function down(): void
    {
        Schema::table('quiz_attempts', function (Blueprint $table) {
            $table->dropColumn([
                'status',
                'max_score',
                'ip_address',
                'user_agent',
                'answers_summary'
            ]);
        });
    }
};
