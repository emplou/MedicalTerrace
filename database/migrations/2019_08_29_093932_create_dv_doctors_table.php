<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDvDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dv_doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url_generation');
            $table->integer('status');
            $table->string('certificate');
            $table->string('name');
            $table->string('alphabet_name');
            $table->string('image', null);
            $table->string('image_caption');
            $table->string('image_alt');
            $table->string('industry');
            $table->string('conference');
            $table->string('birthday');
            $table->string('place_of_birth');
            $table->string('career_academic_back');
            $table->string('career_work_exp');
            $table->string('career_awards');
            $table->string('sort_career');
            $table->string('hospital_office');
            $table->string('department');
            $table->longText('doctor_comment');
            // $table->string('email');
            // $table->string('license_file');
            // $table->string('registration_certificate');
            // $table->string('family_structure');
            // $table->longText('hobby');
            // $table->longText('Inscription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dv_doctors');
    }
}
