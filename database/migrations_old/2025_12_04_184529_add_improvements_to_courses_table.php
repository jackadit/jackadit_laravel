<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            // ✅ 1. Supprimer 'level' si elle existe (car difficulty_level existe déjà)
            if (Schema::hasColumn('courses', 'level')) {
                $table->dropColumn('level');
            }

            // ✅ 2. S'assurer que difficulty_level existe
            if (!Schema::hasColumn('courses', 'difficulty_level')) {
                $table->enum('difficulty_level', ['beginner', 'intermediate', 'advanced'])
                    ->default('beginner')
                    ->after('thumbnail');
            }

            // ✅ 3. Ajouter les autres colonnes manquantes
            if (!Schema::hasColumn('courses', 'duration_minutes')) {
                $table->integer('duration_minutes')->nullable()->after('difficulty_level');
            }

            if (!Schema::hasColumn('courses', 'language')) {
                $table->string('language')->default('fr')->after('duration_minutes');
            }

            if (!Schema::hasColumn('courses', 'deleted_at')) {
                $table->softDeletes();
            }
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            // Retour arrière : supprimer les colonnes ajoutées
            $table->dropColumn([
                'duration_minutes',
                'language',
                'deleted_at'
            ]);

            // Recréer 'level' si nécessaire
            if (!Schema::hasColumn('courses', 'level') && Schema::hasColumn('courses', 'difficulty_level')) {
                $table->enum('level', ['beginner', 'intermediate', 'advanced'])
                    ->default('beginner')
                    ->after('thumbnail');
            }
        });
    }
};
