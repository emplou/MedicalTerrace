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

class HospitalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save_hospital(Request $request){

        $details = Input::all();

        $hospital_id = rand();
        $accessdet_id = rand();
        $dpt_id = rand();
        $feature_id = rand();
        $explain_id = rand();
        $dpt_exam_id = rand();

        // $medinscatchtext = "testing";
        $medsublist = "testing med sub list"; // input name med_sbj_list


        /* clinic image */
        $destinationPath = '';
        $filename        = '';
        $file            = $request->file('clinic_image');

        $destinationPath = public_path().'/clinic_image';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
        /* end of clinic image */

        $subj_list = $details['med_sbj_list']; 
        $response = array();
        foreach($subj_list as $key => $cert)
        {
            $response[$key]['med_sbj_list'] = $cert;
        }
        $jsonsubj_list = json_encode($response); 

        // access
        $access_trans   = $details['access_trans']; 
        $access_from    = $details['access_from']; 
        $access_mins    = $details['access_mins']; 
        $resp = array();
        foreach($access_trans as $key => $access_tran)
        {
        $response[$key]['access_tran'] = $access_tran;
        $response[$key]['access_from'] = $access_from[$key];
        $response[$key]['access_mins'] = $access_mins[$key];
        $resp[$key]['access_tran'] = $access_tran;
        $resp[$key]['access_from'] = $access_from[$key];
        $resp[$key]['access_mins'] = $access_mins[$key];
        }
        $access = json_encode($resp);

        // branch address with english
        $branch_name            = $details['branch_name']; 
        $branch_address         = $details['branch_address']; 
        $branch_name_eng        = $details['branch_name_eng']; 
        $branch_address_eng     = $details['branch_address_eng'];
        $branchresp = array();
        foreach($branch_name as $key => $branch)
        {
        $branchresp[$key]['branch_name']          = $branch;
        $branchresp[$key]['branch_address']       = $branch_address[$key];
        $branchresp[$key]['branch_name_eng']      = $branch_name_eng[$key];
        $branchresp[$key]['branch_address_eng']   = $branch_address_eng[$key];
        }
        $branch_json = json_encode($branchresp);

        // branch address with english
        $branch_name            = $details['branch_name']; 
        $branch_address         = $details['branch_address']; 
        $branch_name_eng        = $details['branch_name_eng']; 
        $branch_address_eng     = $details['branch_address_eng'];
        $branchresp = array();
        foreach($branch_name as $key => $branch)
        {
        $branchresp[$key]['branch_name']          = $branch;
        $branchresp[$key]['branch_address']       = $branch_address[$key];
        $branchresp[$key]['branch_name_eng']      = $branch_name_eng[$key];
        $branchresp[$key]['branch_address_eng']   = $branch_address_eng[$key];
        }
        $branch_json = json_encode($branchresp);

        //parking json
        $p_radio                = $details['p_radio']; 
        $parking_text           = $details['parking_text']; 
        $parking_units          = $details['parking_units'];
        $parkresp = array();
        foreach($p_radio as $key => $park)
        {
        $parkresp[$key]['p_radio']            = $park;
        $parkresp[$key]['parking_text']       = $parking_text[$key];
        $parkresp[$key]['parking_units']      = $parking_units[$key];
        }
        $parking_json = json_encode($parkresp);

        //hospitalization json
        $hospitalization        = $details['hospitalization']; 
        $parking_text           = $details['hospitalization_text']; 
        $hospresp = array();
        foreach($hospitalization as $key => $hosp)
        {
        $hospresp[$key]['hosp']            = $hosp;
        $hospresp[$key]['hosp_text']       = $parking_text[$key];
        }
        $hosp_json = json_encode($hospresp);

        //free medical expenses json
        $med_item                   = $details['med_item']; 
        $med_cost                   = $details['med_cost']; 
        $free_med_exp               = $details['free_med_exp'];
        $medresp = array();
        foreach($med_item as $key => $med)
        {
        $medresp[$key]['med_item']              = $med;
        $medresp[$key]['med_cost']              = $med_cost[$key];
        $medresp[$key]['free_med_exp']          = $free_med_exp[$key];
        }
        $med_json = json_encode($medresp);

