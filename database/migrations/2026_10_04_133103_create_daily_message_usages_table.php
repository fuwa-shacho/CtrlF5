<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('daily_message_usages', function (Blueprint $table) {
            $table->id();
            $table->date('used_date');
            $table->foreignId('reload_message_id')->constrained()->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['used_date', 'reload_message_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('daily_message_usages');
    }
};