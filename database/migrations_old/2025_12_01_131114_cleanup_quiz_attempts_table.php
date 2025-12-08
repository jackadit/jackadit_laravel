<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('quiz_attempts', function (Blueprint $table) {
            // Supprimer les colonnes obsolètes
            if (Schema::hasColumn('quiz_attempts', 'answers')) {
                $table->dropColumn('answers');
            }

            if (Schema::hasColumn('quiz_attempts', 'points_earned')) {
                $table->dropColumn('points_earned');
            }

            if (Schema::hasColumn('quiz_attempts', 'total_points')) {
                $table->dropColumn('total_points');
            }

            // Garder 'passed' si tu veux un système de validation (ex: 50% = passé)
            // Si tu ne veux pas ce système, décommente la ligne suivante :
            // $table->dropColumn('passed');
        });
    }

    public function down(): void
    {
        Schema::table('quiz_attempts', function (Blueprint $table) {
            $table->json('answers')->nullable();
            $table->integer('points_earned')->default(0);
            $table->integer('total_points')->default(0);
            // $table->boolean('passed')->default(false);
        });
    }
};
