<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPreviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dv_preview', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('type_id');
            $table->string('date_preview');
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
        Schema::table('dv_preview', function (Blueprint $table) {
            //
        });
    }
}
