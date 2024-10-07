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
        Schema::create('abouts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->boolean('is_active')->default(1);
            $table->string('about_us', 1000);
            $table->string('foto_about_us')->nullable();
            $table->string('visi')->nullable();
            $table->string('misi', 1000);length: 
            $table->string('foto_visi_misi', 1000);
            $table->string('core_value', 1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
