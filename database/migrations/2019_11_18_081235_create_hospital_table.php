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
            $table->string('medical_ins');
            $table->string('name_phonic');
            $table->string('common_name');
            $table->string('postal_code');
            $table->string('address');
            $table->string('address_eng');
            $table->longText('branch_address_w_eng');
            $table->string('access');
            $table->string('parking');
            $table->string('phone_no');
            $table->string('fax');
            $table->string('email');
            $table->string('image');
            $table->string('image_caption');
            $table->string('image_alt');
            $table->string('hosp_subheading');
            $table->string('hosp_text_subheading');
            $table->string('division');
            $table->string('medsublist');
            $table->string('url_hosp');
            $table->string('in_hospital_pres');
            $table->longText('free_med_exp');
            $table->longText('hospitalization');
            $table->longText('no_of_beds');
            $table->longText('possible_date_of_visit');
<<<<<<< HEAD
            $table->integer('support_lang');
            $table->integer('shop_dining_room');
=======
            $table->string('support_lang');
            $table->string('shop_dining_room');
>>>>>>> e849eef... separate per page
            $table->longText('credit_card_payment');
            $table->integer('tracking_status');
            $table->integer('author');
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
