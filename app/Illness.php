<?php

namespace MedicalTerrace;

use Illuminate\Database\Eloquent\Model;

class Illness extends Model
{
    //

    use Notifiable;

    protected $table = 'illness';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'ill_id', 'ill_url', 'ill_shoulder', 'ill_name', 'ill_ph', 'ill_doc', 'ill_doc_role', 'ill_doc_cmt', 'ill_img', 'ill_img_cap', 'ill_img_alt', 'ill_sh1', 'ill_sh2', 'ill_kwords', 'ill_seo', 'ill_seo_txt', 'ill_meta_a', 'ill_meta_b', 'ill_h1', 'ill_h2', 'ill_tag_kw', 'ill_tag_dep', 'ill_tag_symp', 'ill_tag_season', 'ill_tag_season_txt', 'ill_tag_free', 'ill_summary', 'ill_sub_txt', 'ill_cat', 
    ];
}
           