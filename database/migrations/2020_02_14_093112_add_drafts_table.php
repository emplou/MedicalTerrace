<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('dv_drafts', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('source_name');
        //     $table->string('source_description');
        //     $table->string('date_drafts');
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
        Schema::table('dv_drafts', function (Blueprint $table) {
            //
        });
    }
}
