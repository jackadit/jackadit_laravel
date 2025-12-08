<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');

            // Certificat
            $table->string('certificate_number')->unique();
            $table->timestamp('issued_at');
            $table->string('file_path')->nullable();

            // Validation
            $table->boolean('is_valid')->default(true);
            $table->timestamp('expires_at')->nullable();

            $table->timestamps();

            // Index
            $table->unique(['user_id', 'course_id']);
            $table->index('certificate_number');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
