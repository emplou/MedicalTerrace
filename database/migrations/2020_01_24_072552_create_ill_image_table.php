<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIllImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ill_image', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('im_id');
            $table->string('im_ill_id');
            $table->string('im_file');
            $table->string('im_caption');
            $table->string('im_alt');
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
        Schema::dropIfExists('ill_image');
    }
}
