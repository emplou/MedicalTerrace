<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospDptSpecialHours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosp_dpt_special_hours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dpt_id');
            $table->string('from');
            $table->string('to');
            $table->string('start');
            $table->string('weekdays');
            $table->string('treatment_name');
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
        Schema::dropIfExists('hosp_dpt_special_hours');
    }
}
