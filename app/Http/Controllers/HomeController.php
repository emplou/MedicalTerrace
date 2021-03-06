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


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $doctors = DB::table('dv_doctors')->get();
        return view('home', compact('doctors'));
    }

    public function add_doctor(){
        $department = DB::table('hospital_departments')->get();
        return view('admin.add_doctor', compact('department'));
    }

    public function add_illness(){
        $doctors = DB::table('dv_doctors')->get();
        $department = DB::table('hospital_departments')->get();
        return view('admin.add_illness', compact('doctors', 'department'));
    }

    public function add_hospital(){
        $department = DB::table('hospital_departments')->get();
         $doctors = DB::table('dv_doctors')->get();
        return view('admin.add_hospital', compact('doctors','department'));
    }

    public function add_special(){
        $doctors = DB::table('dv_doctors')->get();
        $department = DB::table('hospital_departments')->get();
        $illness = DB::table('illness')->get();
        return view('admin.add_special', compact('doctors', 'department', 'illness'));
    }

    public function illness_list(){
        $illness = DB::table('illness')->get();
        return view('admin.illness_list', compact('illness'));
    }

    public function doctor_list(){
        $doctors = DB::table('dv_doctors')->get();
        return view('admin.doctor_list', compact('doctors'));
    }
    public function hospital_list(){
        $hospitals = DB::table('dv_hospital')->get();
        $department = DB::table('hospital_departments')->get();
        return view('admin.hospital_list', compact('hospitals', 'department'));
    }

    public function topics_list(){
        $hospitals = DB::table('dv_hospital')->get();
        $department = DB::table('hospital_departments')->get();
        return view('admin.topics_list', compact('hospitals', 'department'));
    }

    public function column_list(){
        $columns = DB::table('dv_column')->get();
        return view('admin.column_list', compact('columns'));
    }

    public function daily_list(){
        $daily = DB::table('dv_daily')->get();
        return view('admin.daily_list', compact('daily'));
    }

    public function medicine_list(){
        $medicine = DB::table('dv_medicine')->get();
        return view('admin.medicine_list', compact('medicine'));
    }

    public function equipment_list(){
        $equipment = DB::table('dv_equipment')->get();
        return view('admin.equipment_list', compact('equipment'));
    }

    public function magazine_list(){
        $magazine = DB::table('dv_hospital')->get();
        return view('admin.magazine_list', compact('magazine'));
    }

    public function special_list(){
        $special = DB::table('special')->get();
        $illness = DB::table('illness')->get();
        return view('admin.special_list', compact('special', 'illness'));
    }

    // public function save_special(Request $request){

    //     $details = Input::all();

    //     $special_id = rand();

    //     /* special image */
    //     $destinationPath = '';
    //     $filename        = '';
    //     $file            = $request->file('img');

    //     $destinationPath = public_path().'/special';
    //     $filename        = str_random(6) . '_' . $file->getClientOriginalName();
    //     $uploadSuccess   = $file->move($destinationPath, $filename);
    //     /* end of special image */

    //     // lead ckeditor
    //     $lead_list = $details['lead_ckeditor']; 
    //     $response = array();
    //     foreach($lead_list as $key1 => $cert1)
    //     {
    //         $response[$key1]['lead_ckeditor'] = $cert1;
    //     }
    //     $jsonlead_list = json_encode($response); 

    //     // subheading and Text
    //     $sub_head1a = $details['sub_head1a']; 
    //     $sub_head1b = $details['sub_head1b']; 
    //     $txt_ckeditor = $details['txt_ckeditor'];  
    //     $response_txt = array();
    //     foreach($sub_head1a as $key => $sub_head)
    //     {
    //     $response_txt[$key]['heading'] = $sub_head;
    //     $response_txt[$key]['sub'] = $sub_head1b[$key];
    //     $response_txt[$key]['txt_ckeditor'] = $txt_ckeditor[$key];
    //     }
    //     $jsoncontent = json_encode($response_txt); 

    //     // Ill Image
    //     $pos_list = $details['pos_ill']; 
    //     $response2 = array();
    //     foreach($pos_list as $key2 => $cert2)
    //     {
    //         $response2[$key2]['pos_ill'] = $cert2;
    //     }
    //     $jsonpos_list = json_encode($response2); 

    //     // subheading and Text
    //     $sub_head2a = $details['sub_head2a']; 
    //     $sub_head2b = $details['sub_head2b']; 
    //     $txt2_ckeditor = $details['txt2_ckeditor'];  
    //     $response_txt2 = array();
    //     foreach($sub_head2a as $key => $sub_head)
    //     {
    //     $response_txt2[$key]['heading'] = $sub_head;
    //     $response_txt2[$key]['sub'] = $sub_head2b[$key];
    //     $response_txt2[$key]['txt_ckeditor'] = $txt2_ckeditor[$key];
    //     }
    //     $jsoncontent2 = json_encode($response_txt2); 

    //     // seo keywords
    //     $k_list = $details['kword']; 
    //     $response3 = array();
    //     foreach($k_list as $key3 => $cert3)
    //     {
    //         $response3[$key3]['kword'] = $cert3;
    //     }
    //     $jsonk_list = json_encode($response3); 

    //     // h2
    //     $h2_list = $details['h2']; 
    //     $response4 = array();
    //     foreach($h2_list as $key4 => $cert4)
    //     {
    //         $response4[$key4]['h2'] = $cert4;
    //     }
    //     $jsonh2_list = json_encode($response4); 

    //     // tag
    //     $tag_list = $details['tag_ch']; 
    //     $response5 = array();
    //     foreach($tag_list as $key5 => $cert5)
    //     {
    //         $response5[$key5]['tag_ch'] = isset($cert5) ? 1 : 0;
    //     }
    //     $jsontag_list = json_encode($response5); 

    //     // tag illness
    //     $till_list = $details['tag_ill']; 
    //     $response6 = array();
    //     foreach($till_list as $key6 => $cert6)
    //     {
    //         $response6[$key6]['tag_ill'] = $cert6;
    //     }
    //     $jsontill_list = json_encode($response6); 

    //     // tag department
    //     $dep_list = $details['tag_dep']; 
    //     $response7 = array();
    //     foreach($dep_list as $key7 => $cert7)
    //     {
    //         $response7[$key7]['tag_dep'] = $cert7;
    //     }
    //     $jsondep_list = json_encode($response7); 

    //     // tag symptoms
    //     $sy_list = $details['tag_sy']; 
    //     $response8 = array();
    //     foreach($sy_list as $key8 => $cert8)
    //     {
    //         $response8[$key8]['tag_sy'] = $cert8;
    //     }
    //     $jsonsy_list = json_encode($response8); 

    //     // tag season
    //     $s_list = $details['tag_s']; 
    //     $response9 = array();
    //     foreach($s_list as $key9 => $cert9)
    //     {
    //         $response9[$key9]['tag_s'] = $cert9;
    //     }
    //     $jsons_list = json_encode($response9); 

    //     // tag text
    //     $txt_list = $details['tag_txt']; 
    //     $response10 = array();
    //     foreach($txt_list as $key10 => $cert10)
    //     {
    //         $response10[$key10]['tag_txt'] = $cert10;
    //     }
    //     $jsontxt_list = json_encode($response10);

    //     // tag text
    //     $f_list = $details['tag_f']; 
    //     $response11 = array();
    //     foreach($f_list as $key11 => $cert11)
    //     {
    //         $response11[$key11]['tag_f'] = $cert11;
    //     }
    //     $jsonf_list = json_encode($response11);
 
    //     //Special
    //     $special = new Special;
    //     $special->sp_id                = $special_id;
    //     $special->sp_url               = $details['url'];
    //     $special->sp_mag               = $details['magazine'];
    //     $special->sp_ill_cat           = $details['ill_cat'];
    //     $special->sp_cat               = $details['sp_cat'];
    //     $special->sp_title_shldr       = $details['sts'];
    //     $special->sp_title             = $details['st'];
    //     $special->sp_doc               = $details['doctor'];
    //     $special->sp_doc_tsk           = $details['role'];
    //     $special->sp_doc_cmt           = $details['cmt']; 
    //     $special->sp_img               = '/special/'.$filename; //special image
    //     $special->sp_img_cap           = $details['img_cap'];
    //     $special->sp_img_alt           = $details['img_alt'];
    //     $special->sp_txt               = $jsonlead_list; //it should be json script when added
    //     $special->sp_sum               = $jsoncontent; //it should be json script when added
    //     $special->sp_ill_img           = $jsonpos_list;//it should be json script when added
    //     $special->sp_sum2              = $jsoncontent2; //it should be json script when added
    //     $special->sp_seo_kwords        = $jsonk_list; //it should be json script when added
    //     $special->seo_title            = isset($details['seo']) ? 1 : 0;
    //     $special->sp_seo_txt           = $details['seo_txt'];
    //     $special->sp_seo_desc          = $details['meta_txt1'];
    //     $special->sp_seo_desc2         = $details['meta_txt2'];
    //     $special->sp_h1                = $details['h1'];
    //     $special->sp_h2                = $jsonh2_list; //it should be json script when added
    //     $special->sp_tag_kw            = $jsontag_list; //it should be json script when added
    //     $special->sp_tag_ill           = $jsontill_list; //it should be json script when added
    //     $special->sp_tag_dep           = $jsondep_list; //it should be json script when added
    //     $special->sp_tag_symp          = $jsonsy_list; //it should be json script when added
    //     $special->sp_tag_season        = $jsons_list; //it should be json script when added
    //     $special->sp_ta_season_txt     = $jsontxt_list; //it should be json script when added
    //     $special->sp_tag_free          = $jsonf_list; //it should be json script when added$illness->status    
    //     $special->tracking_status      = '3';
    //     $special->save();

    //     $now = date('Y-m-d H:i'); //Fomat Date and time

    //     $archive = new Archive;
    //     $archive->type              = '3';
    //     $archive->type_id           = $special->id;
    //     $archive->tracking_type     = '1';
    //     $archive->archived_date     = $now;  
    //     $archive->save();
        
    //     return redirect('/special_list');
    // }

    // public function save_illness(Request $request){

    //     $details = Input::all();

    //     //dd($details);
    //     $illness_id = rand();
    //     $ill_img_id = rand();
    //     $ill_gr_id = rand();

    //     /* illness image */
    //     $destinationPath = '';
    //     $filename        = '';
    //     $file            = $request->file('img');

    //     $destinationPath = public_path().'/illness';
    //     $filename        = str_random(6) . '_' . $file->getClientOriginalName();
    //     $uploadSuccess   = $file->move($destinationPath, $filename);
    //     /* end of illness image */

    //     // description summary
    //     $sum_list = $details['sm']; 
    //     $response = array();
    //     foreach($sum_list as $key1 => $cert1)
    //     {
    //         $response[$key1]['sm'] = $cert1;
    //     }
    //     $jsonsum_list = json_encode($response); 

    //     // h2
    //     $h2_list = $details['h2']; 
    //     $response2 = array();
    //     foreach($h2_list as $key2 => $cert2)
    //     {
    //         $response2[$key2]['h2'] = $cert2;
    //     }
    //     $jsonh2_list = json_encode($response2);
        
    //     // subheading and Text
    //     $sub_head1a = $details['sub_head1a']; 
    //     $sub_head1b = $details['sub_head1b']; 
    //     $txt_ckeditor = $details['txt_ckeditor'];  
    //     $response_txt = array();
    //     foreach($sub_head1a as $key => $sub_head)
    //     {
    //     $response_txt[$key]['heading'] = $sub_head;
    //     $response_txt[$key]['sub'] = $sub_head1b[$key];
    //     $response_txt[$key]['txt_ckeditor'] = $txt_ckeditor[$key];
    //     }
    //     $jsoncontent = json_encode($response_txt); 

    //     // tag
    //     $tag_list = $details['tag']; 
    //     $response3 = array();
    //     foreach($tag_list as $key3 => $cert3)
    //     {
    //         $response3[$key3]['tag'] = $cert3;
    //     }
    //     $jsontag_list = json_encode($response3); 

    //     // tag department
    //     $dep_list = $details['tag_dep']; 
    //     $response4 = array();
    //     foreach($dep_list as $key4 => $cert4)
    //     {
    //         $response4[$key4]['tag_dep'] = $cert4;
    //     }
    //     $jsondep_list = json_encode($response4); 

    //     // tag symptoms
    //     $sy_list = $details['tag_sy']; 
    //     $response5 = array();
    //     foreach($sy_list as $key5 => $cert5)
    //     {
    //         $response5[$key5]['tag_sy'] = $cert5;
    //     }
    //     $jsonsy_list = json_encode($response5);

    //     // tag season
    //     $s_list = $details['tag_s']; 
    //     $response6 = array();
    //     foreach($s_list as $key6 => $cert6)
    //     {
    //         $response6[$key6]['tag_s'] = $cert6;
    //     }
    //     $jsons_list = json_encode($response6); 

    //     // tag season text
    //     $stxt_list = $details['tag_txt']; 
    //     $response7 = array();
    //     foreach($stxt_list as $key7 => $cert7)
    //     {
    //         $response7[$key7]['tag_txt'] = $cert7;
    //     }
    //     $jsonstxt_list = json_encode($response7); 

    //     // tag free
    //     $f_list = $details['tag_f']; 
    //     $response8 = array();
    //     foreach($f_list as $key8 => $cert8)
    //     {
    //         $response8[$key8]['tag_f'] = $cert8;
    //     }
    //     $jsonf_list = json_encode($response8); 

    //     // keywords
    //     $k_list = $details['kword']; 
    //     $response12 = array();
    //     foreach($k_list as $key12 => $cert12)
    //     {
    //         $response12[$key12]['kword'] = $cert12;
    //     }
    //     $jsonk_list = json_encode($response12); 
        
    //     //Illness
    //     $illness = new Illness;
    //     $illness->ill_id                = $illness_id;
    //     $illness->ill_url               = $details['url'];
    //     $illness->ill_cat               = $details['ill_cat'];
    //     $illness->ill_shoulder          = $details['ill_shldr'];
    //     $illness->ill_name              = $details['ill'];
    //     $illness->ill_ph                = $details['ill_ph'];
    //     $illness->ill_magazine          = $details['magazine'];
    //     $illness->ill_doc               = $details['doctor'];
    //     $illness->ill_doc_role          = $details['role'];
    //     $illness->ill_doc_cmt           = $details['doc_cmt']; 
    //     $illness->ill_summary           = $jsonsum_list; //it should be json script when added
    //     $illness->ill_img               = '/illness/'.$filename; //illness image
    //     $illness->ill_img_cap           = $details['img_cap'];
    //     $illness->ill_img_alt           = $details['img_alt'];
    //     $illness->ill_sub_txt           = $jsoncontent; //it should be json script when added
    //     $illness->ill_kwords            = $jsonk_list;
    //     $illness->ill_seo               = isset($details['seo']) ? 1 : 0;
    //     $illness->ill_seo_txt           = $details['seo_txt'];
    //     $illness->ill_meta_a            = $details['meta_txt1'];
    //     $illness->ill_meta_b            = $details['meta_txt2'];
    //     $illness->ill_tag_name          = isset($details['tag_b']) ? 1 : 0;
    //     $illness->ill_h1                = $details['h1'];
    //     $illness->ill_h2                = $jsonh2_list; //it should be json script when added
    //     $illness->ill_tag_kw            = $jsontag_list; //it should be json script when added
    //     $illness->ill_tag_dep           = $jsondep_list; // added division and medical subject list and field
    //     $illness->ill_tag_symp          = $jsonsy_list; // added division and medical subject list and field
    //     $illness->ill_tag_season        = $jsons_list; // added division and medical subject list and field
    //     $illness->ill_tag_season_txt    = $jsonstxt_list; // added division and medical subject list and field
    //     $illness->ill_tag_free          = $jsonf_list; // added division and medical subject list and field
    //     $illness->tracking_status      = '3';
    //     $illness->save();

    //     $now = date('Y-m-d'); //Fomat Date and time

    //     $archive = new Archive;
    //     $archive->type              = '4';
    //     $archive->type_id           = $illness->id;
    //     $archive->tracking_type     = '3';
    //     $archive->archived_date     = $now;  
    //     $archive->save();

    //     //newly inserted illness id
    //     //$id = $illness->ill_id;


    //     // $destinationPathImg     = '';
    //     // $filename_img           = '';
    //     // $file_img               = $request->file('img2');

    //     // $destinationPathImg  = public_path().'/illness/image';
    //     // $filename_img        = str_random(6) . '_' . $file_img->getClientOriginalName();
    //     // $uploadSuccess   = $file_img->move($destinationPathImg, $filename_img);
        
    //     //Illness Image
    //     // $ill_image = new Ill_image;
    //     // $ill_image->im_id               = $ill_img_id;
    //     // $ill_image->im_ill_id           = $illness_id;
    //     // $ill_image->im_file             = $details['img2'];
    //     // $ill_image->im_caption          = $details['img_cap2'];
    //     // $ill_image->im_alt              = $details['img_alt2'];
    //     // $ill_image->save();

    //     // $destinationPathGraph   = '';
    //     // $filename_graph         = '';
    //     // $file_graph             = $request->file('g_img');

    //     // $destinationPathGraph  = public_path().'/illness/graph';
    //     // $filename_graph        = str_random(6) . '_' . $file_graph->getClientOriginalName();
    //     // $uploadSuccess   = $file_graph->move($destinationPathGraph, $filename_graph);

    //     //Illness Graph
    //     // $ill_graph = new Ill_graph;
    //     // $ill_graph->ig_id               = $ill_gr_id;
    //     // $ill_graph->ig_ill_id           = $illness_id;
    //     // $ill_graph->ig_title            = $details['g_title'];
    //     // $ill_graph->ig_img              = $details['g_img'];
    //     // $ill_graph->ig_details          = $details['gd'];  
    //     // $ill_graph->ig_txt              = $details['g_txt'];
    //     // $ill_graph->ig_alt              = $details['g_alt'];
    //     // $ill_graph->save();

    //     // text and risk level
    //     $sh = $details['sh']; 
    //     $rl = $details['rl']; 
    //     $response_risk = array();
    //     foreach($sh as $key => $sh)
    //     {
    //     $response_risk[$key]['sh'] = $sh;
    //     $response_risk[$key]['rl'] = $rl[$key];
    //     }
    //     $jsonrskTxt = json_encode($response_risk); 

    //     // check result
    //     $cr_list = $details['cr']; 
    //     $response11 = array();
    //     foreach($cr_list as $key11 => $cert11)
    //     {
    //         $response11[$key11]['cr'] = $cert11;
    //     }
    //     $jsoncr_list = json_encode($response11); 

    //     //Risk Assessment
    //     if($details['subheading-chck'] == 1){
    //         $risk_assess = new Risk_assessment;
    //         $risk_assess->ra_ill_id           = $illness_id;
    //         $risk_assess->ra_title            = $details['subheading-chck'];
    //         $risk_assess->ra_text             = $jsonrskTxt;
    //         $risk_assess->ra_result           = $jsoncr_list;  
    //         $risk_assess->ra_status           = '1';  
    //         $risk_assess->save();
    //     }

    //     // text and risk level
    //     $sh2 = $details['sh2']; 
    //     $rl2 = $details['rl2']; 
    //     $response_risk2 = array();
    //     foreach($sh2 as $key => $sh2)
    //     {
    //     $response_risk2[$key]['sh2'] = $sh2;
    //     $response_risk2[$key]['rl2'] = $rl2[$key];
    //     }
    //     $jsonrskTxt2 = json_encode($response_risk2); 

    //     // check result
    //     $cr_list2 = $details['cr2']; 
    //     $response14 = array();
    //     foreach($cr_list2 as $key14 => $cert14)
    //     {
    //         $response14[$key14]['cr2'] = $cert14;
    //     }
    //     $jsoncr_list2 = json_encode($response14); 

    //     if($details['subheading-chck2'] == 1){
    //         $risk_assess = new Risk_assessment;
    //         $risk_assess->ra_ill_id           = $illness_id;
    //         $risk_assess->ra_title            = $details['subheading-chck2'];
    //         $risk_assess->ra_text             = $jsonrskTxt2;
    //         $risk_assess->ra_result           = $jsoncr_list2;  
    //         $risk_assess->ra_status           = '2';  
    //         $risk_assess->save();
    //     } 
        
    //     return redirect('/illness_list');
    // }

    public function save_edit_medical_subject(){
        $medicalsubj = DB::table('department')
                                    ->where('id','=', $details['id'])
                                    ->update([
                                                'medical_subj'          => $details['medical_subj'],
                                                'subheading'            => $details['subheading'],
                                                'text_of_subheading'    => $details['text_of_subheading'],
                                            ]);

                            //access table no edit for now...
        

        $dpt_esp_hours = DB::table('hospital_departments_exam')
                                    ->where('id','=', $details['dpt_esp_hrs'])
                                    ->update([
                                                'from'              => $details['from'],
                                                'to'                => $details['to'],
                                                'start'             => $details['start'],
                                                'weekdays'          => $details['weekdays'],
                                                'treatment_name'    => $details['treatment_name'],
                                            ]);
                                            
    }

    public function save_update_feature(){
        $feature = DB::table('hospital_feature')
                                    ->where('id','=', $details['dpt_esp_hrs'])
                                    ->update([
                                                'title'                 => $details['title'],
                                                'text'                  => $details['text'],
                                                'image'                 => $details['image'],
                                            ]);
    }

    public function edit_department($id){
        $department = DB::table('department')
                                    ->where('id','=', $details['id'])
                                    ->update([
                                                'dpt_name'           => $details['dpt_name'],
                                            ]);
    }

    public function save_department(){

        $department = new Department;
        $department->dpt_name        = $details['med_subj_subheading'];
        $department->save();

    }

    // public function save_doctor(Request $request){

    //     $details = Input::all();

    //     // dd($details);

    //     $certificate = $details['certificate']; 
    //     $response = array();
    //     foreach($certificate as $key => $cert)
    //     {
    //         $response[$key]['med_sbj_list'] = $cert;
    //     }
    //     $jsoncertificate = json_encode($response);

    //     $conference = $details['conference']; 
    //     $res = array();
    //     foreach($conference as $key => $con)
    //     {
    //         $res[$key]['med_sbj_list'] = $con;
    //     }
    //     $jsonconference = json_encode($res);

    //     $department = $details['department']; 
    //     $res2 = array();
    //     foreach($department as $key => $dep)
    //     {
    //         $res2[$key]['med_sbj_list'] = $dep;
    //     }
    //     $jsondepartment = json_encode($res2);

    //     // career Academic Background
    //     $years = $details['c_ac_year']; 
    //     $months = $details['c_ac_month']; 
    //     $descs = $details['c_ac_desc']; 
    //     $toyears = $details['c_ac_year_to']; 
    //     $tomonths = $details['c_ac_month_to']; 
    //     $todescs = $details['c_ac_desc_to']; 
    //     $response = array();
    //     foreach($years as $key => $year)
    //     {
    //     $response[$key]['from_year'] = $year;
    //     $response[$key]['from_month'] = $months[$key];
    //     $response[$key]['from_desc'] = $descs[$key];
    //     $response[$key]['to_year'] = $toyears[$key];
    //     $response[$key]['to_month'] = $tomonths[$key];
    //     $response[$key]['to_desc'] = $todescs[$key];
    //     }
    //     $academic_careers = json_encode($response); 

    //     // career work experience
    //     $weyears = $details['c_we_year']; 
    //     $wemonths = $details['c_we_month']; 
    //     $wedescs = $details['c_we_desc']; 
    //     $wetoyears = $details['c_we_year_to']; 
    //     $wetomonths = $details['c_we_month_to']; 
    //     $wetodescs = $details['c_we_desc_to']; 
    //     $weresponse = array();
    //     foreach($weyears as $key => $weyear)
    //     {
    //     $weresponse[$key]['we_from_year'] = $weyear;
    //     $weresponse[$key]['we_from_month'] = $wemonths[$key];
    //     $weresponse[$key]['we_from_desc'] = $wedescs[$key];
    //     $weresponse[$key]['we_to_year'] = $wetoyears[$key];
    //     $weresponse[$key]['we_to_month'] = $wetomonths[$key];
    //     $weresponse[$key]['we_to_desc'] = $wetodescs[$key];
    //     }
    //     $work_exp = json_encode($weresponse); 
    //     //exit;

    //     // career awards
    //     $awyears = $details['c_aw_year']; 
    //     $awmonths = $details['c_aw_month']; 
    //     $awdescs = $details['c_aw_desc']; 
    //     $awtoyears = $details['c_aw_year_to']; 
    //     $awtomonths = $details['c_aw_month_to']; 
    //     $awtodescs = $details['c_aw_desc_to']; 
    //     $awresponse = array();
    //     foreach($awyears as $key => $awyear)
    //     {
    //     $awresponse[$key]['from_year'] = $awyear;
    //     $awresponse[$key]['from_month'] = $awmonths[$key];
    //     $awresponse[$key]['from_desc'] = $awdescs[$key];
    //     $awresponse[$key]['to_year'] = $awtoyears[$key];
    //     $awresponse[$key]['to_month'] = $awtomonths[$key];
    //     $awresponse[$key]['to_desc'] = $awtodescs[$key];
    //     }
    //     $awards = json_encode($awresponse);

    //     $destinationPath = '';
    //     $filename        = '';
    //     $file            = $request->file('profile_image');

    //     $destinationPath = public_path().'/doctor_photos';
    //     $filename        = str_random(6) . '_' . $file->getClientOriginalName();
    //     $uploadSuccess   = $file->move($destinationPath, $filename);

    //     $author = Auth::user()->id;

    //     $doctor = new Doctor;
    //     $doctor->url_generation             = $details['url_generation'] ;
    //     $doctor->status                     = $details['status'];
    //     $doctor->certificate                = $jsoncertificate;//json
    //     $doctor->name                       = $details['name'];
    //     $doctor->alphabet_name              = $details['alpha_name'] ;
    //     $doctor->image                      = '/medicalterrace/public/doctor_photos/'.$filename; //image
    //     $doctor->image_caption              = $details['img_caption'];
    //     $doctor->image_alt                  = $details['img_alt'];
    //     $doctor->industry                   = $details['industry'] ;
    //     $doctor->conference                 = $jsonconference;
    //     $doctor->birthday                   = $details['b_month'].'-'.$details['b_day'].'-'.$details['b_year']; //month day year
    //     $doctor->place_of_birth             = $details['place_birth'];
    //     $doctor->career_academic_back       = $academic_careers; //json
    //     $doctor->career_work_exp            = $work_exp; //json
    //     $doctor->career_awards              = $awards; //json
    //     // $doctor->sort_career                = '1';
    //     $doctor->sort_career                = $details['n_order'];
    //     $doctor->hospital_office            = $details['hospital_office'];
    //     $doctor->department                 = $jsondepartment;
    //     $doctor->doctor_comment             = $details['doc_comment'];
    //     $doctor->tracking_status            = '1';
    //     $doctor->author                     = $author;
    //     $doctor->save();

    //     // return redirect::back()->with('message','Successfully Encoded');
    //     return redirect('/doctor_list');
    // }

    // public function modal_edit_doctor($id){
    //     // return view('modals.modal_edit_doctor', compact('id'));
    //     // $request = Request::all();
    //     // $data = Doctor::where('id', $request->id )->get();
    //     $doctor = DB::table('dv_doctors')->where('id','=',$id)->get();
    //     foreach($doctor as $doc){
    //             $authorID = $doc->author;
    //     }

    //     $value['data'] = DB::table('dv_doctors')->where('id','=',$id)->get();
    //     $value['dpt'] = DB::table('hospital_departments')->get();
    //     $value['auth'] = DB::table('users')->where('id','=',$authorID)->get();
    //     // // return $doctor;
    //     // return response()->json($data);
    //     // $userData['data'] = Doctor::getuserData($id);
    //     $fetch = json_encode($value);
    //     return $fetch;
    //     // return $value;
    // }

    //for retreiving data of hospital
    // public function modal_edit_hospital($id){
    //     $value['data'] = DB::table('dv_hospital')->where('id','=',$id)->get();

    //     $hospital = DB::table('dv_hospital')->where('id','=',$id)->get();
    //     foreach($hospital as $hosp){
    //         $hosp_id = $hosp->hospital_id;
    //     }

    //     $value['hosp_dpt'] = DB::table('hospital_departments')->get();
    //     $value['dpt_exam'] = DB::table('hospital_departments_exam')->where('hospital_id','=',$hosp_id)->get();
    //     $value['hosp_feature'] = DB::table('hospital_feature')->where('hospital_id','=',$hosp_id)->get();
    //     $value['equip'] = DB::table('equipments')->where('hospital_id','=',$hosp_id)->get();
    //     $value['staff'] = DB::table('hospital_staff')->where('hospital_id','=',$hosp_id)->get();

    //     $fetch = json_encode($value);

    //     return $fetch;
    // }

    // public function modal_edit_special($id){
    //     $value['data'] = DB::table('special')->where('id','=',$id)->get();
    //     $value['doc'] = DB::table('dv_doctors')->get();
    //     $value['ill'] = DB::table('illness')->get();
    //     $value['dpt'] = DB::table('hospital_departments')->get();
    //     $value['arch'] = DB::table('dv_archive')->where('type_id','=',$id)
    //                                                 ->where('type','=','3')
    //                                                 ->get();
    //     $fetch = json_encode($value);
    //     return $fetch;
    //     // return $value;
    // }

    // public function modal_edit_illness($id){
    //     $value['data'] = DB::table('illness')->where('id','=',$id)->get();
    //     $value['doc'] = DB::table('dv_doctors')->get();
    //     $value['dpt'] = DB::table('hospital_departments')->get();
    //     $value['ra'] = DB::table('risk_assessment')->where('ra_ill_id','=',$id)
    //                                                 ->where('ra_status','=','1')
    //                                                 ->get();
    //     $value['ra2'] = DB::table('risk_assessment')->where('ra_ill_id','=',$id)
    //                                                 ->where('ra_status','=','2')
    //                                                 ->get();                                                 
    //     $value['arch'] = DB::table('dv_archive')->where('type','=','4')
    //                                             ->where('type_id','=',$id)
    //                                             ->get(); 
    //     //$value['auth'] = DB::table('users')->where('id','=',$authorID)->get(); 

    //     $fetch = json_encode($value);
    //     return $fetch;
    //     // return $value;
    // }

    // public function save_edit_doctor(Request $request){
    //     $details = Input::all();

    //     // dd($request->all());

    //     $doctors = DB::table('dv_doctors')->where('id','=',$details['docID'])->get();
    //     foreach($doctors as $doc){
    //         $image = $doc->image;
    //     }

    //     if(empty($details['profile_image'])){
    //         $final = $image;
            
    //     }else{
    //         $destinationPath = '';
    //         $filename        = '';
    //         $file            = $request->file('profile_image');

    //         $destinationPath = public_path().'/doctor_photos';
    //         $filename        = str_random(6) . '_' . $file->getClientOriginalName();
    //         $uploadSuccess   = $file->move($destinationPath, $filename);

    //         $final = '/doctor_photos/'.$filename;

    //     }

    //     $certificate = $details['certificate']; 
    //     $response = array();
    //     foreach($certificate as $key => $cert)
    //     {
    //         $response[$key]['med_sbj_list'] = $cert;
    //     }
    //     $jsoncertificate = json_encode($response);

    //     $conference = $details['conference']; 
    //     $res = array();
    //     foreach($conference as $key => $con)
    //     {
    //         $res[$key]['med_sbj_list'] = $con;
    //     }
    //     $jsonconference = json_encode($res);

    //     // career Academic Background
    //     $years = $details['c_ac_year']; 
    //     $months = $details['c_ac_month']; 
    //     $descs = $details['c_ac_desc']; 
    //     $toyears = $details['c_ac_year_to']; 
    //     $tomonths = $details['c_ac_month_to']; 
    //     $todescs = $details['c_ac_desc_to']; 
    //     $response = array();
    //     foreach($years as $key => $year)
    //     {
    //     $response[$key]['from_year'] = $year;
    //     $response[$key]['from_month'] = $months[$key];
    //     $response[$key]['from_desc'] = $descs[$key];
    //     $response[$key]['to_year'] = $toyears[$key];
    //     $response[$key]['to_month'] = $tomonths[$key];
    //     $response[$key]['to_desc'] = $todescs[$key];
    //     }
    //     $academic_careers = json_encode($response); 

    //     // career work experience
    //     $weyears = $details['c_we_year']; 
    //     $wemonths = $details['c_we_month']; 
    //     $wedescs = $details['c_we_desc']; 
    //     $wetoyears = $details['c_we_year_to']; 
    //     $wetomonths = $details['c_we_month_to']; 
    //     $wetodescs = $details['c_we_desc_to']; 
    //     $weresponse = array();
    //     foreach($weyears as $key => $weyear)
    //     {
    //     $weresponse[$key]['we_from_year'] = $weyear;
    //     $weresponse[$key]['we_from_month'] = $wemonths[$key];
    //     $weresponse[$key]['we_from_desc'] = $wedescs[$key];
    //     $weresponse[$key]['we_to_year'] = $wetoyears[$key];
    //     $weresponse[$key]['we_to_month'] = $wetomonths[$key];
    //     $weresponse[$key]['we_to_desc'] = $wetodescs[$key];
    //     }
    //     $work_exp = json_encode($weresponse); 
    //     //exit;

    //     // career awards
    //     $awyears = $details['c_aw_year']; 
    //     $awmonths = $details['c_aw_month']; 
    //     $awdescs = $details['c_aw_desc']; 
    //     $awtoyears = $details['c_aw_year_to']; 
    //     $awtomonths = $details['c_aw_month_to']; 
    //     $awtodescs = $details['c_aw_desc_to']; 
    //     $awresponse = array();
    //     foreach($awyears as $key => $awyear)
    //     {
    //     $awresponse[$key]['from_year'] = $awyear;
    //     $awresponse[$key]['from_month'] = $awmonths[$key];
    //     $awresponse[$key]['from_desc'] = $awdescs[$key];
    //     $awresponse[$key]['to_year'] = $awtoyears[$key];
    //     $awresponse[$key]['to_month'] = $awtomonths[$key];
    //     $awresponse[$key]['to_desc'] = $awtodescs[$key];
    //     }
    //     $awards = json_encode($awresponse);

    //     $department = $details['department']; 
    //     $res2 = array();
    //     foreach($department as $key => $dep)
    //     {
    //         $res2[$key]['med_sbj_list'] = $dep;
    //     }
    //     $jsondepartment = json_encode($res2);

    //     $docID = $details['docID'];

    //     $doctors = DB::table('dv_doctors')
    //                         ->where('id','=', $docID)
    //                         ->update([
    //                                     'url_generation'            => $details['url_generation'],
    //                                     'status'                    => $details['status'],
    //                                     'certificate'               => $jsoncertificate,
    //                                     'name'                      => $details['name'],
    //                                     'alphabet_name'             => $details['alphabet_name'],
    //                                     'image'                     => $final,
    //                                     'image_caption'             => $details['img_caption'],
    //                                     'image_alt'                 => $details['img_alt'],
    //                                     'industry'                  => $details['industry'],
    //                                     'conference'                => $jsonconference,
    //                                     'birthday'                  => $details['b_month'].'-'.$details['b_day'].'-'.$details['b_year'],
    //                                     'place_of_birth'            => $details['place_birth'],
    //                                     'career_academic_back'      => $academic_careers,
    //                                     'career_work_exp'           => $work_exp,
    //                                     'career_awards'             => $awards,
    //                                     'sort_career'               => $details['n_order'],
    //                                     'hospital_office'           => $details['hospital_office'],
    //                                     'department'                => $jsondepartment,
    //                                     'doctor_comment'            => $details['doc_comment'],
    //                                 ]);

    //                                 // dd($doctors);

    //     return redirect::back()->with('message','Successfully Encoded');
    // }

    public function get_all_department(){
        $value['data'] = DB::table('hospital_departments')->get();
        $fetch = json_encode($value);
        return $fetch;
        // return Response::json($fetch);
    }

    // public function save_overwrite_hospital(Request $request){

    //     $details = Input::all();

    //     $hospital_id = rand();
    //     $accessdet_id = rand();
    //     $dpt_id = rand();
    //     $feature_id = rand();
    //     $explain_id = rand();
    //     $dpt_exam_id = rand();

    //     // $medinscatchtext = "testing";
    //     $medsublist = "testing med sub list"; // input name med_sbj_list


    //     /* clinic image */
    //     $destinationPath = '';
    //     $filename        = '';
    //     $file            = $request->file('clinic_image');

    //     $destinationPath = public_path().'/clinic_image';
    //     $filename        = str_random(6) . '_' . $file->getClientOriginalName();
    //     $uploadSuccess   = $file->move($destinationPath, $filename);
    //     /* end of clinic image */

    //     $subj_list = $details['med_sbj_list']; 
    //     $response = array();
    //     foreach($subj_list as $key => $cert)
    //     {
    //         $response[$key]['med_sbj_list'] = $cert;
    //     }
    //     $jsonsubj_list = json_encode($response); 

    //     // career Academic Background
    //     $access_trans   = $details['access_trans']; 
    //     $access_from    = $details['access_from']; 
    //     $access_mins    = $details['access_mins']; 
    //     $resp = array();
    //     foreach($access_trans as $key => $access_tran)
    //     {
    //     $response[$key]['access_tran'] = $access_tran;
    //     $response[$key]['access_from'] = $access_from[$key];
    //     $response[$key]['access_mins'] = $access_mins[$key];
    //     }
    //     $access = json_encode($resp);
        

    //     $hospital = new Hospital;
    //     $hospital->hospital_id      = $hospital_id;
    //     $hospital->url              = $details['url_gen'];
    //     $hospital->medical_ins      = $details['medical_ins'];
    //     $hospital->name_phonic      = $details['medical_ins_eng'];
    //     $hospital->common_name      = $details['common_name'];
    //     $hospital->postal_code      = $details['postal_code'];
    //     $hospital->address          = $details['address'];
    //     $hospital->address_eng      = $details['address_english']; 
    //     $hospital->access           = $access;
    //     $hospital->parking          = $details['p_radio'];
    //     $hospital->phone_no         = $details['phone_no'].$details['phone_no_one'].$details['phone_no_two'];
    //     $hospital->fax              = $details['fax'].$details['fax_one'].$details['fax_two'];
    //     $hospital->email            = $details['email'];
    //     $hospital->image            = '/clinic_image/'.$filename; //clinic image / hospital image
    //     $hospital->image_caption    = $details['img_caption'];
    //     $hospital->image_alt        = $details['img_alt'];
    //     $hospital->hosp_subheading  = $details['hosp_subheading']; //it should be json script when added
    //     $hospital->hosp_text_subheading  = $details['text_subheading_hospital']; //it should be json script when added
    //     //$hospital->medinscatchtext  = $medinscatchtext; //should be json
    //     $hospital->division         = $details['division']; // added division and medical subject list and field
    //     $hospital->medsublist       = $jsonsubj_list; // should be json | dropdown and input field
    //     $hospital->save();

    //     $department = new Department;
    //     $department->dpt_name        = $details['med_subj_subheading'];
    //     $department->save();

        
    //     /* department image */
    //     $destinationPath = '';
    //     $filenamedpt        = '';
    //     $file_dpt            = $request->file('show_img');

    //     $destinationPath = public_path().'/department_photos';
    //     $filenamedpt        = str_random(6) . '_' . $file_dpt->getClientOriginalName();
    //     $uploadSuccess   = $file_dpt->move($destinationPath, $filenamedpt);
    //     /* end of department image */

        
    //     $dpt_exam = new DepartmentExam;
    //     $dpt_exam->hospital_id              = $hospital_id;
    //     $dpt_exam->department_id            = $details['department'];
    //     $dpt_exam->subheading               = $details['med_subj_subheading'];
    //     $dpt_exam->text_subheading          = $details['med_subj_text_subheading_hospital'];
    //     $dpt_exam->image                    = '/department_photos/'.$filenamedpt;
    //     $dpt_exam->from                     = $details['from'];
    //     $dpt_exam->to                       = $details['to'];
    //     $dpt_exam->start                    = $details['start'];
    //     $dpt_exam->weekdays                 = $details['weekdays'];
    //     $dpt_exam->special_hours            = $details['special_hours'];
    //     $dpt_exam->save();

        
    //     $destinationPathfeat = '';
    //     $filename_feat        = '';
    //     $file_feat            = $request->file('feature_image');

    //     $destinationPathfeat = public_path().'/features';
    //     $filename_feat        = str_random(6) . '_' . $file_feat->getClientOriginalName();
    //     $uploadSuccess   = $file_feat->move($destinationPathfeat, $filename_feat);


    //     $feature = new Feature;
    //     $feature->hospital_id       = $hospital_id;
    //     $feature->title             = $details['feature_title'];
    //     $feature->text              = $details['feature_text_subheading_hospital'];
    //     $feature->image             = $filename_feat;
    //     $feature->save();

    //     $destinationPatheqps = '';
    //     $filename_equip        = '';
    //     $file_equip            = $request->file('equipment_image');

    //     $destinationPatheqps = public_path().'/equipments';
    //     $filename_equip        = str_random(6) . '_' . $file_equip->getClientOriginalName();
    //     $uploadSuccess   = $file_equip->move($destinationPatheqps, $filename_equip);

    //     $equipments = new Equipments;
    //     $equipments->hospital_id            = $hospital_id ;
    //     $equipments->title                  = $details['equipment_subheading']; // should be json
    //     $equipments->text                   = $details['equipment_text_subheading_hospital']; //should be json
    //     $equipments->image                  = $filename_equip; //should be json
    //     $equipments->save();

    //     $destinationPathstfs = '';
    //     $filename_staff        = '';
    //     $file_staff            = $request->file('staff_image');

    //     $destinationPathstfs = public_path().'/staffs';
    //     $filename_staff        = str_random(6) . '_' . $file_staff->getClientOriginalName();
    //     $uploadSuccess   = $file_staff->move($destinationPathstfs, $filename_staff);

    //     $staff = new Staff;
    //     $staff->hospital_id            = $hospital_id;
    //     $staff->title                  = $details['staff_subheading_hospital'];
    //     $staff->text                   = $details['staff_comment_hospital'];
    //     $staff->image                   = $filename_staff;
    //     $staff->save();
        
    //     // return redirect::back()->with('message','Successfully Encoded');
    //     return redirect('/hospital_list');
    // }

    // //Edit Illness
    // public function edit_illness($id){
    //     $illness = DB::table('illness')->where('id','=',$id)->first();
    //     $doctors = DB::table('dv_doctors')->get();
    //     $department = DB::table('hospital_departments')->get();
    //     $risk1 = DB::table('risk_assessment')->where('ra_ill_id','=',$id)
    //                                                 ->where('ra_status','=','1')
    //                                                 ->first();
    //     $risk2 = DB::table('risk_assessment')->where('ra_ill_id','=',$id)
    //                                                 ->where('ra_status','=','2')
    //                                                 ->first();                                                 
    //     $archive = DB::table('dv_archive')->where('type','=','4')
    //                                             ->where('type_id','=',$id)
    //                                             ->get(); 
    //     //$value['auth'] = DB::table('users')->where('id','=',$authorID)->get(); 

    //     //$fetch = json_encode($value);
    //     // return $value;

    //     return view('admin.edit_illness', compact('illness', 'doctors', 'department', 'risk1', 'risk2', 'archive'));
    // }

    // //Copy Add Illness
    // public function copy_illness($id){
    //     $illness = DB::table('illness')->where('id','=',$id)->first();
    //     $doctors = DB::table('dv_doctors')->get();
    //     $department = DB::table('hospital_departments')->get();
    //     $risk1 = DB::table('risk_assessment')->where('ra_ill_id','=',$id)
    //                                                 ->where('ra_status','=','1')
    //                                                 ->first();
    //     $risk2 = DB::table('risk_assessment')->where('ra_ill_id','=',$id)
    //                                                 ->where('ra_status','=','2')
    //                                                 ->first();                                                 
    //     $archive = DB::table('dv_archive')->where('type','=','4')
    //                                             ->where('type_id','=',$id)
    //                                             ->get(); 
    //     //$value['auth'] = DB::table('users')->where('id','=',$authorID)->get(); 

    //     //$fetch = json_encode($value);
    //     // return $value;

    //     return view('admin.copy_illness', compact('illness', 'doctors', 'department', 'risk1', 'risk2', 'archive'));
    // }
    
    // //Overwrite Illness
    // public function overwrite_illness(Request $request){
    //     $details = Input::all();

    //     /* illness image */
    //     $destinationPath = '';
    //     $filename        = '';
    //     $file            = $request->file('img');

    //     $destinationPath = public_path().'/illness';
    //     $filename        = str_random(6) . '_' . $file->getClientOriginalName();
    //     $uploadSuccess   = $file->move($destinationPath, $filename);
    //     /* end of illness image */

    //     // description summary
    //     $sum_list = $details['sm']; 
    //     $response = array();
    //     foreach($sum_list as $key1 => $cert1)
    //     {
    //         $response[$key1]['sm'] = $cert1;
    //     }
    //     $jsonsum_list = json_encode($response); 

    //     // h2
    //     $h2_list = $details['h2']; 
    //     $response2 = array();
    //     foreach($h2_list as $key2 => $cert2)
    //     {
    //         $response2[$key2]['h2'] = $cert2;
    //     }
    //     $jsonh2_list = json_encode($response2);
        
    //     // subheading and Text
    //     $sub_head1a = $details['sub_head1a']; 
    //     $sub_head1b = $details['sub_head1b']; 
    //     $txt_ckeditor = $details['txt_ckeditor'];  
    //     $response_txt = array();
    //     foreach($sub_head1a as $key => $sub_head)
    //     {
    //     $response_txt[$key]['heading'] = $sub_head;
    //     $response_txt[$key]['sub'] = $sub_head1b[$key];
    //     $response_txt[$key]['txt_ckeditor'] = $txt_ckeditor[$key];
    //     }
    //     $jsoncontent = json_encode($response_txt); 

    //     // tag
    //     $tag_list = $details['tag']; 
    //     $response3 = array();
    //     foreach($tag_list as $key3 => $cert3)
    //     {
    //         $response3[$key3]['tag'] = $cert3;
    //     }
    //     $jsontag_list = json_encode($response3); 

    //     // tag department
    //     $dep_list = $details['tag_dep']; 
    //     $response4 = array();
    //     foreach($dep_list as $key4 => $cert4)
    //     {
    //         $response4[$key4]['tag_dep'] = $cert4;
    //     }
    //     $jsondep_list = json_encode($response4); 

    //     // tag symptoms
    //     $sy_list = $details['tag_sy']; 
    //     $response5 = array();
    //     foreach($sy_list as $key5 => $cert5)
    //     {
    //         $response5[$key5]['tag_sy'] = $cert5;
    //     }
    //     $jsonsy_list = json_encode($response5);

    //     // tag season
    //     $s_list = $details['tag_s']; 
    //     $response6 = array();
    //     foreach($s_list as $key6 => $cert6)
    //     {
    //         $response6[$key6]['tag_s'] = $cert6;
    //     }
    //     $jsons_list = json_encode($response6); 

    //     // tag season text
    //     $stxt_list = $details['tag_txt']; 
    //     $response7 = array();
    //     foreach($stxt_list as $key7 => $cert7)
    //     {
    //         $response7[$key7]['tag_txt'] = $cert7;
    //     }
    //     $jsonstxt_list = json_encode($response7); 

    //     // tag free
    //     $f_list = $details['tag_f']; 
    //     $response8 = array();
    //     foreach($f_list as $key8 => $cert8)
    //     {
    //         $response8[$key8]['tag_f'] = $cert8;
    //     }
    //     $jsonf_list = json_encode($response8); 

    //     // keywords
    //     $k_list = $details['kword']; 
    //     $response12 = array();
    //     foreach($k_list as $key12 => $cert12)
    //     {
    //         $response12[$key12]['kword'] = $cert12;
    //     }
    //     $jsonk_list = json_encode($response12); 
        
    //     $illness = DB::table('illness')
    //                                 ->where('id','=', $details['illID'])
    //                                 ->update([
    //                                             'ill_url'               => $details['url'],
    //                                             'ill_cat'               => $details['ill_cat'],
    //                                             'ill_shoulder'          => $details['ill_shldr'],
    //                                             'ill_name'              => $details['ill'],
    //                                             'ill_ph'                => $details['ill_ph'],
    //                                             'ill_magazine'          => $details['magazine'],
    //                                             'ill_doc'               => $details['doctor'],
    //                                             'ill_doc_role'          => $details['role'],
    //                                             'ill_doc_cmt'           => $details['doc_cmt'],
    //                                             'ill_summary'           => $jsonsum_list,
    //                                             'ill_img'               => '/illness/'.$filename,
    //                                             'ill_img_cap'           => $details['img_cap'],
    //                                             'ill_img_alt'           => $details['img_alt'],
    //                                             'ill_sub_txt'           => $jsoncontent,
    //                                             'ill_kwords'            => $jsonk_list,
    //                                             'ill_seo'               => isset($details['seo']) ? 1 : 0,
    //                                             'ill_seo_txt'           => $details['seo_txt'],
    //                                             'ill_meta_a'            => $details['meta_txt1'],
    //                                             'ill_meta_b'            => $details['meta_txt2'],
    //                                             'ill_tag_name'          => isset($details['tag_b']) ? 1 : 0,
    //                                             'ill_h1'                => $details['h1'],
    //                                             'ill_h2'                => $jsonh2_list,
    //                                             'ill_tag_kw'            => $jsontag_list,
    //                                             'ill_tag_dep'           => $jsondep_list,
    //                                             'ill_tag_symp'          => $jsonsy_list,
    //                                             'ill_tag_season'        => $jsons_list,
    //                                             'ill_tag_season_txt'    => $jsonstxt_list,
    //                                             'ill_tag_free'          => $jsonf_list,
    //                                         ]);
        
    //     // text and risk level
    //     $sh = $details['sh']; 
    //     $rl = $details['rl']; 
    //     $response_risk = array();
    //     foreach($sh as $key => $sh)
    //     {
    //     $response_risk[$key]['sh'] = $sh;
    //     $response_risk[$key]['rl'] = $rl[$key];
    //     }
    //     $jsonrskTxt = json_encode($response_risk); 

    //     // check result
    //     $cr_list = $details['cr']; 
    //     $response11 = array();
    //     foreach($cr_list as $key11 => $cert11)
    //     {
    //         $response11[$key11]['cr'] = $cert11;
    //     }
    //     $jsoncr_list = json_encode($response11); 

    //     //Risk Assessment
    //     if($details['subheading-chck'] == 1){
    //         $risk = DB::table('risk_assessment')
    //                         ->where('ra_ill_id','=', $details['illID'])
    //                         ->where('ra_status','=', '1')
    //                         ->update([
    //                                 'ra_text'        => $jsonrskTxt,
    //                                 'ra_result'      => $jsoncr_list,
    //                         ]);
    //     }

    //     // text and risk level
    //     $sh2 = $details['sh2']; 
    //     $rl2 = $details['rl2']; 
    //     $response_risk2 = array();
    //     foreach($sh2 as $key => $sh2)
    //     {
    //     $response_risk2[$key]['sh2'] = $sh2;
    //     $response_risk2[$key]['rl2'] = $rl2[$key];
    //     }
    //     $jsonrskTxt2 = json_encode($response_risk2); 

    //     // check result
    //     $cr_list2 = $details['cr2']; 
    //     $response14 = array();
    //     foreach($cr_list2 as $key14 => $cert14)
    //     {
    //         $response14[$key14]['cr2'] = $cert14;
    //     }
    //     $jsoncr_list2 = json_encode($response14); 

    //     if($details['subheading-chck2'] == 1){
    //         $risk2 = DB::table('risk_assessment')
    //                         ->where('ra_ill_id','=', $details['illID'])
    //                         ->where('ra_status','=', '2')
    //                         ->update([
    //                                 'ra_text'        => $jsonrskTxt2,
    //                                 'ra_result'      => $jsoncr_list2,
    //                         ]);
    //     }


    //     return redirect('/illness_list');
    // }

    // //Approve Request Illness Preview
    // public function approve_request_illness(Request $request){
    //     $details = Input::all();

    //     $illness = DB::table('illness')
    //                                 ->where('id','=', $details['id_ill'])
    //                                 ->update([
    //                                             'tracking_status'               => '3',
    //                                         ]);
    //     $date = date('Y-m-d');
    //     $appReq = new ApprovalRequest;
    //     $appReq->type                   = '4';
    //     $appReq->type_id                = $details['id_ill'];
    //     $appReq->date_approval_request  = $date;
    //     $appReq->save();

    //     $archive = new Archive;
    //     $archive->type                  = '4';
    //     $archive->type_id               = $details['id_ill'];
    //     $archive->tracking_type         = '3';
    //     $archive->archived_date         = $date;
    //     $archive->save();

    //     return redirect('/illness_list');
       
    // }

    // //Approve Illness Preview
    // public function approve_illness(Request $request){
    //     $details = Input::all();

    //     $illness = DB::table('illness')
    //                                 ->where('id','=', $details['id_ill'])
    //                                 ->update([
    //                                             'tracking_status'               => '4',
    //                                         ]);
    //     $date = date('Y-m-d');
    //     $approve = new ApprovalRequest;
    //     $approve->type                   = '4';
    //     $approve->type_id                = $details['id_ill'];
    //     $approve->date_approval_request  = $date;
    //     $approve->save();

    //     $archive = new Archive;
    //     $archive->type                  = '4';
    //     $archive->type_id               = $details['id_ill'];
    //     $archive->tracking_type         = '4';
    //     $archive->archived_date         = $date;
    //     $archive->save();

    //     return redirect('/illness_list');
       
    // }

    // //Release Reservation Illness
    // public function release_reservation_illness(Request $request){
    //     $details = Input::all();

    //     $illness = DB::table('illness')
    //                                 ->where('id','=', $details['id'])
    //                                 ->update([
    //                                             'tracking_status'               => '5',
    //                                         ]);
    //     $date = date('Y-m-d');
    //     $relres = new ApprovalRequest;
    //     $relres->type                   = '4';
    //     $relres->type_id                = $details['id'];
    //     $relres->date_approval_request  = $date;
    //     $relres->save();

    //     $archive = new Archive;
    //     $archive->type                  = '4';
    //     $archive->type_id               = $details['id'];
    //     $archive->tracking_type         = '5';
    //     $archive->archived_date         = $date;
    //     $archive->save();

    //     return redirect('/illness_list');
    // }

    // //Release Illness
    // public function release_illness(Request $request){
    //     $details = Input::all();

    //     $illness = DB::table('illness')
    //                                 ->where('id','=', $details['id'])
    //                                 ->update([
    //                                             'tracking_status'               => '6',
    //                                         ]);
    //     $date = date('Y-m-d');
    //     $release = new ApprovalRequest;
    //     $release->type                   = '4';
    //     $release->type_id                = $details['id'];
    //     $release->date_approval_request  = $date;
    //     $release->save();

    //     $archive = new Archive;
    //     $archive->type                  = '4';
    //     $archive->type_id               = $details['id'];
    //     $archive->tracking_type         = '6';
    //     $archive->archived_date         = $date;
    //     $archive->save();

    //     return redirect('/illness_list');
    // }

    // //Approve Request Special Preview
    // public function approve_request_special(Request $request){
    //     $details = Input::all();

    //     $special = DB::table('special')
    //                                 ->where('id','=', $details['id_sp'])
    //                                 ->update([
    //                                             'tracking_status'               => '3',
    //                                         ]);
    //     $date = date('Y-m-d');
    //     $appReq = new ApprovalRequest;
    //     $appReq->type                   = '3';
    //     $appReq->type_id                = $details['id_sp'];
    //     $appReq->date_approval_request  = $date;
    //     $appReq->save();

    //     $archive = new Archive;
    //     $archive->type                  = '3';
    //     $archive->type_id               = $details['id_sp'];
    //     $archive->tracking_type         = '3';
    //     $archive->archived_date         = $date;
    //     $archive->save();

    //     return redirect('/special_list');
       
    // }

    // //Approve Special Preview
    // public function approve_special(Request $request){
    //     $details = Input::all();

    //     $special = DB::table('special')
    //                                 ->where('id','=', $details['id_sp'])
    //                                 ->update([
    //                                             'tracking_status'               => '4',
    //                                         ]);
    //     $date = date('Y-m-d');
    //     $approve = new ApprovalRequest;
    //     $approve->type                   = '3';
    //     $approve->type_id                = $details['id_sp'];
    //     $approve->date_approval_request  = $date;
    //     $approve->save();

    //     $archive = new Archive;
    //     $archive->type                  = '3';
    //     $archive->type_id               = $details['id_sp'];
    //     $archive->tracking_type         = '4';
    //     $archive->archived_date         = $date;
    //     $archive->save();

    //     return redirect('/special_list');
       
    // }

    // //Release Reservation Special
    // public function release_reservation_special(Request $request){
    //     $details = Input::all();

    //     $special = DB::table('special')
    //                                 ->where('id','=', $details['id'])
    //                                 ->update([
    //                                             'tracking_status'               => '5',
    //                                         ]);
    //     $date = date('Y-m-d');
    //     $relres = new ApprovalRequest;
    //     $relres->type                   = '3';
    //     $relres->type_id                = $details['id'];
    //     $relres->date_approval_request  = $date;
    //     $relres->save();

    //     $archive = new Archive;
    //     $archive->type                  = '3';
    //     $archive->type_id               = $details['id'];
    //     $archive->tracking_type         = '5';
    //     $archive->archived_date         = $date;
    //     $archive->save();

    //     return redirect('/special_list');
    // }

    // //Release Special
    // public function release_special(Request $request){
    //     $details = Input::all();

    //     $special = DB::table('special')
    //                                 ->where('id','=', $details['id'])
    //                                 ->update([
    //                                             'tracking_status'               => '6',
    //                                         ]);
    //     $date = date('Y-m-d');
    //     $release = new ApprovalRequest;
    //     $release->type                   = '3';
    //     $release->type_id                = $details['id'];
    //     $release->date_approval_request  = $date;
    //     $release->save();

    //     $archive = new Archive;
    //     $archive->type                  = '3';
    //     $archive->type_id               = $details['id'];
    //     $archive->tracking_type         = '6';
    //     $archive->archived_date         = $date;
    //     $archive->save();

    //     return redirect('/special_list');
    // }
    
    // public function save_copy_doctor(Request $request){
    //     $details = Input::all();


    //     $certificate = $details['certificate']; 
    //     $response = array();
    //     foreach($certificate as $key => $cert)
    //     {
    //         $response[$key]['med_sbj_list'] = $cert;
    //     }
    //     $jsoncertificate = json_encode($response);

    //     $conference = $details['conference']; 
    //     $res = array();
    //     foreach($conference as $key => $con)
    //     {
    //         $res[$key]['med_sbj_list'] = $con;
    //     }
    //     $jsonconference = json_encode($res);

    //     $department = $details['department']; 
    //     $res2 = array();
    //     foreach($department as $key => $dep)
    //     {
    //         $res2[$key]['med_sbj_list'] = $dep;
    //     }
    //     $jsondepartment = json_encode($res2);

    //     // career Academic Background
    //     $years = $details['c_ac_year']; 
    //     $months = $details['c_ac_month']; 
    //     $descs = $details['c_ac_desc']; 
    //     $toyears = $details['c_ac_year_to']; 
    //     $tomonths = $details['c_ac_month_to']; 
    //     $todescs = $details['c_ac_desc_to']; 
    //     $response = array();
    //     foreach($years as $key => $year)
    //     {
    //     $response[$key]['from_year'] = $year;
    //     $response[$key]['from_month'] = $months[$key];
    //     $response[$key]['from_desc'] = $descs[$key];
    //     $response[$key]['to_year'] = $toyears[$key];
    //     $response[$key]['to_month'] = $tomonths[$key];
    //     $response[$key]['to_desc'] = $todescs[$key];
    //     }
    //     $academic_careers = json_encode($response); 

    //     // career work experience
    //     $weyears = $details['c_we_year']; 
    //     $wemonths = $details['c_we_month']; 
    //     $wedescs = $details['c_we_desc']; 
    //     $wetoyears = $details['c_we_year_to']; 
    //     $wetomonths = $details['c_we_month_to']; 
    //     $wetodescs = $details['c_we_desc_to']; 
    //     $weresponse = array();
    //     foreach($weyears as $key => $weyear)
    //     {
    //     $weresponse[$key]['we_from_year'] = $weyear;
    //     $weresponse[$key]['we_from_month'] = $wemonths[$key];
    //     $weresponse[$key]['we_from_desc'] = $wedescs[$key];
    //     $weresponse[$key]['we_to_year'] = $wetoyears[$key];
    //     $weresponse[$key]['we_to_month'] = $wetomonths[$key];
    //     $weresponse[$key]['we_to_desc'] = $wetodescs[$key];
    //     }
    //     $work_exp = json_encode($weresponse); 
    //     //exit;

    //     // career awards
    //     $awyears = $details['c_aw_year']; 
    //     $awmonths = $details['c_aw_month']; 
    //     $awdescs = $details['c_aw_desc']; 
    //     $awtoyears = $details['c_aw_year_to']; 
    //     $awtomonths = $details['c_aw_month_to']; 
    //     $awtodescs = $details['c_aw_desc_to']; 
    //     $awresponse = array();
    //     foreach($awyears as $key => $awyear)
    //     {
    //     $awresponse[$key]['from_year'] = $awyear;
    //     $awresponse[$key]['from_month'] = $awmonths[$key];
    //     $awresponse[$key]['from_desc'] = $awdescs[$key];
    //     $awresponse[$key]['to_year'] = $awtoyears[$key];
    //     $awresponse[$key]['to_month'] = $awtomonths[$key];
    //     $awresponse[$key]['to_desc'] = $awtodescs[$key];
    //     }
    //     $awards = json_encode($awresponse);

    //     // $destinationPath = '';
    //     // $filename        = '';
    //     // $file            = $request->file('profile_image');

    //     // $destinationPath = public_path().'/doctor_photos';
    //     // $filename        = str_random(6) . '_' . $file->getClientOriginalName();
    //     // $uploadSuccess   = $file->move($destinationPath, $filename);

    //     $doctors = DB::table('dv_doctors')->where('id','=',$details['docID'])->get();
    //     foreach($doctors as $doc){
    //         $image = $doc->image;
    //     }

    //     if(empty($details['profile_image'])){
    //         $final = $image;
            
    //     }else{
    //         $destinationPath = '';
    //         $filename        = '';
    //         $file            = $request->file('profile_image');

    //         $destinationPath = public_path().'/doctor_photos';
    //         $filename        = str_random(6) . '_' . $file->getClientOriginalName();
    //         $uploadSuccess   = $file->move($destinationPath, $filename);

    //         $final = '/doctor_photos/'.$filename;

    //     }

    //     $author = Auth::user()->id;

    //     $doctor = new Doctor;
    //     $doctor->url_generation             = $details['url_generation'] ;
    //     $doctor->status                     = $details['status'];
    //     $doctor->certificate                = $jsoncertificate;//json
    //     $doctor->name                       = $details['name'];
    //     $doctor->alphabet_name              = $details['alphabet_name'] ;
    //     $doctor->image                      = $final; //image
    //     $doctor->image_caption              = $details['img_caption'];
    //     $doctor->image_alt                  = $details['img_alt'];
    //     $doctor->industry                   = $details['industry'];
    //     $doctor->conference                 = $jsonconference;
    //     $doctor->birthday                   = $details['b_month'].'-'.$details['b_day'].'-'.$details['b_year']; //month day year
    //     $doctor->place_of_birth             = $details['place_birth'];
    //     $doctor->career_academic_back       = $academic_careers; //json
    //     $doctor->career_work_exp            = $work_exp; //json
    //     $doctor->career_awards              = $awards; //json
    //     $doctor->sort_career                = $details['n_order'];
    //     $doctor->hospital_office            = $details['hospital_office'];
    //     $doctor->department                 = $jsondepartment;
    //     $doctor->doctor_comment             = $details['doc_comment'];
    //     $doctor->tracking_status            = '1';
    //     $doctor->author                     = $author;
    //     $doctor->save();


    //     return redirect('/doctor_list');
    // }

    // //Overwrite Special
    // public function overwrite_special(Request $request){
    //     $details = Input::all();

    //     /* special image */
    //     // $destinationPath = '';
    //     // $filename        = '';
    //     // $file            = $request->file('img');

    //     // $destinationPath = public_path().'/special';
    //     // $filename        = str_random(6) . '_' . $file->getClientOriginalName();
    //     // $uploadSuccess   = $file->move($destinationPath, $filename);
    //     /* end of special image */

    //     // lead ckeditor
    //     $lead_list = $details['lead_ckeditor']; 
    //     $response = array();
    //     foreach($lead_list as $key1 => $cert1)
    //     {
    //         $response[$key1]['lead_ckeditor'] = $cert1;
    //     }
    //     $jsonlead_list = json_encode($response); 

    //     // subheading and Text
    //     $sub_head1a = $details['sub_head1a']; 
    //     $sub_head1b = $details['sub_head1b']; 
    //     $txt_ckeditor = $details['txt_ckeditor'];  
    //     $response_txt = array();
    //     foreach($sub_head1a as $key => $sub_head)
    //     {
    //     $response_txt[$key]['heading'] = $sub_head;
    //     $response_txt[$key]['sub'] = $sub_head1b[$key];
    //     $response_txt[$key]['txt_ckeditor'] = $txt_ckeditor[$key];
    //     }
    //     $jsoncontent = json_encode($response_txt); 

    //     // Ill Image
    //     $pos_list = $details['pos_ill']; 
    //     $response2 = array();
    //     foreach($pos_list as $key2 => $cert2)
    //     {
    //         $response2[$key2]['pos_ill'] = $cert2;
    //     }
    //     $jsonpos_list = json_encode($response2); 

    //     // subheading and Text
    //     $sub_head2a = $details['sub_head2a']; 
    //     $sub_head2b = $details['sub_head2b']; 
    //     $txt2_ckeditor = $details['txt2_ckeditor'];  
    //     $response_txt2 = array();
    //     foreach($sub_head2a as $key => $sub_head)
    //     {
    //     $response_txt2[$key]['heading'] = $sub_head;
    //     $response_txt2[$key]['sub'] = $sub_head2b[$key];
    //     $response_txt2[$key]['txt_ckeditor'] = $txt2_ckeditor[$key];
    //     }
    //     $jsoncontent2 = json_encode($response_txt2); 

    //     // seo keywords
    //     $k_list = $details['kword']; 
    //     $response3 = array();
    //     foreach($k_list as $key3 => $cert3)
    //     {
    //         $response3[$key3]['kword'] = $cert3;
    //     }
    //     $jsonk_list = json_encode($response3); 

    //     // h2
    //     $h2_list = $details['h2']; 
    //     $response4 = array();
    //     foreach($h2_list as $key4 => $cert4)
    //     {
    //         $response4[$key4]['h2'] = $cert4;
    //     }
    //     $jsonh2_list = json_encode($response4); 

    //     // tag
    //     $tag_list = $details['tag_ch']; 
    //     $response5 = array();
    //     foreach($tag_list as $key5 => $cert5)
    //     {
    //         $response5[$key5]['tag_ch'] = isset($cert5) ? 1 : 0;
    //     }
    //     $jsontag_list = json_encode($response5); 

    //     // tag illness
    //     $till_list = $details['tag_ill']; 
    //     $response6 = array();
    //     foreach($till_list as $key6 => $cert6)
    //     {
    //         $response6[$key6]['tag_ill'] = $cert6;
    //     }
    //     $jsontill_list = json_encode($response6); 

    //     // tag department
    //     $dep_list = $details['tag_dep']; 
    //     $response7 = array();
    //     foreach($dep_list as $key7 => $cert7)
    //     {
    //         $response7[$key7]['tag_dep'] = $cert7;
    //     }
    //     $jsondep_list = json_encode($response7); 

    //     // tag symptoms
    //     $sy_list = $details['tag_sy']; 
    //     $response8 = array();
    //     foreach($sy_list as $key8 => $cert8)
    //     {
    //         $response8[$key8]['tag_sy'] = $cert8;
    //     }
    //     $jsonsy_list = json_encode($response8); 

    //     // tag season
    //     $s_list = $details['tag_s']; 
    //     $response9 = array();
    //     foreach($s_list as $key9 => $cert9)
    //     {
    //         $response9[$key9]['tag_s'] = $cert9;
    //     }
    //     $jsons_list = json_encode($response9); 

    //     // tag text
    //     $txt_list = $details['tag_txt']; 
    //     $response10 = array();
    //     foreach($txt_list as $key10 => $cert10)
    //     {
    //         $response10[$key10]['tag_txt'] = $cert10;
    //     }
    //     $jsontxt_list = json_encode($response10);

    //     // tag free
    //     $f_list = $details['tag_f']; 
    //     $response11 = array();
    //     foreach($f_list as $key11 => $cert11)
    //     {
    //         $response11[$key11]['tag_f'] = $cert11;
    //     }
    //     $jsonf_list = json_encode($response11);
    //     $spID = $details['spID'];

    //     $special = DB::table('special')
    //                                 ->where('id','=', $details['spID'])
    //                                 ->update([
    //                                             'sp_url'                => $details['url'],
    //                                             'sp_mag'                => $details['magazine'],
    //                                             'sp_ill_cat'            => $details['ill_cat'],
    //                                             'sp_cat'                => $details['sp_cat'],
    //                                             'sp_title_shldr'        => $details['sts'],
    //                                             'sp_title'              => $details['st'],
    //                                             'sp_doc'                => $details['doctor'],
    //                                             'sp_doc_tsk'            => $details['role'],
    //                                             'sp_doc_cmt'            => $details['cmt'],
    //                                             //'sp_img'                => '/img/'.$filename,
    //                                             'sp_img_cap'            => $details['img_cap'],
    //                                             'sp_img_alt'            => $details['img_alt'],
    //                                             'sp_txt'                => $jsonlead_list,
    //                                             'sp_sum'                => $jsoncontent,
    //                                             'sp_ill_img'            => $jsonpos_list,
    //                                             'sp_sum2'               => $jsoncontent2,
    //                                             'sp_seo_kwords'         => $jsonk_list,
    //                                             'seo_title'             => $details['seo'],
    //                                             'sp_seo_txt'            => $details['seo_txt'],
    //                                             'sp_seo_desc'           => $details['meta_txt1'],
    //                                             'sp_seo_desc2'          => $details['meta_txt2'],
    //                                             'sp_h1'                 => $details['h1'],
    //                                             'sp_h2'                 => $jsonh2_list,
    //                                             'sp_tag_kw'             => $jsontag_list,
    //                                             'sp_tag_ill'            => $jsontill_list,
    //                                             'sp_tag_dep'            => $jsondep_list,
    //                                             'sp_tag_symp'           => $jsonsy_list,
    //                                             'sp_tag_season'         => $jsons_list,
    //                                             'sp_ta_season_txt'      => $jsontxt_list,
    //                                             'sp_tag_free'           => $jsonf_list,
    //                                         ]);

    //     return redirect('/special_list');
    // }

    // public function save_copy_hospital(Request $request){

    //     $details = Input::all();

    //     $hospital_id = rand();
    //     $accessdet_id = rand();
    //     $dpt_id = rand();
    //     $feature_id = rand();
    //     $explain_id = rand();
    //     $dpt_exam_id = rand();

    //     /* clinic image */
    //     $destinationPath = '';
    //     $filename        = '';
    //     $file            = $request->file('clinic_image');

    //     $destinationPath = public_path().'/clinic_image';
    //     $filename        = str_random(6) . '_' . $file->getClientOriginalName();
    //     $uploadSuccess   = $file->move($destinationPath, $filename);
    //     /* end of clinic image */

    //     $subj_list = $details['med_sbj_list']; 
    //     $response = array();
    //     foreach($subj_list as $key => $cert)
    //     {
    //         $response[$key]['med_sbj_list'] = $cert;
    //     }
    //     $jsonsubj_list = json_encode($response); 

    //     // career Academic Background
    //     $access_trans   = $details['access_trans']; 
    //     $access_from    = $details['access_from']; 
    //     $access_mins    = $details['access_mins']; 
    //     $resp = array();
    //     foreach($access_trans as $key => $access_tran)
    //     {
    //     $response[$key]['access_tran'] = $access_tran;
    //     $response[$key]['access_from'] = $access_from[$key];
    //     $response[$key]['access_mins'] = $access_mins[$key];
    //     }
    //     $access = json_encode($resp);
        

    //     $hospital = new Hospital;
    //     $hospital->hospital_id      = $hospital_id;
    //     $hospital->url              = $details['url_gen'];
    //     $hospital->medical_ins      = $details['medical_ins'];
    //     $hospital->name_phonic      = $details['medical_ins_eng'];
    //     $hospital->common_name      = $details['common_name'];
    //     $hospital->postal_code      = $details['postal_code'];
    //     $hospital->address          = $details['address'];
    //     $hospital->address_eng      = $details['address_english']; 
    //     $hospital->access           = $access;
    //     $hospital->parking          = $details['p_radio'];
    //     $hospital->phone_no         = $details['phone_no'].$details['phone_no_one'].$details['phone_no_two'];
    //     $hospital->fax              = $details['fax'].$details['fax_one'].$details['fax_two'];
    //     $hospital->email            = $details['email'];
    //     $hospital->image            = '/clinic_image/'.$filename; //clinic image / hospital image
    //     $hospital->image_caption    = $details['img_caption'];
    //     $hospital->image_alt        = $details['img_alt'];
    //     $hospital->hosp_subheading  = $details['hosp_subheading']; //it should be json script when added
    //     $hospital->hosp_text_subheading  = $details['text_subheading_hospital']; //it should be json script when added
    //     $hospital->division         = $details['division']; // added division and medical subject list and field
    //     $hospital->medsublist       = $jsonsubj_list; // should be json | dropdown and input field
    //     $hospital->save();

    //     $department = new Department;
    //     $department->dpt_name        = $details['med_subj_subheading'];
    //     $department->save();

        
    //     $dpt_exam = new DepartmentExam;
    //     $dpt_exam->hospital_id              = $hospital_id;
    //     $dpt_exam->department_id            = $details['department'];
    //     $dpt_exam->subheading               = $details['med_subj_subheading'];
    //     $dpt_exam->text_subheading          = $details['med_subj_text_subheading_hospital'];
    //     $dpt_exam->image                    = $details['department_image'];
    //     $dpt_exam->from                     = $details['from'];
    //     $dpt_exam->to                       = $details['to'];
    //     $dpt_exam->start                    = $details['start'];
    //     $dpt_exam->weekdays                 = $details['weekdays'];
    //     $dpt_exam->special_hours            = $details['special_hours'];
    //     $dpt_exam->save();

        
    //     $destinationPathfeat = '';
    //     $filename_feat        = '';
    //     $file_feat            = $request->file('feature_image');

    //     $destinationPathfeat = public_path().'/features';
    //     $filename_feat        = str_random(6) . '_' . $file_feat->getClientOriginalName();
    //     $uploadSuccess   = $file_feat->move($destinationPathfeat, $filename_feat);


    //     $feature = new Feature;
    //     $feature->hospital_id       = $hospital_id;
    //     $feature->title             = $details['feature_title'];
    //     $feature->text              = $details['feature_text_subheading_hospital'];
    //     $feature->image             = $filename_feat;
    //     $feature->save();

    //     $destinationPatheqps = '';
    //     $filename_equip        = '';
    //     $file_equip            = $request->file('equipment_image');

    //     $destinationPatheqps = public_path().'/equipments';
    //     $filename_equip        = str_random(6) . '_' . $file_equip->getClientOriginalName();
    //     $uploadSuccess   = $file_equip->move($destinationPatheqps, $filename_equip);

    //     $equipments = new Equipments;
    //     $equipments->hospital_id            = $hospital_id ;
    //     $equipments->title                  = $details['equipment_subheading']; // should be json
    //     $equipments->text                   = $details['equipment_text_subheading_hospital']; //should be json
    //     $equipments->image                  = $filename_equip; //should be json
    //     $equipments->save();

    //     $destinationPathstfs = '';
    //     $filename_staff        = '';
    //     $file_staff            = $request->file('staff_image');

    //     $destinationPathstfs = public_path().'/staffs';
    //     $filename_staff        = str_random(6) . '_' . $file_staff->getClientOriginalName();
    //     $uploadSuccess   = $file_staff->move($destinationPathstfs, $filename_staff);

    //     $staff = new Staff;
    //     $staff->hospital_id            = $hospital_id;
    //     $staff->title                  = $details['staff_subheading_hospital'];
    //     $staff->text                   = $details['staff_comment_hospital'];
    //     $staff->image                   = $filename_staff;
    //     $staff->save();
    //     //     return redirect('/hospital_list');
    //     // }

    //     $feature = new Feature;
    //     $feature->hospital_id       = $hospital_id;
    //     $feature->title             = $details['feature_title'];
    //     $feature->text              = $details['feature_text_subheading_hospital'];
    //     $feature->image             = $filename_feat;
    //     $feature->save();

    //     $destinationPatheqps = '';
    //     $filename_equip        = '';
    //     $file_equip            = $request->file('equipment_image');

    //     $destinationPatheqps = public_path().'/equipments';
    //     $filename_equip        = str_random(6) . '_' . $file_equip->getClientOriginalName();
    //     $uploadSuccess   = $file_equip->move($destinationPatheqps, $filename_equip);

    //     $equipments = new Equipments;
    //     $equipments->hospital_id            = $hospital_id ;
    //     $equipments->title                  = $details['equipment_subheading']; // should be json
    //     $equipments->text                   = $details['equipment_text_subheading_hospital']; //should be json
    //     $equipments->image                  = $filename_equip; //should be json
    //     $equipments->save();

    //     $destinationPathstfs = '';
    //     $filename_staff        = '';
    //     $file_staff            = $request->file('staff_image');

    //     $destinationPathstfs = public_path().'/staffs';
    //     $filename_staff        = str_random(6) . '_' . $file_staff->getClientOriginalName();
    //     $uploadSuccess   = $file_staff->move($destinationPathstfs, $filename_staff);

    //     $staff = new Staff;
    //     $staff->hospital_id            = $hospital_id;
    //     $staff->title                  = $details['staff_subheading_hospital'];
    //     $staff->text                   = $details['staff_comment_hospital'];
    //     $staff->image                   = $filename_staff;
    //     $staff->save();
        
    //     return redirect('/hospital_list');
    // }

    // public function doc_approve_request(Request $request){
    //     $details = Input::all();

    //     $special = DB::table('dv_doctors')
    //                                 ->where('id','=', $details['docIDappreq'])
    //                                 ->update([
    //                                             'tracking_status'               => '3',
    //                                         ]);
    //     $date = date('Y-m-d');
    //     $appReq = new ApprovalRequest;
    //     $appReq->type                   = '2';
    //     $appReq->type_id                = $details['docIDappreq'];
    //     $appReq->date_approval_request  = $date;
    //     $appReq->save();

    //     $archive = new Archive;
    //     $archive->type                  = '2';
    //     $archive->type_id               = $details['docIDappreq'];
    //     $archive->tracking_type         = '3';
    //     $archive->archived_date         = $date;
    //     $archive->save();

    //     return redirect('/doctor_list');
    // }

    // public function doc_approve(Request $request){
    //     $details = Input::all();

    //     $special = DB::table('dv_doctors')
    //                                 ->where('id','=', $details['docIDappreq'])
    //                                 ->update([
    //                                             'tracking_status'               => '4',
    //                                         ]);
    //     $date = date('Y-m-d');
    //     $appReq = new Approved;
    //     $appReq->type                   = '2';
    //     $appReq->type_id                = $details['docIDappreq'];
    //     $appReq->date_approval          = $date;
    //     $appReq->save();

    //     $archive = new Archive;
    //     $archive->type                  = '2';
    //     $archive->type_id               = $details['docIDappreq'];
    //     $archive->tracking_type         = '4';
    //     $archive->archived_date         = $date;
    //     $archive->save();

    //     return redirect('/doctor_list');
    // }

    // public function doc_release_reservation(Request $request){
    //     $details = Input::all();

    //     $special = DB::table('dv_doctors')
    //                                 ->where('id','=', $details['docIDappreq'])
    //                                 ->update([
    //                                             'tracking_status'               => '5',
    //                                         ]);
    //     $date = date('Y-m-d');
    //     $appReq = new ReleaseReservation;
    //     $appReq->type                               = '2';
    //     $appReq->type_id                            = $details['docIDappreq'];
    //     $appReq->date_release_reservation           = $date;
    //     $appReq->save();

    //     $archive = new Archive;
    //     $archive->type                  = '2';
    //     $archive->type_id               = $details['docIDappreq'];
    //     $archive->tracking_type         = '5';
    //     $archive->archived_date         = $date;
    //     $archive->save();

    //     return redirect('/doctor_list');
    // }

    // public function doc_release(Request $request){
    //     $details = Input::all();

    //     $special = DB::table('dv_doctors')
    //                                 ->where('id','=', $details['docIDappreq'])
    //                                 ->update([
    //                                             'tracking_status'               => '6',
    //                                         ]);
    //     $date = date('Y-m-d');
    //     $appReq = new Release;
    //     $appReq->type                               = '2';
    //     $appReq->type_id                            = $details['docIDappreq'];
    //     $appReq->date_release                       = $date;
    //     $appReq->save();

    //     $archive = new Archive;
    //     $archive->type                  = '2';
    //     $archive->type_id               = $details['docIDappreq'];
    //     $archive->tracking_type         = '6';
    //     $archive->archived_date         = $date;
    //     $archive->save();

    //     return redirect('/doctor_list');
    // }

}


       