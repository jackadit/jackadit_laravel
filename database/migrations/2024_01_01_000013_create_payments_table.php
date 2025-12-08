<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');

            // Transaction
            $table->string('transaction_id')->unique();
            $table->decimal('amount', 8, 2);
            $table->string('currency', 3)->default('USD');

            // Statut
            $table->enum('status', ['pending', 'completed', 'failed', 'refunded'])->default('pending');
            $table->string('payment_method')->nullable(); // stripe, paypal, etc.

            // Dates
            $table->timestamp('paid_at')->nullable();
            $table->timestamp('refunded_at')->nullable();

            // Métadonnées
            $table->json('metadata')->nullable();

            $table->timestamps();

            // Index
            $table->index('transaction_id');
            $table->index(['user_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
