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

class IllnessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save_illness(Request $request){

        $details = Input::all();

        //dd($details);
        $illness_id = rand();
        $ill_img_id = rand();
        $ill_gr_id = rand();

        /* illness image */
        $destinationPath = '';
        $filename        = '';
        $file            = $request->file('img');

        $destinationPath = public_path().'/illness';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
        /* end of illness image */

        // description summary
        $sum_list = $details['sm']; 
        $response = array();
        foreach($sum_list as $key1 => $cert1)
        {
            $response[$key1]['sm'] = $cert1;
        }
        $jsonsum_list = json_encode($response); 

        // h2
        $h2_list = $details['h2']; 
        $response2 = array();
        foreach($h2_list as $key2 => $cert2)
        {
            $response2[$key2]['h2'] = $cert2;
        }
        $jsonh2_list = json_encode($response2);
        
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

        // tag
        $tag_list = $details['tag']; 
        $response3 = array();
        foreach($tag_list as $key3 => $cert3)
        {
            $response3[$key3]['tag'] = $cert3;
        }
        $jsontag_list = json_encode($response3); 

        // tag department
        $dep_list = $details['tag_dep']; 
        $response4 = array();
        foreach($dep_list as $key4 => $cert4)
        {
            $response4[$key4]['tag_dep'] = $cert4;
        }
        $jsondep_list = json_encode($response4); 

        // tag symptoms
        $sy_list = $details['tag_sy']; 
        $response5 = array();
        foreach($sy_list as $key5 => $cert5)
        {
            $response5[$key5]['tag_sy'] = $cert5;
        }
        $jsonsy_list = json_encode($response5);

        // tag season
        $s_list = $details['tag_s']; 
        $response6 = array();
        foreach($s_list as $key6 => $cert6)
        {
            $response6[$key6]['tag_s'] = $cert6;
        }
        $jsons_list = json_encode($response6); 

        // tag season text
        $stxt_list = $details['tag_txt']; 
        $response7 = array();
        foreach($stxt_list as $key7 => $cert7)
        {
            $response7[$key7]['tag_txt'] = $cert7;
        }
        $jsonstxt_list = json_encode($response7); 

        // tag free
        $f_list = $details['tag_f']; 
        $response8 = array();
        foreach($f_list as $key8 => $cert8)
        {
            $response8[$key8]['tag_f'] = $cert8;
        }
        $jsonf_list = json_encode($response8); 

        // keywords
        $k_list = $details['kword']; 
        $response12 = array();
        foreach($k_list as $key12 => $cert12)
        {
            $response12[$key12]['kword'] = $cert12;
        }
        $jsonk_list = json_encode($response12); 
        
        //Illness
        $illness = new Illness;
        $illness->ill_id                = $illness_id;
        $illness->ill_url               = $details['url'];
        $illness->ill_cat               = $details['ill_cat'];
        $illness->ill_shoulder          = $details['ill_shldr'];
        $illness->ill_name              = $details['ill'];
        $illness->ill_ph                = $details['ill_ph'];
        $illness->ill_magazine          = $details['magazine'];
        $illness->ill_doc               = $details['doctor'];
        $illness->ill_doc_role          = $details['role'];
        $illness->ill_doc_cmt           = $details['doc_cmt']; 
        $illness->ill_summary           = $jsonsum_list; //it should be json script when added
        $illness->ill_img               = '/illness/'.$filename; //illness image
        $illness->ill_img_cap           = $details['img_cap'];
        $illness->ill_img_alt           = $details['img_alt'];
        $illness->ill_sub_txt           = $jsoncontent; //it should be json script when added
        $illness->ill_kwords            = $jsonk_list;
        $illness->ill_seo               = isset($details['seo']) ? 1 : 0;
        $illness->ill_seo_txt           = $details['seo_txt'];
        $illness->ill_meta_a            = $details['meta_txt1'];
        $illness->ill_meta_b            = $details['meta_txt2'];
        $illness->ill_tag_name          = isset($details['tag_b']) ? 1 : 0;
        $illness->ill_h1                = $details['h1'];
        $illness->ill_h2                = $jsonh2_list; //it should be json script when added
        $illness->ill_tag_kw            = $jsontag_list; //it should be json script when added
        $illness->ill_tag_dep           = $jsondep_list; // added division and medical subject list and field
        $illness->ill_tag_symp          = $jsonsy_list; // added division and medical subject list and field
        $illness->ill_tag_season        = $jsons_list; // added division and medical subject list and field
        $illness->ill_tag_season_txt    = $jsonstxt_list; // added division and medical subject list and field
        $illness->ill_tag_free          = $jsonf_list; // added division and medical subject list and field
        $illness->tracking_status      = '3';
        $illness->save();

