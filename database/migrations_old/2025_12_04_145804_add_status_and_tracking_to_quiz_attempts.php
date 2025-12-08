<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('quiz_attempts', function (Blueprint $table) {
            // ✅ Ajouter uniquement si la colonne n'existe pas
            if (!Schema::hasColumn('quiz_attempts', 'status')) {
                $table->enum('status', ['in_progress', 'completed', 'abandoned'])
                    ->default('in_progress')
                    ->after('is_passed');
            }

            if (!Schema::hasColumn('quiz_attempts', 'time_spent')) {
                $table->integer('time_spent')
                    ->nullable()
                    ->after('status')
                    ->comment('Temps passé en secondes');
            }

            if (!Schema::hasColumn('quiz_attempts', 'ip_address')) {
                $table->string('ip_address')
                    ->nullable()
                    ->after('time_spent');
            }
        });
    }

    public function down(): void
    {
        Schema::table('quiz_attempts', function (Blueprint $table) {
            if (Schema::hasColumn('quiz_attempts', 'status')) {
                $table->dropColumn('status');
            }
            if (Schema::hasColumn('quiz_attempts', 'time_spent')) {
                $table->dropColumn('time_spent');
            }
            if (Schema::hasColumn('quiz_attempts', 'ip_address')) {
                $table->dropColumn('ip_address');
            }
        });
    }
};
