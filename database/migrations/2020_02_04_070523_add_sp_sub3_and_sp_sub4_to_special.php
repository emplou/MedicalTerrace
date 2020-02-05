<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSpSub3AndSpSub4ToSpecial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('special', function (Blueprint $table) {
            //
            $table->longText('sp_sub3');
            $table->longText('sp_sub4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('special', function (Blueprint $table) {
            //
        });
    }
}
