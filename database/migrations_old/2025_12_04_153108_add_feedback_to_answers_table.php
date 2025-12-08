<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Vérifier si la colonne existe déjà
        if (!Schema::hasColumn('answers', 'feedback')) {
            Schema::table('answers', function (Blueprint $table) {
                $table->text('feedback')
                    ->nullable()
                    ->after('explanation')
                    ->comment('Feedback personnalisé');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('answers', 'feedback')) {
            Schema::table('answers', function (Blueprint $table) {
                $table->dropColumn('feedback');
            });
        }
    }
};
