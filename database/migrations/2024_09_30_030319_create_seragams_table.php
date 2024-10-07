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
        Schema::create('seragams', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('order')->default(0);  // Urutan tampilan
            $table->boolean('is_active')->default(true);  // Status aktif atau tidak
            $table->string('title')->nullable();;
            $table->string('image_cover')->nullable();  // Gambar sampul 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seragams');
    }
};
