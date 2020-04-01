<?php

namespace MedicalTerrace\Http\Controllers;

use Illuminate\Http\Request;
// use App\Illness_Category;
use Auth;
use MedicalTerrace\Doctor;
use MedicalTerrace\Hospital;
use MedicalTerrace\Department;
use MedicalTerrace\DepartmentExam;
use MedicalTerrace\Feature;
use MedicalTerrace\Equipments;
use MedicalTerrace\Staff;
use MedicalTerrace\Illness;
use MedicalTerrace\Ill_image;
use MedicalTerrace\Ill_graph;
use MedicalTerrace\Risk_assessment;
use MedicalTerrace\Special;
use MedicalTerrace\Illness_archive;
use MedicalTerrace\Drafts;
use MedicalTerrace\ApprovalRequest;
use MedicalTerrace\Approved;
use MedicalTerrace\ReleaseReservation;
use MedicalTerrace\Release;
use MedicalTerrace\Archive;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class SpecialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save_special(Request $request){

        $details = Input::all();

        $special_id = rand();

        /* special image */
        $destinationPath = '';
        $filename        = '';
        $file            = $request->file('img');

        $destinationPath = public_path().'/special';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
        /* end of special image */

        // lead ckeditor
        $lead_list = $details['lead_ckeditor']; 
        $response = array();
        foreach($lead_list as $key1 => $cert1)
        {
            $response[$key1]['lead_ckeditor'] = $cert1;
        }
        $jsonlead_list = json_encode($response); 

        // subheading and Text
        $sub_head1a = $details['sub_head1a']; 
        $sub_head1b = $details['sub_head1b']; 
        $txt_ckeditor = $details['txt_ckeditor'];  
        $response_txt = array();
        foreach($sub_head1a as $key => $sub_head)
        {
        $response_txt[$key]['heading'] = $sub_head;
        $response_txt[$key]['sub'] = $sub_head1b[$key];
        $response_txt[$key]['txt_ckeditor'] = $txt_ckeditor[$key];
        }
        $jsoncontent = json_encode($response_txt); 

        // Ill Image
        $pos_list = $details['pos_ill']; 
        $response2 = array();
        foreach($pos_list as $key2 => $cert2)
        {
            $response2[$key2]['pos_ill'] = $cert2;
        }
        $jsonpos_list = json_encode($response2); 

        // subheading and Text
        $sub_head2a = $details['sub_head2a']; 
        $sub_head2b = $details['sub_head2b']; 
        $txt2_ckeditor = $details['txt2_ckeditor'];  
        $response_txt2 = array();
        foreach($sub_head2a as $key => $sub_head)
        {
        $response_txt2[$key]['heading'] = $sub_head;
        $response_txt2[$key]['sub'] = $sub_head2b[$key];
        $response_txt2[$key]['txt_ckeditor'] = $txt2_ckeditor[$key];
        }
        $jsoncontent2 = json_encode($response_txt2); 

        // seo keywords
        $k_list = $details['kword']; 
        $response3 = array();
        foreach($k_list as $key3 => $cert3)
        {
            $response3[$key3]['kword'] = $cert3;
        }
        $jsonk_list = json_encode($response3); 

        // h2
        $h2_list = $details['h2']; 
        $response4 = array();
        foreach($h2_list as $key4 => $cert4)
        {
            $response4[$key4]['h2'] = $cert4;
        }
        $jsonh2_list = json_encode($response4); 

        // tag
        $tag_list = $details['tag_ch']; 
        $response5 = array();
        foreach($tag_list as $key5 => $cert5)
        {
            $response5[$key5]['tag_ch'] = isset($cert5) ? 1 : 0;
        }
        $jsontag_list = json_encode($response5); 

        // tag illness
        $till_list = $details['tag_ill']; 
        $response6 = array();
        foreach($till_list as $key6 => $cert6)
        {
            $response6[$key6]['tag_ill'] = $cert6;
        }
        $jsontill_list = json_encode($response6); 

        // tag department
        $dep_list = $details['tag_dep']; 
        $response7 = array();
        foreach($dep_list as $key7 => $cert7)
        {
            $response7[$key7]['tag_dep'] = $cert7;
        }
        $jsondep_list = json_encode($response7); 

        // tag symptoms
        $sy_list = $details['tag_sy']; 
        $response8 = array();
        foreach($sy_list as $key8 => $cert8)
        {
            $response8[$key8]['tag_sy'] = $cert8;
        }
        $jsonsy_list = json_encode($response8); 

        // tag season
        $s_list = $details['tag_s']; 
        $response9 = array();
        foreach($s_list as $key9 => $cert9)
        {
            $response9[$key9]['tag_s'] = $cert9;
        }
        $jsons_list = json_encode($response9); 

        // tag text
        $txt_list = $details['tag_txt']; 
        $response10 = array();
        foreach($txt_list as $key10 => $cert10)
        {
            $response10[$key10]['tag_txt'] = $cert10;
        }
        $jsontxt_list = json_encode($response10);

        // tag text
        $f_list = $details['tag_f']; 
        $response11 = array();
        foreach($f_list as $key11 => $cert11)
        {
            $response11[$key11]['tag_f'] = $cert11;
        }
        $jsonf_list = json_encode($response11);
 
        //Special
        $special = new Special;
        $special->sp_id                = $special_id;
        $special->sp_url               = $details['url'];
        $special->sp_mag               = $details['magazine'];
        $special->sp_ill_cat           = $details['ill_cat'];
        $special->sp_cat               = $details['sp_cat'];
        $special->sp_title_shldr       = $details['sts'];
        $special->sp_title             = $details['st'];
        $special->sp_doc               = $details['doctor'];
        $special->sp_doc_tsk           = $details['role'];
        $special->sp_doc_cmt           = $details['cmt']; 
        $special->sp_img               = '/special/'.$filename; //special image
        $special->sp_img_cap           = $details['img_cap'];
        $special->sp_img_alt           = $details['img_alt'];
        $special->sp_txt               = $jsonlead_list; //it should be json script when added
        $special->sp_sum               = $jsoncontent; //it should be json script when added
        $special->sp_ill_img           = $jsonpos_list;//it should be json script when added
        $special->sp_sum2              = $jsoncontent2; //it should be json script when added
        $special->sp_seo_kwords        = $jsonk_list; //it should be json script when added
        $special->seo_title            = isset($details['seo']) ? 1 : 0;
        $special->sp_seo_txt           = $details['seo_txt'];
        $special->sp_seo_desc          = $details['meta_txt1'];
        $special->sp_seo_desc2         = $details['meta_txt2'];
        $special->sp_h1                = $details['h1'];
        $special->sp_h2                = $jsonh2_list; //it should be json script when added
        $special->sp_tag_kw            = $jsontag_list; //it should be json script when added
        $special->sp_tag_ill           = $jsontill_list; //it should be json script when added
        $special->sp_tag_dep           = $jsondep_list; //it should be json script when added
        $special->sp_tag_symp          = $jsonsy_list; //it should be json script when added
        $special->sp_tag_season        = $jsons_list; //it should be json script when added
        $special->sp_ta_season_txt     = $jsontxt_list; //it should be json script when added
        $special->sp_tag_free          = $jsonf_list; //it should be json script when added$illness->status    
        $special->tracking_status      = '3';
        $special->save();

        $now = date('Y-m-d H:i'); //Fomat Date and time

        $archive = new Archive;
        $archive->type              = '3';
        $archive->type_id           = $special->id;
        $archive->tracking_type     = '1';
        $archive->archived_date     = $now;  
        $archive->save();
        
        return redirect('/special_list');
    }

    public function modal_edit_special($id){
        $value['data'] = DB::table('special')->where('id','=',$id)->get();
        $value['doc'] = DB::table('dv_doctors')->get();
        $value['ill'] = DB::table('illness')->get();
        $value['dpt'] = DB::table('hospital_departments')->get();
        $value['arch'] = DB::table('dv_archive')->where('type_id','=',$id)
                                                    ->where('type','=','3')
                                                    ->get();
        $fetch = json_encode($value);
        return $fetch;
        // return $value;
    }

    //Approve Request Special Preview
    public function approve_request_special(Request $request){
        $details = Input::all();

        $special = DB::table('special')
                                    ->where('id','=', $details['id_sp'])
                                    ->update([
                                                'tracking_status'               => '3',
                                            ]);
        $date = date('Y-m-d');
        $appReq = new ApprovalRequest;
        $appReq->type                   = '3';
        $appReq->type_id                = $details['id_sp'];
        $appReq->date_approval_request  = $date;
        $appReq->save();

        $archive = new Archive;
        $archive->type                  = '3';
        $archive->type_id               = $details['id_sp'];
        $archive->tracking_type         = '3';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/special_list');
       
    }

    //Approve Special Preview
    public function approve_special(Request $request){
        $details = Input::all();

        $special = DB::table('special')
                                    ->where('id','=', $details['id_sp'])
                                    ->update([
                                                'tracking_status'               => '4',
                                            ]);
        $date = date('Y-m-d');
        $approve = new ApprovalRequest;
        $approve->type                   = '3';
        $approve->type_id                = $details['id_sp'];
        $approve->date_approval_request  = $date;
        $approve->save();

        $archive = new Archive;
        $archive->type                  = '3';
        $archive->type_id               = $details['id_sp'];
        $archive->tracking_type         = '4';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/special_list');
       
    }

    //Release Reservation Special
    public function release_reservation_special(Request $request){
        $details = Input::all();

        $special = DB::table('special')
                                    ->where('id','=', $details['id'])
                                    ->update([
                                                'tracking_status'               => '5',
                                            ]);
        $date = date('Y-m-d');
        $relres = new ApprovalRequest;
        $relres->type                   = '3';
        $relres->type_id                = $details['id'];
        $relres->date_approval_request  = $date;
        $relres->save();

        $archive = new Archive;
        $archive->type                  = '3';
        $archive->type_id               = $details['id'];
        $archive->tracking_type         = '5';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/special_list');
    }

    //Release Special
    public function release_special(Request $request){
        $details = Input::all();

        $special = DB::table('special')
                                    ->where('id','=', $details['id'])
                                    ->update([
                                                'tracking_status'               => '6',
                                            ]);
        $date = date('Y-m-d');
        $release = new ApprovalRequest;
        $release->type                   = '3';
        $release->type_id                = $details['id'];
        $release->date_approval_request  = $date;
        $release->save();

        $archive = new Archive;
        $archive->type                  = '3';
        $archive->type_id               = $details['id'];
        $archive->tracking_type         = '6';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/special_list');
    }

    //Overwrite Special
    public function overwrite_special(Request $request){
        $details = Input::all();

        /* special image */
        // $destinationPath = '';
        // $filename        = '';
        // $file            = $request->file('img');

        // $destinationPath = public_path().'/special';
        // $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        // $uploadSuccess   = $file->move($destinationPath, $filename);
        /* end of special image */

        // lead ckeditor
        $lead_list = $details['lead_ckeditor']; 
        $response = array();
        foreach($lead_list as $key1 => $cert1)
        {
            $response[$key1]['lead_ckeditor'] = $cert1;
        }
        $jsonlead_list = json_encode($response); 

        // subheading and Text
        $sub_head1a = $details['sub_head1a']; 
        $sub_head1b = $details['sub_head1b']; 
        $txt_ckeditor = $details['txt_ckeditor'];  
        $response_txt = array();
        foreach($sub_head1a as $key => $sub_head)
        {
        $response_txt[$key]['heading'] = $sub_head;
        $response_txt[$key]['sub'] = $sub_head1b[$key];
        $response_txt[$key]['txt_ckeditor'] = $txt_ckeditor[$key];
        }
        $jsoncontent = json_encode($response_txt); 

        // Ill Image
        $pos_list = $details['pos_ill']; 
        $response2 = array();
        foreach($pos_list as $key2 => $cert2)
        {
            $response2[$key2]['pos_ill'] = $cert2;
        }
        $jsonpos_list = json_encode($response2); 

        // subheading and Text
        $sub_head2a = $details['sub_head2a']; 
        $sub_head2b = $details['sub_head2b']; 
        $txt2_ckeditor = $details['txt2_ckeditor'];  
        $response_txt2 = array();
        foreach($sub_head2a as $key => $sub_head)
        {
        $response_txt2[$key]['heading'] = $sub_head;
        $response_txt2[$key]['sub'] = $sub_head2b[$key];
        $response_txt2[$key]['txt_ckeditor'] = $txt2_ckeditor[$key];
        }
        $jsoncontent2 = json_encode($response_txt2); 

        // seo keywords
        $k_list = $details['kword']; 
        $response3 = array();
        foreach($k_list as $key3 => $cert3)
        {
            $response3[$key3]['kword'] = $cert3;
        }
        $jsonk_list = json_encode($response3); 

        // h2
        $h2_list = $details['h2']; 
        $response4 = array();
        foreach($h2_list as $key4 => $cert4)
        {
            $response4[$key4]['h2'] = $cert4;
        }
        $jsonh2_list = json_encode($response4); 

        // tag
        $tag_list = $details['tag_ch']; 
        $response5 = array();
        foreach($tag_list as $key5 => $cert5)
        {
            $response5[$key5]['tag_ch'] = isset($cert5) ? 1 : 0;
        }
        $jsontag_list = json_encode($response5); 

        // tag illness
        $till_list = $details['tag_ill']; 
        $response6 = array();
        foreach($till_list as $key6 => $cert6)
        {
            $response6[$key6]['tag_ill'] = $cert6;
        }
        $jsontill_list = json_encode($response6); 

        // tag department
        $dep_list = $details['tag_dep']; 
        $response7 = array();
        foreach($dep_list as $key7 => $cert7)
        {
            $response7[$key7]['tag_dep'] = $cert7;
        }
        $jsondep_list = json_encode($response7); 

        // tag symptoms
        $sy_list = $details['tag_sy']; 
        $response8 = array();
        foreach($sy_list as $key8 => $cert8)
        {
            $response8[$key8]['tag_sy'] = $cert8;
        }
        $jsonsy_list = json_encode($response8); 

        // tag season
        $s_list = $details['tag_s']; 
        $response9 = array();
        foreach($s_list as $key9 => $cert9)
        {
            $response9[$key9]['tag_s'] = $cert9;
        }
        $jsons_list = json_encode($response9); 

        // tag text
        $txt_list = $details['tag_txt']; 
        $response10 = array();
        foreach($txt_list as $key10 => $cert10)
        {
            $response10[$key10]['tag_txt'] = $cert10;
        }
        $jsontxt_list = json_encode($response10);

        // tag free
        $f_list = $details['tag_f']; 
        $response11 = array();
        foreach($f_list as $key11 => $cert11)
        {
            $response11[$key11]['tag_f'] = $cert11;
        }
        $jsonf_list = json_encode($response11);
        $spID = $details['spID'];

        $special = DB::table('special')
                                    ->where('id','=', $details['spID'])
                                    ->update([
                                                'sp_url'                => $details['url'],
                                                'sp_mag'                => $details['magazine'],
                                                'sp_ill_cat'            => $details['ill_cat'],
                                                'sp_cat'                => $details['sp_cat'],
                                                'sp_title_shldr'        => $details['sts'],
                                                'sp_title'              => $details['st'],
                                                'sp_doc'                => $details['doctor'],
                                                'sp_doc_tsk'            => $details['role'],
                                                'sp_doc_cmt'            => $details['cmt'],
                                                //'sp_img'                => '/img/'.$filename,
                                                'sp_img_cap'            => $details['img_cap'],
                                                'sp_img_alt'            => $details['img_alt'],
                                                'sp_txt'                => $jsonlead_list,
                                                'sp_sum'                => $jsoncontent,
                                                'sp_ill_img'            => $jsonpos_list,
                                                'sp_sum2'               => $jsoncontent2,
                                                'sp_seo_kwords'         => $jsonk_list,
                                                'seo_title'             => $details['seo'],
                                                'sp_seo_txt'            => $details['seo_txt'],
                                                'sp_seo_desc'           => $details['meta_txt1'],
                                                'sp_seo_desc2'          => $details['meta_txt2'],
                                                'sp_h1'                 => $details['h1'],
                                                'sp_h2'                 => $jsonh2_list,
                                                'sp_tag_kw'             => $jsontag_list,
                                                'sp_tag_ill'            => $jsontill_list,
                                                'sp_tag_dep'            => $jsondep_list,
                                                'sp_tag_symp'           => $jsonsy_list,
                                                'sp_tag_season'         => $jsons_list,
                                                'sp_ta_season_txt'      => $jsontxt_list,
                                                'sp_tag_free'           => $jsonf_list,
                                            ]);

        return redirect('/special_list');
    }
}
