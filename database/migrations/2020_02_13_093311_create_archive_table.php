<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dv_archive', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type'); //types
            $table->string('type_id');
            $table->string('tracking_type'); //tracking numbers
            $table->string('archived_date');
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
        Schema::dropIfExists('dv_archive');
    }
}
