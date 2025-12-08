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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();

            // Clés étrangères
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();

            // Progression
            $table->integer('progress')->default(0); // 0 à 100
            $table->timestamp('completed_at')->nullable();

            // Statut d'inscription
            $table->enum('status', ['active', 'completed', 'dropped'])->default('active');

            // Date de dernière activité
            $table->timestamp('last_accessed_at')->nullable();

            $table->timestamps();

            // Empêcher les doublons (un user ne peut s'inscrire qu'une fois au même cours)
            $table->unique(['user_id', 'course_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
