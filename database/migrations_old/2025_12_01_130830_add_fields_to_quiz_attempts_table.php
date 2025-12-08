<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('quiz_attempts', function (Blueprint $table) {
            // Vérifier si les colonnes n'existent pas déjà
            if (!Schema::hasColumn('quiz_attempts', 'percentage')) {
                $table->decimal('percentage', 5, 2)->nullable()->after('score');
            }

            if (!Schema::hasColumn('quiz_attempts', 'total_questions')) {
                $table->integer('total_questions')->default(0)->after('percentage');
            }

            if (!Schema::hasColumn('quiz_attempts', 'correct_answers')) {
                $table->integer('show_correct_answers')->default(0)->after('total_questions');
            }

            if (!Schema::hasColumn('quiz_attempts', 'time_spent')) {
                $table->integer('time_spent')->nullable()->after('correct_answers')->comment('Temps en secondes');
            }

            if (!Schema::hasColumn('quiz_attempts', 'started_at')) {
                $table->timestamp('started_at')->nullable()->after('time_spent');
            }
        });
    }

    public function down(): void
    {
        Schema::table('quiz_attempts', function (Blueprint $table) {
            $table->dropColumn([
                'percentage',
                'total_questions',
                'show_correct_answers',
                'time_spent',
                'started_at'
            ]);
        });
    }
};
