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
        Schema::table('courses', function (Blueprint $table) {
            // Renommer instructor_id → instructor_id
            if (Schema::hasColumn('courses', 'instructor_id')) {
                $table->renameColumn('instructor_id', 'instructor_id');
            }

            // Renommer level → difficulty_level
            if (Schema::hasColumn('courses', 'level')) {
                $table->renameColumn('level', 'difficulty_level');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            // Annuler les changements
            if (Schema::hasColumn('courses', 'instructor_id')) {
                $table->renameColumn('instructor_id', 'instructor_id');
            }

            if (Schema::hasColumn('courses', 'difficulty_level')) {
                $table->renameColumn('difficulty_level', 'level');
            }
        });
    }
};
