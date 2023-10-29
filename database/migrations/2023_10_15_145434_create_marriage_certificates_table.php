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
        Schema::create('marriage_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('email');
            $table->string('grooms_name');
            $table->string('brides_name');
            $table->string('brides_father');
            $table->string('brides_mother');
            $table->string('grooms_father');
            $table->string('grooms_mother');
            $table->string('grooms_age');
            $table->string('brides_age');
            $table->string('marriage_date');
            $table->string('officiated_by');
            $table->longText('sponsors');

            $table->boolean('approve')->default(0)->nullable(); // approve request certificate
            $table->boolean('reject')->default(0)->nullable(); // reject requested certificate
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriage_certificates');
    }
};
