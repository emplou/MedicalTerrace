<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    //

    use Notifiable;

    protected $table = 'special';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'sp_url', 'sp_mag', 'sp_ill_cat', 'sp_cat', 'sp_title_shldr', 'sp_title', 'sp_doc', 'sp_doc_tsk', 'sp_doc_cmt', 'sp_img', 'sp_img_cap', 'sp_img_alt', 'sp_seo_box', 'sp_seo_txt', 'sp_seo_desc', 'sp_seo_desc2', 'sp_h1', 'sp_h2', 'sp_tag_kw', 'sp_tag_ill', 'sp_tag_dep', 'sp_tag_symp', 'sp_tag_season', 'sp_tag_free', 'sp_editor', 'sp_cov_date', 'sp_hono', 'sp_note',
    ];
}