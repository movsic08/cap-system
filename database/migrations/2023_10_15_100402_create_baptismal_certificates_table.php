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
        Schema::create('baptismal_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('email');
            $table->string('childs_name');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('place_of_birth');
            $table->string('childs_birthdate');
            $table->string('baptism_date');
            $table->string('baptized_by');
            $table->longText('sponsors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baptismal_certificates');
    }
};
