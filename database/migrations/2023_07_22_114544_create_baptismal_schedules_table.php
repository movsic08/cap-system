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
        Schema::create('baptismal_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('email');
            $table->string('childs_name');
            $table->dateTime('desired_start_date_time');
            $table->dateTime('desired_end_date_time');
            $table->string('mothers_name');
            $table->string('mothers_contact_number');
            $table->string('fathers_name');
            $table->string('fathers_contact_number');
            $table->string('address');
            $table->longText('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baptismal_schedules');
    }
};
