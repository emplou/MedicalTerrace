<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dv_hospital', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hospital_id');
            $table->string('url');
            $table->string('name');
            $table->string('name_phonic');
            $table->string('common_name');
            $table->string('postal_code');
            $table->string('address');
            $table->string('address_eng');
            $table->string('parking');
            $table->string('image');
            $table->string('img_caption');
            $table->string('img_alt');
            $table->string('phone_no');
            $table->string('fax');
            $table->string('email');
            $table->string('medinscatchtext');
            $table->string('division');
            $table->string('medsublist');
            $table->string('hosp_subheading');
            $table->string('hosp_text_subheading');
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
        Schema::dropIfExists('dv_hospital');
    }
}
