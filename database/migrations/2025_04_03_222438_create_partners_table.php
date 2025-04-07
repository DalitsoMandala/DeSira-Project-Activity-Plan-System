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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Full name of the organization
            $table->string('acronym')->unique(); // The acronym (CIP, CIMMYT, etc.)
            $table->text('description')->nullable(); // Optional description
            $table->string('website')->nullable(); // Website URL
            $table->string('logo_path')->nullable(); // Path to logo image
            $table->boolean('is_active')->default(true); // Active status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
