<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Special;
use App\Sp_lead;

class Special extends Controller
{
    //add
    public function index(){
    	return view('special');
    }

    public function save_special(){

        $details = Input::all();

        /* image */
        $destinationPath = '';
        $filename        = '';
        $file            = $request->file('img');

        $destinationPath = public_path().'/sp_img';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
        /* end of clinic image */

        $special = new Special;
        $special->sp_url               = $details['url'];
        $special->sp_mag               = $details['magazine'];
        $special->sp_ill_cat           = $details['ill_cat'];
        $special->sp_cat               = $details['sp_cat'];
        $special->sp_title_shldr       = $details['sts'];
        $special->sp_title             = $details['st'];
        $special->sp_doc               = $details['doctor'];
        $special->sp_doc_tsk           = $details['tsk'];
        $special->sp_doc_cmt           = $details['cmt'];
        $special->sp_img               = '/sp_img/'.$filename; 
        $special->sp_img_cap           = $details['img_cap'];
        $special->sp_img_alt           = $details['img_alt'];
        $special->sp_seo_box           = $details['seo'];
        $special->sp_seo_txt           = $details['seo_txt'];
        $special->sp_seo_desc          = $details['meta_txt1'];
        $special->sp_seo_desc2         = $details['meta_txt2']; 
        $special->sp_h1                = $details['h1'];
        $special->sp_h2                = $details['h2']; //it should be json script when added
        $special->sp_tag_kw            = $details['tag']; //it should be json script when added
        $special->sp_tag_ill           = $details['tag_b[]']; //it should be json script when added
        $special->sp_tag_dep           = $details['tag_dep']; //it should be json script when added
        $special->sp_tag_symp          = $details['tag_sy']; //it should be json script when added
        $special->sp_tag_season        = $details['tag_s[]']; //it should be json script when added
        $special->sp_tag_season_txt    = $details['tag_txt[]']; //it should be json script when added
        $special->sp_tag_free          = $details['tag_f[]']; //it should be json script when added
        $special->sp_editor            = $details['sp_editor']; 
        $special->sp_cov_date          = $details['c1'].$details['c2'].$details['c3']; /
        $special->sp_hono              = $details['hono']; //it should be json script when added
        $special->sp_note              = $details['note']; //it should be json script when added
        $special->save();

        $lead = new Sp_lead;
        $lead->sp_id                   = $special->id; // should be json
        $lead->text                    = $details['lead_creditor']; //should be json
        $lead->save();

        return redirect::back()->with('message','Successfully Encoded');
    }
}