        //Number of beds json
        $bed_type               = $details['bed_type']; 
        $no_of_beds             = $details['no_of_beds']; 
        $bedresp = array();
        foreach($bed_type as $key => $bed)
        {
        $bedresp[$key]['bed_type']              = $bed;
        $bedresp[$key]['no_of_beds']            = $no_of_beds[$key];
        }
        $bed_json = json_encode($bedresp);

        //visit time json

        $a = $details['visit'];
        $vis = implode(',',$a);

        $visit_from          = $details['visit_from']; 
        $visit_to            = $details['visit_to']; 
        $visit               = $vis;
        $visitresp = array();
        foreach($visit_from as $key => $visit_hosp)
        {
        $visitresp[$key]['visit_from']                = $visit_hosp;
        $visitresp[$key]['visit_to']                  = $med_cost[$key];
        $visitresp[$key]['visit_days']                = $free_med_exp[$key];
        }
        $visit_json = json_encode($visitresp);

        //Credit card json
        $card                   = $details['card']; 
        $card_text              = $details['credit_card']; 
        $cardresp = array();
        foreach($card as $key => $c)
        {
        $cardresp[$key]['card']                  = $c;
        $cardresp[$key]['card_text']             = $card_text[$key];
        }
        $bed_json = json_encode($cardresp);

        
        $author = Auth::user()->id;

        $hospital = new Hospital;
        $hospital->hospital_id      = $hospital_id;
        $hospital->url              = $details['url_gen'];
        $hospital->medical_ins      = $details['medical_ins'];
        $hospital->name_phonic      = $details['medical_ins_eng'];
        $hospital->common_name      = $details['common_name'];
        $hospital->postal_code      = $details['postal_code'];
        $hospital->address          = $details['address'];
        $hospital->address_eng      = $details['address_english']; 
        $hospital->branch_address_w_eng      = $branch_json; // branch address
        $hospital->access           = $access;
        $hospital->parking          = $parking_json;
        $hospital->phone_no         = $details['phone_no'].'-'.$details['phone_no_one'].'-'.$details['phone_no_two'];
        $hospital->fax              = $details['fax'].'-'.$details['fax_one'].'-'.$details['fax_two'];
        $hospital->email            = $details['email'];
        $hospital->image            = '/medicalterrace/public/clinic_image/'.$filename; //clinic image / hospital image
        $hospital->image_caption    = $details['img_caption'];
        $hospital->image_alt        = $details['img_alt'];
        $hospital->hosp_subheading  = $details['hosp_subheading']; //it should be json script when added
        $hospital->hosp_text_subheading  = $details['textheading_lead']; //it should be json script when added
        //$hospital->medinscatchtext  = $medinscatchtext; //should be json
        $hospital->division         = $details['division']; // added division and medical subject list and field
        $hospital->medsublist       = $jsonsubj_list; // should be json | dropdown and input field

        $hospital->url_hosp         = $details['url_hosp'];
        $hospital->in_hospital_pres = $details['pres'];
        $hospital->free_med_exp     = $med_json; //json
        $hospital->hospitalization  = $hosp_json; //json
        $hospital->no_of_beds       = $bed_json; //json
        $hospital->possible_date_of_visit = $visit_json; //json
        $hospital->in_hospital_services   = $details['hosp_service']; 
        $hospital->support_lang     = $details['support_lang'];
        $hospital->shop_dining_room = $details['shop_dining_room']; 
        $hospital->credit_card_payment    = $bed_json; //json
        $hospital->tracking_status    = '1'; 
        $hospital->author           = $author; 
        $hospital->save();

        // $department = new Department;
        // $department->dpt_name        = $details['med_subj_subheading'];
        // $department->save();

        
        /* department image */
        $destinationPath = '';
        $filenamedpt        = '';
        $file_dpt            = $request->file('dpt_subject_image');

        $destinationPath = public_path().'/department_photos';
        $filenamedpt        = str_random(6) . '_' . $file_dpt->getClientOriginalName();
        $uploadSuccess   = $file_dpt->move($destinationPath, $filenamedpt);
        /* end of department image */

        //examintation per department json
        $department                             = $details['department'];
        $departmentresp = array();
        foreach($department as $key => $depart)
        {
        $departmentresp[$key]['department']                         = $depart;
        }
        $department_json = json_encode($departmentresp);


