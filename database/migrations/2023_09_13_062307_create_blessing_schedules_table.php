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
        Schema::create('blessing_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('first_name');
            $table->string('email');
            $table->string('blessing_for');
            $table->dateTime('desired_start_date_time');
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
        Schema::dropIfExists('blessing_schedules');
    }
};
