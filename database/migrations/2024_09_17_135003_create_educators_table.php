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
        Schema::create('educators', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->boolean('is_active')->default(1);
            $table->string('name', 1000);
            $table->string('slug', 1000);
            $table->string('description', 1000)->nullable();
            $table->string('image')->nullable();
            $table->string('position', 1000)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educators');
    }
};
