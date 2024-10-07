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
        Schema::create('videos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('order')->default(0);  // Urutan tampilan
            $table->boolean('is_active')->default(true);  // Status aktif atau tidak
            $table->string('title_video')->nullable();; 
            $table->text('description_video');  // Deskripsi konten
            $table->string('video_link')->nullable();  // Link video (misal YouTube)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