        $ex_med_subj_subheading                 = $details['ex_med_subj_subheading']; 
        $ex_med_subj_subheadingresp = array();
        foreach($ex_med_subj_subheading as $key => $ex_med_subj)
        {
        $ex_med_subj_subheadingresp[$key]['department']                         = $ex_med_subj;
        }
        $ex_med_subj_subheading_json = json_encode($ex_med_subj_subheadingresp);


        $med_subj_text_subheading_hospital      = $details['med_subj_text_subheading_hospital'];
        $med_subj_text_subheading_hospitalresp = array();
        foreach($med_subj_text_subheading_hospital as $key => $med_subj_text_subheading)
        {
        $med_subj_text_subheading_hospitalresp[$key]['department']                         = $med_subj_text_subheading;
        }
        $med_subj_text_subheading_hospital_json = json_encode($med_subj_text_subheading_hospitalresp);



        $from                                   = $details['from'];
        $fromresp = array();
        foreach($from as $key => $f)
        {
        $fromresp[$key]['from']                         = $f;
        }
        $from_json = json_encode($fromresp);


        $to                                     = $details['to'];
        $toresp = array();
        foreach($from as $key => $t)
        {
        $toresp[$key]['to']                         = $t;
        }
        $to_json = json_encode($toresp);


        $start                                  = $details['start'];
        $startresp = array();
        foreach($start as $key => $s)
        {
        $startresp[$key]['to']                         = $s;
        }
        $start_json = json_encode($startresp);


        $weekdays                               = $details['weekdays'];
        $weekdaysresp = array();
        foreach($weekdays as $key => $w)
        {
        $weekdaysresp[$key]['to']                         = $w;
        }
        $weekdays_json = json_encode($startresp);


        // $from2                                  = $details['from2'];
        // $to2                                    = $details['to2'];
        // $start2                                 = $details['start2'];
        // $weekdays2                              = $details['weekdays2'];
        $special_hours                          = $details['special_hours'];
        $spfrom                                 = $details['spfrom'];
        $spto                                   = $details['spto'];
        $spstart                                = $details['spstart'];
        $spweekdays                             = $details['spweekdays'];

        $specialresp = array();
        foreach($special_hours as $key => $spe)
        {
        $specialresp[$key]['special_hours']                     = $spe;
        $specialresp[$key]['spfrom']                            = $spfrom[$key];
        $specialresp[$key]['spto']                              = $spto[$key];
        $specialresp[$key]['spstart']                           = $spstart[$key];
        $specialresp[$key]['spweekdays']                        = $spweekdays[$key];
        }
        $special_json = json_encode($specialresp);

    //     foreach ($metas as $meta =>$value){
    //         $m = new MyModel();
    //         $m->Meta_col = $meta;
    //         $m->Value_col = $value;
    //         $m->save();
    //  }

        
        $dpt_exam = new DepartmentExam;
        $dpt_exam->hospital_id              = $hospital_id;
        $dpt_exam->department_id            = $department_json;
        $dpt_exam->subheading               = $ex_med_subj_subheading_json;
        $dpt_exam->text_subheading          = $med_subj_text_subheading_hospital_json;
        $dpt_exam->image                    = '/department_photos/'.$filenamedpt;
        $dpt_exam->from                     = $from_json;
        $dpt_exam->to                       = $to_json;
        $dpt_exam->start                    = $start_json;
        $dpt_exam->weekdays                 = $weekdays_json;
        $dpt_exam->special_exam             = $special_json;
        $dpt_exam->save();

        
        $destinationPathfeat = '';
        $filename_feat        = '';
        $file_feat            = $request->file('feature_image');

        // $destinationPathfeat = public_path().'/features';
        // $filename_feat        = str_random(6) . '_' . $file_feat->getClientOriginalName();
        // $uploadSuccess   = $file_feat->move($destinationPathfeat, $filename_feat);


        $feature_title = $details['feature_title'];
        $featuretitleresp = array();
        foreach($feature_title as $key => $title)
        {
        $featuretitleresp[$key]['feature_title']                     = $title;
        }
        $feature_title_json = json_encode($featuretitleresp);


        $feature_text = $details['feature_text_subheading_hospital'];
        $feature_textresp = array();
        foreach($feature_text as $key => $feat_text)
        {
        $feature_textresp[$key]['feature_text']                     = $feat_text;
        }
        $feature_text_json = json_encode($feature_textresp);

