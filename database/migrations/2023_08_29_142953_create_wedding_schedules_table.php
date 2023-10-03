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
        Schema::create('wedding_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('first_name');
            $table->string('email');
            $table->string('brides_name');
            $table->string('grooms_name');
            $table->dateTime('desired_start_date_time');
            $table->dateTime('desired_end_date_time');
            $table->string('contact_number');
            $table->string('banns1')->nullable();
            $table->string('banns2')->nullable();
            $table->string('banns3')->nullable();
            $table->string('date_of_interrogation')->nullable();
            $table->string('interrogation_by')->nullable();
            $table->string('pre_nuptial_counseling')->nullable();
            $table->string('nuptial_counseling_at')->nullable();
            $table->string('nuptial_counseling_by')->nullable();
            $table->string('confession_on')->nullable();
            $table->string('confession_at')->nullable();
            $table->string('confession_by')->nullable();
            $table->string('rite_to_be_conducted_in')->nullable();
            $table->boolean('grooms_baptismal_certificate')->default(0)->nullable();
            $table->boolean('brides_baptismal_certificate')->default(0)->nullable();
            $table->boolean('grooms_confirmation_certificate')->default(0)->nullable();
            $table->boolean('brides_confirmation_certificate')->default(0)->nullable();
            $table->string('offering_mariage_fee')->nullable();
            $table->string('offering_sponsors_fee')->nullable();
            $table->string('offering_banns')->nullable();
            $table->string('offering_dispensation')->nullable();
            $table->string('offering_baptism')->nullable();
            $table->string('offering_confirmation')->nullable();
            $table->string('offering_choir')->nullable();
            $table->string('offering_lights')->nullable();
            $table->string('offering_video_coverage')->nullable();
            $table->string('offering_etc')->nullable();
            $table->string('dispense')->nullable();
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
        Schema::dropIfExists('wedding_schedules');
    }
};
