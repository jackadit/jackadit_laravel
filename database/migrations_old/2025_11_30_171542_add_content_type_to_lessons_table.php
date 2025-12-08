<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->enum('content_type', ['text', 'video', 'pdf', 'quiz'])
                ->default('text')
                ->after('description')
                ->comment('Type de contenu de la leçon');
        });

        // Mise à jour automatique des leçons existantes
        DB::statement("
            UPDATE lessons
            SET content_type = CASE
                WHEN video_url IS NOT NULL THEN 'video'
                WHEN document_path IS NOT NULL THEN 'pdf'
                ELSE 'text'
            END
        ");
    }

    public function down(): void
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropColumn('content_type');
        });
    }
};
