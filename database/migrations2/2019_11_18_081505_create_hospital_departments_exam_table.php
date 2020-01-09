<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalDepartmentsExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_departments_exam', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dpt_id');
            $table->string('from');
            $table->string('to');
            $table->string('start');
            $table->string('days');
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
        Schema::dropIfExists('hospital_departments_exam');
    }
}