        // $feature_text = $details['feature_text_subheading_hospital'];
        // $feature_image_resp = array();
        // foreach($filename_feat as $key => $feat_filename)
        // {
        // $feature_image_resp[$key]['feature_image']                     = '/features/'.$feat_filename;
        // }
        // $feature_image_json = json_encode($feature_image_resp);


        $feature = new Feature;
        $feature->hospital_id       = $hospital_id;
        $feature->title             = $feature_title_json;
        $feature->text              = $feature_text_json;
        $feature->image             = '$feature_image_json';
        $feature->save();

        // Equipments

        $destinationPatheqps = '';
        $filename_equip        = '';
        $file_equip            = $request->file('equipment_image');

        // $destinationPatheqps = public_path().'/equipments';
        // $filename_equip        = str_random(6) . '_' . $file_equip->getClientOriginalName();
        // $uploadSuccess   = $file_equip->move($destinationPatheqps, $filename_equip);

        $equipment = $details['text_equipment_subheading'];
        $equipmentresp = array();
        foreach($equipment as $key => $equip)
        {
        $equipmentresp[$key]['equipment_subheading']                     = $equip;
        }
        $equipment_json = json_encode($equipmentresp);


        $equipment_text = $details['equipment_subheading2'];
        $equipment_textresp = array();
        foreach($equipment_text as $key => $equip_text)
        {
        $equipment_textresp[$key]['equipment_text']                     = $equip_text;
        }
        $equip_text_json = json_encode($equipment_textresp);

        // $feature_text = $details['feature_text_subheading_hospital'];
        // $equip_image_resp = array();
        // foreach($filename_equip as $key => $filename_equip_img)
        // {
        // $equip_image_resp[$key]['equip_image']                     = '/equipments/'.$filename_equip_img;
        // }
        // $feature_image_json = json_encode($equip_image_resp);

        $equipments = new Equipments;
        $equipments->hospital_id            = $hospital_id ;
        $equipments->title                  = $equipment_json; // should be json
        $equipments->text                   = $equip_text_json; //should be json
        $equipments->image                  = '$feature_image_json'; //should be json
        $equipments->save();

        // Staff division

        $destinationPathstfs = '';
        $filename_staff        = '';
        $file_staff            = $request->file('staff_image');

        // $destinationPathstfs = public_path().'/staffs';
        // $filename_staff        = str_random(6) . '_' . $file_staff->getClientOriginalName();
        // $uploadSuccess   = $file_staff->move($destinationPathstfs, $filename_staff);
        
        $staff_subheading = $details['med_subj_subheading'];
        $staff_subheadingresp = array();
        foreach($staff_subheading as $key => $staff)
        {
        $staff_subheadingresp[$key]['staff_subheading']                     = $staff;
        }
        $staff_subheading_json = json_encode($staff_subheadingresp);


        $staff_comment = $details['staff_comment_hospital'];
        $staff_commentresp = array();
        foreach($staff_comment as $key => $staff_com)
        {
        $staff_commentresp[$key]['staff_comment']                     = $staff_com;
        }
        $staff_comment_json = json_encode($staff_commentresp);

        // $feature_text = $details['feature_text_subheading_hospital'];
        // $filename_staff_resp = array();
        // foreach($filename_staff as $key => $filename_staff_img)
        // {
        // $filename_staff_resp[$key]['equip_image']                     = '/staffs/'.$filename_staff_img;
        // }
        // $staff_image_json = json_encode($filename_staff_resp);



        $staff = new Staff;
        $staff->hospital_id            = $hospital_id;
        $staff->title                  = $staff_subheading_json;
        $staff->text                   = $staff_comment_json;
        $staff->image                  = '$staff_image_json';
        $staff->save();
        