        $now = date('Y-m-d'); //Fomat Date and time

        $archive = new Archive;
        $archive->type              = '4';
        $archive->type_id           = $illness->id;
        $archive->tracking_type     = '3';
        $archive->archived_date     = $now;  
        $archive->save();

        //newly inserted illness id
        //$id = $illness->ill_id;


        // $destinationPathImg     = '';
        // $filename_img           = '';
        // $file_img               = $request->file('img2');

        // $destinationPathImg  = public_path().'/illness/image';
        // $filename_img        = str_random(6) . '_' . $file_img->getClientOriginalName();
        // $uploadSuccess   = $file_img->move($destinationPathImg, $filename_img);
        
        //Illness Image
        // $ill_image = new Ill_image;
        // $ill_image->im_id               = $ill_img_id;
        // $ill_image->im_ill_id           = $illness_id;
        // $ill_image->im_file             = $details['img2'];
        // $ill_image->im_caption          = $details['img_cap2'];
        // $ill_image->im_alt              = $details['img_alt2'];
        // $ill_image->save();

        // $destinationPathGraph   = '';
        // $filename_graph         = '';
        // $file_graph             = $request->file('g_img');

        // $destinationPathGraph  = public_path().'/illness/graph';
        // $filename_graph        = str_random(6) . '_' . $file_graph->getClientOriginalName();
        // $uploadSuccess   = $file_graph->move($destinationPathGraph, $filename_graph);

        //Illness Graph
        // $ill_graph = new Ill_graph;
        // $ill_graph->ig_id               = $ill_gr_id;
        // $ill_graph->ig_ill_id           = $illness_id;
        // $ill_graph->ig_title            = $details['g_title'];
        // $ill_graph->ig_img              = $details['g_img'];
        // $ill_graph->ig_details          = $details['gd'];  
        // $ill_graph->ig_txt              = $details['g_txt'];
        // $ill_graph->ig_alt              = $details['g_alt'];
        // $ill_graph->save();

        // text and risk level
        $sh = $details['sh']; 
        $rl = $details['rl']; 
        $response_risk = array();
        foreach($sh as $key => $sh)
        {
        $response_risk[$key]['sh'] = $sh;
        $response_risk[$key]['rl'] = $rl[$key];
        }
        $jsonrskTxt = json_encode($response_risk); 

        // check result
        $cr_list = $details['cr']; 
        $response11 = array();
        foreach($cr_list as $key11 => $cert11)
        {
            $response11[$key11]['cr'] = $cert11;
        }
        $jsoncr_list = json_encode($response11); 

        //Risk Assessment
        if($details['subheading-chck'] == 1){
            $risk_assess = new Risk_assessment;
            $risk_assess->ra_ill_id           = $illness_id;
            $risk_assess->ra_title            = $details['subheading-chck'];
            $risk_assess->ra_text             = $jsonrskTxt;
            $risk_assess->ra_result           = $jsoncr_list;  
            $risk_assess->ra_status           = '1';  
            $risk_assess->save();
        }

        // text and risk level
        $sh2 = $details['sh2']; 
        $rl2 = $details['rl2']; 
        $response_risk2 = array();
        foreach($sh2 as $key => $sh2)
        {
        $response_risk2[$key]['sh2'] = $sh2;
        $response_risk2[$key]['rl2'] = $rl2[$key];
        }
        $jsonrskTxt2 = json_encode($response_risk2); 

        // check result
        $cr_list2 = $details['cr2']; 
        $response14 = array();
        foreach($cr_list2 as $key14 => $cert14)
        {
            $response14[$key14]['cr2'] = $cert14;
        }
        $jsoncr_list2 = json_encode($response14); 

