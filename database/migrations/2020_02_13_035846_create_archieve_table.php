<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchieveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archieve', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('source');
            $table->string('module');
            $table->string('mod_id');
            $table->string('type');
            $table->string('arc_date');
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
        Schema::dropIfExists('archieve');
    }
}
