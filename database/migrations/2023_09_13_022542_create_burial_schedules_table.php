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
        Schema::create('burial_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('first_name');
            $table->string('email');
            $table->string('deceased_name');
            $table->string('deceased_age');
            $table->string('deceased_status');
            $table->string('family_name'); // parents / husband / wife
            $table->string('cause_of_death')->nullable();
            $table->string('date_of_death')->nullable();
            $table->dateTime('desired_start_date_time');
            $table->string('cemetery')->nullable();
            $table->string('minister')->nullable();
            $table->string('non_ut')->nullable();
            $table->boolean('certificate_of_death')->default(0)->nullable();
            $table->boolean('burial_permit')->default(0)->nullable();
            $table->boolean('cemetery_lease_contract')->default(0)->nullable();
            $table->string('offering_ordinary')->nullable();
            $table->string('offering_with_mass')->nullable();
            $table->string('offering_candles')->nullable();
            $table->string('offering_lights')->nullable();
            $table->string('offering_video_coverage')->nullable();
            $table->string('offering_choir')->nullable();
            $table->string('offering_cemetery_lot')->nullable();
            $table->string('offering_etc')->nullable();
            $table->dateTime('desired_end_date_time');
            $table->string('contact_number');
            $table->string('address')->nullable();
            $table->longText('message')->nullable();

            $table->boolean('approve')->default(0)->nullable(); // approve appointment
            $table->boolean('reject')->default(0)->nullable(); // reject appointment
            $table->boolean('cancel')->default(0)->nullable(); // cancel appointment
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('burial_schedules');
    }
};
