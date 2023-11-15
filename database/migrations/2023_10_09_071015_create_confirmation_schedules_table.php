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
        Schema::create('confirmation_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('first_name');
            $table->string('email');
            $table->string('confirmation_name');
            $table->date('confirmation_date');
            $table->date('date_of_baptism');
            $table->string('mother_name');
            $table->string('father_name');
            $table->longText('desired_date');
            $table->longText('desired_time');
            $table->string('residence_of_parents')->nullable();
            $table->string('place_of_baptism')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('contact_number');
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
        Schema::dropIfExists('confirmation_schedules');
    }
};
