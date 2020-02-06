<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIllnessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('illness', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ill_id');
            $table->string('ill_url');
            $table->string('ill_shoulder');
            $table->string('ill_name');
            $table->string('ill_ph');
            $table->string('ill_doc');
            $table->string('ill_doc_role');
            $table->string('ill_doc_cmt');
            $table->string('ill_img');
            $table->string('ill_img_cap');
            $table->string('ill_img_alt');
            $table->string('ill_kwords');
            $table->string('ill_seo');
            $table->string('ill_seo_txt');
            $table->string('ill_meta_a');
            $table->string('ill_meta_b');
            $table->string('ill_h1');
            $table->string('ill_h2');
            $table->string('ill_tag_kw');
            $table->longText('ill_tag_dep');
            $table->string('ill_tag_symp');
            $table->longText('ill_tag_season');
            $table->string('ill_tag_season_txt');
            $table->string('ill_tag_free');
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
        Schema::dropIfExists('illness');
    }
}
