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
        Schema::create('soil_amendments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_technology_id')->constrained('location_technology', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('season_id')->constrained('seasons', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('district')->nullable();
            $table->string('epa')->nullable();
            $table->string('plot')->nullable();
            $table->integer('rep')->nullable();
            $table->string('sweetpotato_variety')->nullable();
            $table->string('nutrient_source')->nullable();
            $table->integer('no_of_stands_planted')->default(0);
            $table->integer('no_of_stands_harvested')->default(0);
            $table->float('vine_yield_kg_ha')->default(0);
            $table->float('vine_length_cm')->default(0);
            $table->integer('no_of_marketable_roots')->default(0);
            $table->integer('no_of_non_marketable_roots')->default(0);
            $table->integer('total_number_of_roots')->default(0);
            $table->float('weight_of_marketable_roots_kg_ha')->default(0);
            $table->float('weight_of_non_marketable_roots_kg_ha')->default(0);
            $table->float('total_biomass_kg_ha')->default(0);
            $table->float('%_weevilled')->default(0);
            $table->float('total_root_weight_kg_ha')->default(0);
            $table->float('%_non_marketable_roots')->default(0);
            $table->float('harvest_index')->default(0);
            $table->float('proportional_radiation_intercepted')->default(0);
            $table->float('dry_matter_content_percentage')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soil_amendments');
    }
};
