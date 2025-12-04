<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user_answers', function (Blueprint $table) {
            $table->timestamp('answered_at')->nullable()->after('time_spent');
        });
    }

    public function down(): void
    {
        Schema::table('user_answers', function (Blueprint $table) {
            $table->dropColumn('answered_at');
        });
    }
};
