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
        Schema::create('sosmeds', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('order')->default(0);  // Urutan tampilan
            $table->boolean('is_active')->default(true);
            $table->string('title')->nullable();;
            $table->string('E_Mail');
            $table->string('No_HP', 1000);
            $table->string('Jam_Operasional');
            $table->string('Alamat');
            $table->string('Fb_link', 1000);
            $table->string('ig_link', 1000);
            $table->string('ytb_link', 1000);
            $table->string('Wa_link', 1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sosmeds');
    }
};
