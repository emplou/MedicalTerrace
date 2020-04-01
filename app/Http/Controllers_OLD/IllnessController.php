<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Special;
use App\il_lead;

class Illness extends Controller
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

        $destinationPath = public_path().'/il_img';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
        /* end of clinic image */

        $special = new Special;
        $special->il_url               = $details['url'];
        $special->il_mag               = $details['magazine'];
        $special->il_ill_cat           = $details['ill_cat'];
        $special->il_cat               = $details['il_cat'];
        $special->il_title_shldr       = $details['sts'];
        $special->il_title             = $details['st'];
        $special->il_doc               = $details['doctor'];
        $special->il_doc_tsk           = $details['tsk'];
        $special->il_doc_cmt           = $details['cmt'];
        $special->il_img               = '/il_img/'.$filename; 
        $special->il_img_cap           = $details['img_cap'];
        $special->il_img_alt           = $details['img_alt'];
        $special->il_seo_box           = $details['seo'];
        $special->il_seo_txt           = $details['seo_txt'];
        $special->il_seo_desc          = $details['meta_txt1'];
        $special->il_seo_desc2         = $details['meta_txt2']; 
        $special->il_h1                = $details['h1'];
        $special->il_h2                = $details['h2']; //it should be json script when added
        $special->il_tag_kw            = $details['tag']; //it should be json script when added
        $special->il_tag_ill           = $details['tag_b[]']; //it should be json script when added
        $special->il_tag_dep           = $details['tag_dep']; //it should be json script when added
        $special->il_tag_symp          = $details['tag_sy']; //it should be json script when added
        $special->il_tag_season        = $details['tag_s[]']; //it should be json script when added
        $special->il_tag_season_txt    = $details['tag_txt[]']; //it should be json script when added
        $special->il_tag_free          = $details['tag_f[]']; //it should be json script when added
        $special->il_editor            = $details['il_editor']; 
        $special->il_cov_date          = $details['c1'].$details['c2'].$details['c3']; /
        $special->il_hono              = $details['hono']; //it should be json script when added
        $special->il_note              = $details['note']; //it should be json script when added
        $special->save();

        $lead = new il_lead;
        $lead->il_id                   = $special->id; // should be json
        $lead->text                    = $details['lead_creditor']; //should be json
        $lead->save();

        return redirect::back()->with('message','Successfully Encoded');
    }
}
