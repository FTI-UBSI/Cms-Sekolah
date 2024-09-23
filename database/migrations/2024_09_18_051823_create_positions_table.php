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
        Schema::create('positions', function (Blueprint $table) {
            $table->uuid('id')->primary(); 
            $table->string('name', 255); 
            $table->string('slug', 255); 
            $table->timestamps();
        });

        // Update educators table to reference positions
        Schema::table('educators', function (Blueprint $table) {
            $table->uuid('position_id')->nullable(); // Foreign key to positions
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('set null');
            
            // Hapus kolom 'position' yang bertipe string
            $table->dropColumn('position');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