        if($details['subheading-chck2'] == 1){
            $risk_assess = new Risk_assessment;
            $risk_assess->ra_ill_id           = $illness_id;
            $risk_assess->ra_title            = $details['subheading-chck2'];
            $risk_assess->ra_text             = $jsonrskTxt2;
            $risk_assess->ra_result           = $jsoncr_list2;  
            $risk_assess->ra_status           = '2';  
            $risk_assess->save();
        } 
        
        return redirect('/illness_list');
    }

    public function modal_edit_illness($id){
        $value['data'] = DB::table('illness')->where('id','=',$id)->get();
        $value['doc'] = DB::table('dv_doctors')->get();
        $value['dpt'] = DB::table('hospital_departments')->get();
        $value['ra'] = DB::table('risk_assessment')->where('ra_ill_id','=',$id)
                                                    ->where('ra_status','=','1')
                                                    ->get();
        $value['ra2'] = DB::table('risk_assessment')->where('ra_ill_id','=',$id)
                                                    ->where('ra_status','=','2')
                                                    ->get();                                                 
        $value['arch'] = DB::table('dv_archive')->where('type','=','4')
                                                ->where('type_id','=',$id)
                                                ->get(); 
        //$value['auth'] = DB::table('users')->where('id','=',$authorID)->get(); 

        $fetch = json_encode($value);
        return $fetch;
        // return $value;
    }

    //Edit Illness
    public function edit_illness($id){
        $illness = DB::table('illness')->where('id','=',$id)->first();
        $doctors = DB::table('dv_doctors')->get();
        $department = DB::table('hospital_departments')->get();
        $risk1 = DB::table('risk_assessment')->where('ra_ill_id','=',$id)
                                                    ->where('ra_status','=','1')
                                                    ->first();
        $risk2 = DB::table('risk_assessment')->where('ra_ill_id','=',$id)
                                                    ->where('ra_status','=','2')
                                                    ->first();                                                 
        $archive = DB::table('dv_archive')->where('type','=','4')
                                                ->where('type_id','=',$id)
                                                ->get(); 
        //$value['auth'] = DB::table('users')->where('id','=',$authorID)->get(); 

        //$fetch = json_encode($value);
        // return $value;

        return view('admin.edit_illness', compact('illness', 'doctors', 'department', 'risk1', 'risk2', 'archive'));
    }

    //Copy Add Illness
    public function copy_illness($id){
        $illness = DB::table('illness')->where('id','=',$id)->first();
        $doctors = DB::table('dv_doctors')->get();
        $department = DB::table('hospital_departments')->get();
        $risk1 = DB::table('risk_assessment')->where('ra_ill_id','=',$id)
                                                    ->where('ra_status','=','1')
                                                    ->first();
        $risk2 = DB::table('risk_assessment')->where('ra_ill_id','=',$id)
                                                    ->where('ra_status','=','2')
                                                    ->first();                                                 
        $archive = DB::table('dv_archive')->where('type','=','4')
                                                ->where('type_id','=',$id)
                                                ->get(); 
        //$value['auth'] = DB::table('users')->where('id','=',$authorID)->get(); 

        //$fetch = json_encode($value);
        // return $value;

        return view('admin.copy_illness', compact('illness', 'doctors', 'department', 'risk1', 'risk2', 'archive'));
    }
    
    //Overwrite Illness
    public function overwrite_illness(Request $request){
        $details = Input::all();

        /* illness image */
        $destinationPath = '';
        $filename        = '';
        $file            = $request->file('img');

        $destinationPath = public_path().'/illness';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
        /* end of illness image */

        // description summary
        $sum_list = $details['sm']; 
        $response = array();
        foreach($sum_list as $key1 => $cert1)
        {
            $response[$key1]['sm'] = $cert1;
        }
        $jsonsum_list = json_encode($response); 

        // h2
        $h2_list = $details['h2']; 
        $response2 = array();
        foreach($h2_list as $key2 => $cert2)
        {
            $response2[$key2]['h2'] = $cert2;
        }
        $jsonh2_list = json_encode($response2);
        
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

        // tag
        $tag_list = $details['tag']; 
        $response3 = array();
        foreach($tag_list as $key3 => $cert3)
        {
            $response3[$key3]['tag'] = $cert3;
        }
        $jsontag_list = json_encode($response3); 

        // tag department
        $dep_list = $details['tag_dep']; 
        $response4 = array();
        foreach($dep_list as $key4 => $cert4)
        {
            $response4[$key4]['tag_dep'] = $cert4;
        }
        $jsondep_list = json_encode($response4); 

        // tag symptoms
        $sy_list = $details['tag_sy']; 
        $response5 = array();
        foreach($sy_list as $key5 => $cert5)
        {
            $response5[$key5]['tag_sy'] = $cert5;
        }
        $jsonsy_list = json_encode($response5);

        // tag season
        $s_list = $details['tag_s']; 
        $response6 = array();
        foreach($s_list as $key6 => $cert6)
        {
            $response6[$key6]['tag_s'] = $cert6;
        }
        $jsons_list = json_encode($response6); 

        // tag season text
        $stxt_list = $details['tag_txt']; 
        $response7 = array();
        foreach($stxt_list as $key7 => $cert7)
        {
            $response7[$key7]['tag_txt'] = $cert7;
        }
        $jsonstxt_list = json_encode($response7); 

        // tag free
        $f_list = $details['tag_f']; 
        $response8 = array();
        foreach($f_list as $key8 => $cert8)
        {
            $response8[$key8]['tag_f'] = $cert8;
        }
        $jsonf_list = json_encode($response8); 

        // keywords
        $k_list = $details['kword']; 
        $response12 = array();
        foreach($k_list as $key12 => $cert12)
        {
            $response12[$key12]['kword'] = $cert12;
        }
        $jsonk_list = json_encode($response12); 
        
        $illness = DB::table('illness')
                                    ->where('id','=', $details['illID'])
                                    ->update([
                                                'ill_url'               => $details['url'],
                                                'ill_cat'               => $details['ill_cat'],
                                                'ill_shoulder'          => $details['ill_shldr'],
                                                'ill_name'              => $details['ill'],
                                                'ill_ph'                => $details['ill_ph'],
                                                'ill_magazine'          => $details['magazine'],
                                                'ill_doc'               => $details['doctor'],
                                                'ill_doc_role'          => $details['role'],
                                                'ill_doc_cmt'           => $details['doc_cmt'],
                                                'ill_summary'           => $jsonsum_list,
                                                'ill_img'               => '/illness/'.$filename,
                                                'ill_img_cap'           => $details['img_cap'],
                                                'ill_img_alt'           => $details['img_alt'],
                                                'ill_sub_txt'           => $jsoncontent,
                                                'ill_kwords'            => $jsonk_list,
                                                'ill_seo'               => isset($details['seo']) ? 1 : 0,
                                                'ill_seo_txt'           => $details['seo_txt'],
                                                'ill_meta_a'            => $details['meta_txt1'],
                                                'ill_meta_b'            => $details['meta_txt2'],
                                                'ill_tag_name'          => isset($details['tag_b']) ? 1 : 0,
                                                'ill_h1'                => $details['h1'],
                                                'ill_h2'                => $jsonh2_list,
                                                'ill_tag_kw'            => $jsontag_list,
                                                'ill_tag_dep'           => $jsondep_list,
                                                'ill_tag_symp'          => $jsonsy_list,
                                                'ill_tag_season'        => $jsons_list,
                                                'ill_tag_season_txt'    => $jsonstxt_list,
                                                'ill_tag_free'          => $jsonf_list,
                                            ]);
        
        // text and risk level
        $sh = $details['sh']; 
        $rl = $details['rl']; 
        $response_risk = array();
        foreach($sh as $key => $sh)
        {
        $response_risk[$key]['sh'] = $sh;
        $response_risk[$key]['rl'] = $rl[$key];
        }
        $jsonrskTxt = json_encode($response_risk); 

        // check result
        $cr_list = $details['cr']; 
        $response11 = array();
        foreach($cr_list as $key11 => $cert11)
        {
            $response11[$key11]['cr'] = $cert11;
        }
        $jsoncr_list = json_encode($response11); 

        //Risk Assessment
        if($details['subheading-chck'] == 1){
            $risk = DB::table('risk_assessment')
                            ->where('ra_ill_id','=', $details['illID'])
                            ->where('ra_status','=', '1')
                            ->update([
                                    'ra_text'        => $jsonrskTxt,
                                    'ra_result'      => $jsoncr_list,
                            ]);
        }

        // text and risk level
        $sh2 = $details['sh2']; 
        $rl2 = $details['rl2']; 
        $response_risk2 = array();
        foreach($sh2 as $key => $sh2)
        {
        $response_risk2[$key]['sh2'] = $sh2;
        $response_risk2[$key]['rl2'] = $rl2[$key];
        }
        $jsonrskTxt2 = json_encode($response_risk2); 

        // check result
        $cr_list2 = $details['cr2']; 
        $response14 = array();
        foreach($cr_list2 as $key14 => $cert14)
        {
            $response14[$key14]['cr2'] = $cert14;
        }
        $jsoncr_list2 = json_encode($response14); 

        if($details['subheading-chck2'] == 1){
            $risk2 = DB::table('risk_assessment')
                            ->where('ra_ill_id','=', $details['illID'])
                            ->where('ra_status','=', '2')
                            ->update([
                                    'ra_text'        => $jsonrskTxt2,
                                    'ra_result'      => $jsoncr_list2,
                            ]);
        }


        return redirect('/illness_list');
    }

    //Approve Request Illness Preview
    public function approve_request_illness(Request $request){
        $details = Input::all();

        $illness = DB::table('illness')
                                    ->where('id','=', $details['id_ill'])
                                    ->update([
                                                'tracking_status'               => '3',
                                            ]);
        $date = date('Y-m-d');
        $appReq = new ApprovalRequest;
        $appReq->type                   = '4';
        $appReq->type_id                = $details['id_ill'];
        $appReq->date_approval_request  = $date;
        $appReq->save();

        $archive = new Archive;
        $archive->type                  = '4';
        $archive->type_id               = $details['id_ill'];
        $archive->tracking_type         = '3';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/illness_list');
       
    }

    //Approve Illness Preview
    public function approve_illness(Request $request){
        $details = Input::all();

        $illness = DB::table('illness')
                                    ->where('id','=', $details['id_ill'])
                                    ->update([
                                                'tracking_status'               => '4',
                                            ]);
        $date = date('Y-m-d');
        $approve = new ApprovalRequest;
        $approve->type                   = '4';
        $approve->type_id                = $details['id_ill'];
        $approve->date_approval_request  = $date;
        $approve->save();

        $archive = new Archive;
        $archive->type                  = '4';
        $archive->type_id               = $details['id_ill'];
        $archive->tracking_type         = '4';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/illness_list');
       
    }

    //Release Reservation Illness
    public function release_reservation_illness(Request $request){
        $details = Input::all();

        $illness = DB::table('illness')
                                    ->where('id','=', $details['id'])
                                    ->update([
                                                'tracking_status'               => '5',
                                            ]);
        $date = date('Y-m-d');
        $relres = new ApprovalRequest;
        $relres->type                   = '4';
        $relres->type_id                = $details['id'];
        $relres->date_approval_request  = $date;
        $relres->save();

        $archive = new Archive;
        $archive->type                  = '4';
        $archive->type_id               = $details['id'];
        $archive->tracking_type         = '5';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/illness_list');
    }

    //Release Illness
    public function release_illness(Request $request){
        $details = Input::all();

        $illness = DB::table('illness')
                                    ->where('id','=', $details['id'])
                                    ->update([
                                                'tracking_status'               => '6',
                                            ]);
        $date = date('Y-m-d');
        $release = new ApprovalRequest;
        $release->type                   = '4';
        $release->type_id                = $details['id'];
        $release->date_approval_request  = $date;
        $release->save();

        $archive = new Archive;
        $archive->type                  = '4';
        $archive->type_id               = $details['id'];
        $archive->tracking_type         = '6';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/illness_list');
    }

}