        // return redirect::back()->with('message','Successfully Encoded');
        return redirect('/hospital_list');
    }

    public function save_edit_hospital(){

        $details = Input::all();

        $guides = DB::table('dv_hospital')
                            ->where('hospital_id','=', $details['hospitalID'])
                            ->update([
                                        'url'          => $details['url_gen'],
                                        'name'         => $details['medical_ins'],
                                        'name_phonic'  => $details['medical_ins_eng'],
                                        'common_name'  => $details['common_name'],
                                        'postal_code'  => $details['postal_code'],
                                        'address'      => $details['address'],
                                        'address_eng'  => $details['address_english'],
                                        'parking'      => $details['p_radio'],
                                        // 'image'        => $details['fullname'],
                                        'img_caption'  => $details['img_caption'],
                                        'img_alt'      => $details['img_alt'],
                                        'phone_no'     => $details['phone_no'].$details['phone_no_one'].$details['phone_no_two'],
                                        'fax'          => $details['fax'].$details['fax_one'].$details['fax_two'],
                                        'email'        => $details['email'],
                                        // 'medinscatchtext' => $details['fullname'], 
                                        // 'division'     => $details['fullname'],
                                        // 'medsublist'   => $details['fullname'],
                                        // 'hosp_subheading' => $details['fullname'],
                                        // 'hosp_text_subheading' => $details['fullname'],
                                    ]);

        // return redirect('/guides_list');

        return view('admin.edit_hospital');
    }

    public function modal_edit_hospital($id){
        $value['data'] = DB::table('dv_hospital')->where('id','=',$id)->get();

        $hospital = DB::table('dv_hospital')->where('id','=',$id)->get();
        foreach($hospital as $hosp){
            $hosp_id = $hosp->hospital_id;
        }

        $value['hosp_dpt'] = DB::table('hospital_departments')->get();
        $value['dpt_exam'] = DB::table('hospital_departments_exam')->where('hospital_id','=',$hosp_id)->get();
        $value['hosp_feature'] = DB::table('hospital_feature')->where('hospital_id','=',$hosp_id)->get();
        $value['equip'] = DB::table('equipments')->where('hospital_id','=',$hosp_id)->get();
        $value['staff'] = DB::table('hospital_staff')->where('hospital_id','=',$hosp_id)->get();

        $fetch = json_encode($value);

        return $fetch;
    }

    public function save_overwrite_hospital(Request $request){

        $details = Input::all();

        $hospital_id = rand();
        $accessdet_id = rand();
        $dpt_id = rand();
        $feature_id = rand();
        $explain_id = rand();
        $dpt_exam_id = rand();

        // $medinscatchtext = "testing";
        $medsublist = "testing med sub list"; // input name med_sbj_list


        /* clinic image */
        $destinationPath = '';
        $filename        = '';
        $file            = $request->file('clinic_image');

        $destinationPath = public_path().'/clinic_image';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
        /* end of clinic image */

        $subj_list = $details['med_sbj_list']; 
        $response = array();
        foreach($subj_list as $key => $cert)
        {
            $response[$key]['med_sbj_list'] = $cert;
        }
        $jsonsubj_list = json_encode($response); 

        // career Academic Background
        $access_trans   = $details['access_trans']; 
        $access_from    = $details['access_from']; 
        $access_mins    = $details['access_mins']; 
        $resp = array();
        foreach($access_trans as $key => $access_tran)
        {
        $response[$key]['access_tran'] = $access_tran;
        $response[$key]['access_from'] = $access_from[$key];
        $response[$key]['access_mins'] = $access_mins[$key];
        }
        $access = json_encode($resp);
        

        $hospital = new Hospital;
        $hospital->hospital_id      = $hospital_id;
        $hospital->url              = $details['url_gen'];
        $hospital->medical_ins      = $details['medical_ins'];
        $hospital->name_phonic      = $details['medical_ins_eng'];
        $hospital->common_name      = $details['common_name'];
        $hospital->postal_code      = $details['postal_code'];
        $hospital->address          = $details['address'];
        $hospital->address_eng      = $details['address_english']; 
        $hospital->access           = $access;
        $hospital->parking          = $details['p_radio'];
        $hospital->phone_no         = $details['phone_no'].$details['phone_no_one'].$details['phone_no_two'];
        $hospital->fax              = $details['fax'].$details['fax_one'].$details['fax_two'];
        $hospital->email            = $details['email'];
        $hospital->image            = '/clinic_image/'.$filename; //clinic image / hospital image
        $hospital->image_caption    = $details['img_caption'];
        $hospital->image_alt        = $details['img_alt'];
        $hospital->hosp_subheading  = $details['hosp_subheading']; //it should be json script when added
        $hospital->hosp_text_subheading  = $details['text_subheading_hospital']; //it should be json script when added
        //$hospital->medinscatchtext  = $medinscatchtext; //should be json
        $hospital->division         = $details['division']; // added division and medical subject list and field
        $hospital->medsublist       = $jsonsubj_list; // should be json | dropdown and input field
        $hospital->save();

        $department = new Department;
        $department->dpt_name        = $details['med_subj_subheading'];
        $department->save();

        
        /* department image */
        $destinationPath = '';
        $filenamedpt        = '';
        $file_dpt            = $request->file('show_img');

        $destinationPath = public_path().'/department_photos';
        $filenamedpt        = str_random(6) . '_' . $file_dpt->getClientOriginalName();
        $uploadSuccess   = $file_dpt->move($destinationPath, $filenamedpt);
        /* end of department image */

        
        $dpt_exam = new DepartmentExam;
        $dpt_exam->hospital_id              = $hospital_id;
        $dpt_exam->department_id            = $details['department'];
        $dpt_exam->subheading               = $details['med_subj_subheading'];
        $dpt_exam->text_subheading          = $details['med_subj_text_subheading_hospital'];
        $dpt_exam->image                    = '/department_photos/'.$filenamedpt;
        $dpt_exam->from                     = $details['from'];
        $dpt_exam->to                       = $details['to'];
        $dpt_exam->start                    = $details['start'];
        $dpt_exam->weekdays                 = $details['weekdays'];
        $dpt_exam->special_hours            = $details['special_hours'];
        $dpt_exam->save();

        
        $destinationPathfeat = '';
        $filename_feat        = '';
        $file_feat            = $request->file('feature_image');

        $destinationPathfeat = public_path().'/features';
        $filename_feat        = str_random(6) . '_' . $file_feat->getClientOriginalName();
        $uploadSuccess   = $file_feat->move($destinationPathfeat, $filename_feat);


        $feature = new Feature;
        $feature->hospital_id       = $hospital_id;
        $feature->title             = $details['feature_title'];
        $feature->text              = $details['feature_text_subheading_hospital'];
        $feature->image             = $filename_feat;
        $feature->save();

        $destinationPatheqps = '';
        $filename_equip        = '';
        $file_equip            = $request->file('equipment_image');

        $destinationPatheqps = public_path().'/equipments';
        $filename_equip        = str_random(6) . '_' . $file_equip->getClientOriginalName();
        $uploadSuccess   = $file_equip->move($destinationPatheqps, $filename_equip);

        $equipments = new Equipments;
        $equipments->hospital_id            = $hospital_id ;
        $equipments->title                  = $details['equipment_subheading']; // should be json
        $equipments->text                   = $details['equipment_text_subheading_hospital']; //should be json
        $equipments->image                  = $filename_equip; //should be json
        $equipments->save();

        $destinationPathstfs = '';
        $filename_staff        = '';
        $file_staff            = $request->file('staff_image');

        $destinationPathstfs = public_path().'/staffs';
        $filename_staff        = str_random(6) . '_' . $file_staff->getClientOriginalName();
        $uploadSuccess   = $file_staff->move($destinationPathstfs, $filename_staff);

        $staff = new Staff;
        $staff->hospital_id            = $hospital_id;
        $staff->title                  = $details['staff_subheading_hospital'];
        $staff->text                   = $details['staff_comment_hospital'];
        $staff->image                   = $filename_staff;
        $staff->save();
        
        // return redirect::back()->with('message','Successfully Encoded');
        return redirect('/hospital_list');
    }

    public function save_copy_hospital(Request $request){

        $details = Input::all();

        $hospital_id = rand();
        $accessdet_id = rand();
        $dpt_id = rand();
        $feature_id = rand();
        $explain_id = rand();
        $dpt_exam_id = rand();

        /* clinic image */
        $destinationPath = '';
        $filename        = '';
        $file            = $request->file('clinic_image');

        $destinationPath = public_path().'/clinic_image';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
        /* end of clinic image */

        $subj_list = $details['med_sbj_list']; 
        $response = array();
        foreach($subj_list as $key => $cert)
        {
            $response[$key]['med_sbj_list'] = $cert;
        }
        $jsonsubj_list = json_encode($response); 

        // career Academic Background
        $access_trans   = $details['access_trans']; 
        $access_from    = $details['access_from']; 
        $access_mins    = $details['access_mins']; 
        $resp = array();
        foreach($access_trans as $key => $access_tran)
        {
        $response[$key]['access_tran'] = $access_tran;
        $response[$key]['access_from'] = $access_from[$key];
        $response[$key]['access_mins'] = $access_mins[$key];
        }
        $access = json_encode($resp);
        

        $hospital = new Hospital;
        $hospital->hospital_id      = $hospital_id;
        $hospital->url              = $details['url_gen'];
        $hospital->medical_ins      = $details['medical_ins'];
        $hospital->name_phonic      = $details['medical_ins_eng'];
        $hospital->common_name      = $details['common_name'];
        $hospital->postal_code      = $details['postal_code'];
        $hospital->address          = $details['address'];
        $hospital->address_eng      = $details['address_english']; 
        $hospital->access           = $access;
        $hospital->parking          = $details['p_radio'];
        $hospital->phone_no         = $details['phone_no'].$details['phone_no_one'].$details['phone_no_two'];
        $hospital->fax              = $details['fax'].$details['fax_one'].$details['fax_two'];
        $hospital->email            = $details['email'];
        $hospital->image            = '/clinic_image/'.$filename; //clinic image / hospital image
        $hospital->image_caption    = $details['img_caption'];
        $hospital->image_alt        = $details['img_alt'];
        $hospital->hosp_subheading  = $details['hosp_subheading']; //it should be json script when added
        $hospital->hosp_text_subheading  = $details['text_subheading_hospital']; //it should be json script when added
        $hospital->division         = $details['division']; // added division and medical subject list and field
        $hospital->medsublist       = $jsonsubj_list; // should be json | dropdown and input field
        $hospital->save();

        $department = new Department;
        $department->dpt_name        = $details['med_subj_subheading'];
        $department->save();

        
        $dpt_exam = new DepartmentExam;
        $dpt_exam->hospital_id              = $hospital_id;
        $dpt_exam->department_id            = $details['department'];
        $dpt_exam->subheading               = $details['med_subj_subheading'];
        $dpt_exam->text_subheading          = $details['med_subj_text_subheading_hospital'];
        $dpt_exam->image                    = $details['department_image'];
        $dpt_exam->from                     = $details['from'];
        $dpt_exam->to                       = $details['to'];
        $dpt_exam->start                    = $details['start'];
        $dpt_exam->weekdays                 = $details['weekdays'];
        $dpt_exam->special_hours            = $details['special_hours'];
        $dpt_exam->save();

        
        $destinationPathfeat = '';
        $filename_feat        = '';
        $file_feat            = $request->file('feature_image');

        $destinationPathfeat = public_path().'/features';
        $filename_feat        = str_random(6) . '_' . $file_feat->getClientOriginalName();
        $uploadSuccess   = $file_feat->move($destinationPathfeat, $filename_feat);


        $feature = new Feature;
        $feature->hospital_id       = $hospital_id;
        $feature->title             = $details['feature_title'];
        $feature->text              = $details['feature_text_subheading_hospital'];
        $feature->image             = $filename_feat;
        $feature->save();

        $destinationPatheqps = '';
        $filename_equip        = '';
        $file_equip            = $request->file('equipment_image');

        $destinationPatheqps = public_path().'/equipments';
        $filename_equip        = str_random(6) . '_' . $file_equip->getClientOriginalName();
        $uploadSuccess   = $file_equip->move($destinationPatheqps, $filename_equip);

        $equipments = new Equipments;
        $equipments->hospital_id            = $hospital_id ;
        $equipments->title                  = $details['equipment_subheading']; // should be json
        $equipments->text                   = $details['equipment_text_subheading_hospital']; //should be json
        $equipments->image                  = $filename_equip; //should be json
        $equipments->save();

        $destinationPathstfs = '';
        $filename_staff        = '';
        $file_staff            = $request->file('staff_image');

        $destinationPathstfs = public_path().'/staffs';
        $filename_staff        = str_random(6) . '_' . $file_staff->getClientOriginalName();
        $uploadSuccess   = $file_staff->move($destinationPathstfs, $filename_staff);

        $staff = new Staff;
        $staff->hospital_id            = $hospital_id;
        $staff->title                  = $details['staff_subheading_hospital'];
        $staff->text                   = $details['staff_comment_hospital'];
        $staff->image                   = $filename_staff;
        $staff->save();
        //     return redirect('/hospital_list');
        // }

        $feature = new Feature;
        $feature->hospital_id       = $hospital_id;
        $feature->title             = $details['feature_title'];
        $feature->text              = $details['feature_text_subheading_hospital'];
        $feature->image             = $filename_feat;
        $feature->save();

        $destinationPatheqps = '';
        $filename_equip        = '';
        $file_equip            = $request->file('equipment_image');

        $destinationPatheqps = public_path().'/equipments';
        $filename_equip        = str_random(6) . '_' . $file_equip->getClientOriginalName();
        $uploadSuccess   = $file_equip->move($destinationPatheqps, $filename_equip);

        $equipments = new Equipments;
        $equipments->hospital_id            = $hospital_id ;
        $equipments->title                  = $details['equipment_subheading']; // should be json
        $equipments->text                   = $details['equipment_text_subheading_hospital']; //should be json
        $equipments->image                  = $filename_equip; //should be json
        $equipments->save();

        $destinationPathstfs = '';
        $filename_staff        = '';
        $file_staff            = $request->file('staff_image');

        $destinationPathstfs = public_path().'/staffs';
        $filename_staff        = str_random(6) . '_' . $file_staff->getClientOriginalName();
        $uploadSuccess   = $file_staff->move($destinationPathstfs, $filename_staff);

        $staff = new Staff;
        $staff->hospital_id            = $hospital_id;
        $staff->title                  = $details['staff_subheading_hospital'];
        $staff->text                   = $details['staff_comment_hospital'];
        $staff->image                   = $filename_staff;
        $staff->save();
        
        return redirect('/hospital_list');
    }

    // HOSPITAL PROCESS

    public function hosp_approve_request(Request $request){
        $details = Input::all();

        $special = DB::table('dv_hospital')
                                    ->where('id','=', $details['hospIDappreq'])
                                    ->update([
                                                'tracking_status'               => '3',
                                            ]);
        $date = date('Y-m-d');
        $appReq = new ApprovalRequest;
        $appReq->type                   = '1';
        $appReq->type_id                = $details['hospIDappreq'];
        $appReq->date_approval_request  = $date;
        $appReq->save();

        $archive = new Archive;
        $archive->type                  = '1';
        $archive->type_id               = $details['hospIDappreq'];
        $archive->tracking_type         = '3';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/hospital_list');
    }

    public function hosp_approve(Request $request){
        $details = Input::all();

        $special = DB::table('dv_hospital')
                                    ->where('id','=', $details['hospIDappreq'])
                                    ->update([
                                                'tracking_status'               => '4',
                                            ]);
        $date = date('Y-m-d');
        $appReq = new Approved;
        $appReq->type                   = '1';
        $appReq->type_id                = $details['hospIDappreq'];
        $appReq->date_approval          = $date;
        $appReq->save();

        $archive = new Archive;
        $archive->type                  = '1';
        $archive->type_id               = $details['hospIDappreq'];
        $archive->tracking_type         = '4';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/hospital_list');
    }

    public function hosp_release_reservation(Request $request){
        $details = Input::all();

        $special = DB::table('dv_hospital')
                                    ->where('id','=', $details['hospIDappreq'])
                                    ->update([
                                                'tracking_status'               => '5',
                                            ]);
        $date = date('Y-m-d');
        $appReq = new ReleaseReservation;
        $appReq->type                               = '1';
        $appReq->type_id                            = $details['hospIDappreq'];
        $appReq->date_release_reservation           = $date;
        $appReq->save();

        $archive = new Archive;
        $archive->type                  = '1';
        $archive->type_id               = $details['hospIDappreq'];
        $archive->tracking_type         = '5';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/hospital_list');
    }

    public function hosp_release(Request $request){
        $details = Input::all();

        $special = DB::table('dv_hospital')
                                    ->where('id','=', $details['hospIDappreq'])
                                    ->update([
                                                'tracking_status'               => '6',
                                            ]);
        $date = date('Y-m-d');
        $appReq = new ReleaseReservation;
        $appReq->type                               = '1';
        $appReq->type_id                            = $details['hospIDappreq'];
        $appReq->date_release                       = $date;
        $appReq->save();

        $archive = new Archive;
        $archive->type                  = '1';
        $archive->type_id               = $details['hospIDappreq'];
        $archive->tracking_type         = '6';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/hospital_list');
    }
}
