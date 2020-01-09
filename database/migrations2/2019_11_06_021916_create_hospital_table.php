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
        // Schema::create('hospital', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('medical_ins');
        //     $table->string('medical_ins_eng');
        //     $table->string('url_gen');
        //     $table->string('postal_code');
        //     $table->string('address');
        //     $table->string('address_eng');
        //     $table->string('clinic_appear_image');
        //     $table->string('image_caption');
        //     $table->string('image_alt');
        //     $table->string('inq_phone_no');
        //     $table->string('facsimile');
        //     $table->string('email');
        //     $table->string('url');
        //     $table->string('subheading_w_text');
        //     $table->string('division');
        //     $table->string('medical_subj_list');
        //     $table->string('medical_subj_text');
        //     $table->string('exam_date');
        //     $table->string('subhead_text');
        //     $table->string('sub_image_alt');
        //     $table->string('staff_sub');
        //     $table->string('staff_comment_w_img');
        //     $table->string('hospital_presc');
        //     $table->string('free_med_exp');
        //     $table->string('access');
        //     $table->string('parking');
        //     $table->string('hospitalization');
        //     $table->string('no_beds');
        //     $table->string('poss_date_visit');
        //     $table->string('hospital_service');
        //     $table->string('support_lang');
        //     $table->string('shp_dining_room');
        //     $table->string('credit_card');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital');
    }
}
    