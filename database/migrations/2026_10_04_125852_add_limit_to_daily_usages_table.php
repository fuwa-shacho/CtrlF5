<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('daily_usages', function (Blueprint $table) {
            $table->unsignedInteger('limit')->default(10);
        });
    }

    public function down(): void
    {
        Schema::table('daily_usages', function (Blueprint $table) {
            $table->dropColumn('limit');
        });
    }
};