<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIllSub1AndIllSub2ToIllness extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('illness', function (Blueprint $table) {
            //
            $table->string('ill_sub1');
            $table->string('ill_sub2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('illness', function (Blueprint $table) {
            //
        });
    }
}
