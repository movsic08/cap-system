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
        Schema::create('death_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); // requested by
            $table->string('email');
            $table->string('deceased_name');
            $table->string('deceased_age');
            $table->string('deceased_address');
            $table->string('cause_of_death');
            $table->string('interment_date');
            $table->string('interment_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('death_certificates');
    }
};
