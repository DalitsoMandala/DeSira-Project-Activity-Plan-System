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
        //
        Schema::create('location_technology', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activity_location_id')->constrained('activity_locations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('technology_id')->constrained('technologies')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();


            // Add unique constraint to prevent duplicates
            $table->unique(['activity_location_id', 'technology_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('activity_location_technology');
    }
};
