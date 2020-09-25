<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllergyPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allergy_patient', function (Blueprint $table) {
            $table->id();
            $table->foreignId('allergy_id');
            $table->foreignId('patient_id');
            $table->timestamps();

            $table->foreign('allergy_id')->references('id')->on('allergies');
            $table->foreign('patient_id')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allergy_patient');
    }
}
