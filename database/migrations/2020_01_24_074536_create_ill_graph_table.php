<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIllGraphTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ill_graph', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ig_id');
            $table->string('ig_ill_id');
            $table->string('ig_img');
            $table->string('ig_caption');
            $table->string('ig_details');
            $table->string('ig_txt');
            $table->string('ig_alt');
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
        Schema::dropIfExists('ill_graph');
    }
}
