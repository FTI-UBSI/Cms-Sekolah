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
        Schema::create('backgrounds', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(1);
            $table->string('title', 1000);
            $table->string('image_cover')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backgrounds');
    }
};
