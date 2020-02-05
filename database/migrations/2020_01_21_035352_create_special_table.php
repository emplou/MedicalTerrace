<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sp_url');
            $table->string('sp_mag');
            $table->string('sp_ill_cat');
            $table->string('sp_cat');
            $table->string('sp_title_shldr');
            $table->string('sp_title');
            $table->string('sp_doc');
            $table->string('sp_doc_tsk');
            $table->string('sp_doc_cmt');
            $table->string('sp_img');
            $table->string('sp_img_cap');
            $table->string('sp_img_alt');
            $table->string('sp_seo_txt');
            $table->string('sp_seo_desc');
            $table->string('sp_seo_desc2');
            $table->string('sp_h1');
            $table->longText('sp_h2');
            $table->longText('sp_tag_kw');
            $table->longText('sp_tag_ill');
            $table->longText('sp_tag_dep');
            $table->longText('sp_tag_symp');
            $table->longText('sp_tag_season');
            $table->longText('sp_tag_free');
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
        Schema::dropIfExists('special');
    }
}
