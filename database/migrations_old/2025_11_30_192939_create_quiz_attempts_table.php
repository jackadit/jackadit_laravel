<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quiz_attempts', function (Blueprint $table) {
            $table->id();

            // Relations
            $table->foreignId('quiz_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Données de la tentative
            $table->integer('score')->default(0); // Score obtenu
            $table->integer('total_points')->default(0); // Total de points possibles
            $table->decimal('percentage', 5, 2)->default(0); // Pourcentage (ex: 75.50)

            // Statut
            $table->enum('status', ['in_progress', 'completed', 'abandoned'])->default('in_progress');
            $table->boolean('passed')->default(false); // A réussi le quiz ?

            // Temps
            $table->timestamp('started_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->integer('time_spent')->nullable(); // En secondes

            $table->timestamps();

            // Index pour performances
            $table->index(['quiz_id', 'user_id']);
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_attempts');
    }
};
