<?php

namespace MedicalTerrace\Http\Controllers;

use Illuminate\Http\Request;
use App\Illness_Category;
use MedicalTerrace\Doctor;
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
        return view('home');
    }

    public function add_doctor(){
        return view('admin.add_doctor');
    }

    public function add_illness(){
        $items = DB::table('illness_category')->pluck('category_name')->all();
        $doctors = DB::table('dv_doctors')->pluck('name')->all();
        return view('admin.add_illness', compact('id', 'items', 'doctors'));
    }

    public function add_hospital(){
        return view('admin.add_hospital');
    }

    public function add_special(){
        return view('admin.add_special');
    }

    public function illness_list(){
        return view('admin.illness_list');
    }

    public function doctor_list(){
        return view('admin.doctor_list');
    }
    public function hospital_list(){
        return view('admin.hospital_list');
    }
    public function special_list(){
        return view('admin.special_list');
    }

    public function save_hospital(){

        $details = Input::all();

        $hospital_id = str_random(6);
        $accessdet_id = str_random(6);
        $dpt_id = str_random(6);
        $feature_id = str_random(6);
        $explain_id = str_random(6);

        $medinscatchtext = "testing";
        $medsublist = "testing med sub list"; // input name med_sbj_list


        /* clinic image */
        $destinationPath = '';
        $filename        = '';
        $file            = $request->file('clinic_image');

        $destinationPath = public_path().'/clinic_image';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
        /* end of clinic image */

        $certificate = $this->input->post('med_sbj_list'); 
        $response = array();
        foreach($certificate as $key => $cert)
        {
            $response[$key]['med_sbj_list'] = $cert;
        }
        $jsoncertificate = json_encode($response); 
        

        $hospital = new Hospital;
        $hospital->hospital_id      = $hospital_id;
        $hospital->url              = $details['url_gen'];
        $hospital->name             = $details['medical_ins'];
        $hospital->name_phonic      = $details['medical_ins_eng'];
        $hospital->common_name      = $details['common_name'];
        $hospital->postal_code      = $details['postal_code'];
        $hospital->address          = $details['address'];
        $hospital->address_eng      = $details['address_english']; //end
        $hospital->parking          = $details['p_radio'];
        $hospital->image            = '/clinic_image/'.$filename; //clinic image / hospital image
        $hospital->img_caption      = $details['img_caption'];
        $hospital->img_alt          = $details['img_alt'];
        $hospital->phone_no         = $details['phone_no'].$details['phone_no_one'].$details['phone_no_two'];
        $hospital->fax              = $details['fax'].$details['fax_one'].$details['fax_two'];
        $hospital->email            = $details['email'];
        $hospital->medinscatchtext  = $medinscatchtext; //should be json
        $hospital->division         = $details['division']; // added division and medical subject list and field
        $hospital->medsublist       = $jsoncertificate; // should be json | dropdown and input field
        //recently added
        $hospital->hosp_subheading  = $details['hosp_subheading']; //it should be json script when added
        $hospital->hosp_text_subheading  = $details['text_subheading_hospital']; //it should be json script when added
        $hospital->save();

        $medical_subj = 'medical_subj sample'; // input name medical_subj
        $subheading = 'subheading sample'; // medical subheading | input name med_subj_subheading 
        $text_of_subheading = 'subheading text sample'; //medical text subheading | input name med_subj_text_subheading_hospital

        $medsub = new MedicalSubj;
        $medsub->hospital_id            = $hospital_id;
        $medsub->medical_subj           = $medical_subj;
        $medsub->subheading             = $subheading;
        $medsub->text_of_subheading     = $text_of_subheading;
        $medsub->save();

        $accessdet = new Accessdet;
        $accessdet->access_detail_id        = $accessdet_id;
        $accessdet->by_what                 = $details['access_trans'];
        $accessdet->from_where              = $details['access_from'];
        $accessdet->minutes                 = $details['access_mins'];
        $accessdet->save();

        $access = new Access;
        $access->hospital_id      = $hospital_id;
        $access->access_detail_id = $accessdet_id;
        $access->save();

        $department = new Department;
        $department->hospital_id            = $hospital_id;
        $department->dpt_id                 = $dpt_id;
        $department->dpt_name               = $details['dpt_name'];
        $department->save();

        $dpt_exam = new DepartmentExam;
        $dpt_exam->hospital_dpt_id          = $dpt_id;
        // $dpt_exam->examination_id           = $examination_id;
        $dpt_exam->from                     = $details['from'];
        $dpt_exam->to                       = $details['to'];
        $dpt_exam->start                    = $details['start'];
        $dpt_exam->weekdays                 = $details['weekdays'];
        $dpt_exam->save();

        $dpt_esp_hrs = new DepartmentEspHours;
        $dpt_esp_hrs->dpt_id                    = $dpt_id;
        $dpt_esp_hrs->from                      = $details['from'];
        $dpt_esp_hrs->to                        = $details['to'];
        $dpt_esp_hrs->start                     = $details['start'];
        $dpt_esp_hrs->weekdays                  = $details['weekdays'];
        $dpt_esp_hrs->treatment_name            = $details['treatment_name'];   
        $dpt_esp_hrs->save();

        $feature = new Feature;
        $feature->hospital_id       = $hospital_id;
        $feature->feature_id        = $feature_id;
        $feature->save();

        $featuredet = new FeatureDet;
        $featuredet->title          = $title;
        $featuredet->text           = $text;
        $featuredet->image          = $image;
        $featuredet->save();

        $explain = new DPTExplain;
        $explain->dpt_id          = $dpt_id;
        $explain->explain_id      = $explain_id;
        $featuredet->save();

        $explaindet = new ExplainDet;
        $explaindet->explain_id             = $explain_id ;
        $explaindet->title                  = $details['title'];
        $explaindet->text                   = $details['text'];
        $explaindet->image                  = $image;
        $explaindet->save();

        //  should separately addeed per department

        $destinationPath = '';
        $filename        = '';
        $file            = $request->file('equipment_image');

        $destinationPath = public_path().'/equipments';
        $filename_equip        = str_random(6) . '_' . $fileone->getClientOriginalName();
        $uploadSuccess   = $fileone->move($destinationPath, $filename);

        $equipments = new Equipments;
        $equipments->hospital_id            = $hospital_id ;
        $equipments->title                  = $details['equipment_subheading']; // should be json
        $equipments->text                   = $details['equipment_text_subheading_hospital']; //should be json
        $equipments->equip_image            = $filename_equip; //should be json
        $equipments->save();

        $staff = new Staff;
        $staff->hospital_id            = $hospital_id;
        $staff->title                  = $details['title'];
        $staff->text                   = $details['text'];
        $staff->save();

        return redirect::back()->with('message','Successfully Encoded');
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


        $medicalsubj = DB::table('medical_subject')
                                    ->where('id','=', $details['medsubjID'])
                                    ->update([
                                                'medical_subj'          => $details['medical_subj'],
                                                'subheading'            => $details['subheading'],
                                                'text_of_subheading'    => $details['text_of_subheading'],
                                            ]);
        
        $access_det = DB::table('access_details')
                                    ->where('access_detail_id','=', $details['accessdetID'])
                                    ->update([
                                                'by_what'           => $details['by_what'],
                                                'from_where'        => $details['from_where'],
                                                'minutes'           => $details['minutes'],
                                            ]);

                            //access table no edit for now...
        
        $department = DB::table('department')
                                    ->where('access_detail_id','=', $details['accessdetID'])
                                    ->update([
                                                'dpt_name'           => $details['dpt_name'],
                                            ]);
        

        $dpt_esp_hours = DB::table('dpt_esp_hours')
                                    ->where('id','=', $details['dpt_esp_hrs'])
                                    ->update([
                                                'from'              => $details['from'],
                                                'to'                => $details['to'],
                                                'start'             => $details['start'],
                                                'weekdays'          => $details['weekdays'],
                                                'treatment_name'    => $details['treatment_name'],
                                            ]);
                                            
        $feature = DB::table('feature')
                                    ->where('id','=', $details['dpt_esp_hrs'])
                                    ->update([
                                                'title'                 => $details['title'],
                                                'text'                  => $details['text'],
                                                'image'                 => $details['image'],
                                            ]);

        // return redirect('/guides_list');

        return view('admin.edit_hospital');
    }

    public function save_doctor(){

        $details = Input::all();

        $certificate = $details['certificate']; 
        $response = array();
        foreach($certificate as $key => $cert)
        {
            $response[$key]['med_sbj_list'] = $cert;
        }
        $jsoncertificate = json_encode($response);

        $conference = $details['conference']; 
        $res = array();
        foreach($conference as $key => $con)
        {
            $res[$key]['med_sbj_list'] = $con;
        }
        $jsonconference = json_encode($res);

        $department = $details['department']; 
        $res2 = array();
        foreach($department as $key => $dep)
        {
            $res2[$key]['med_sbj_list'] = $dep;
        }
        $jsondepartment = json_encode($res2);

        // career Academic Background
        $years = $details['c_ac_year']; 
        $months = $details['c_ac_month']; 
        $descs = $details['c_ac_desc']; 
        $toyears = $details['c_ac_year_to']; 
        $tomonths = $details['c_ac_month_to']; 
        $todescs = $details['c_ac_desc_to']; 
        $response = array();
        foreach($years as $key => $year)
        {
        $response[$key]['from_year'] = $year;
        $response[$key]['from_month'] = $months[$key];
        $response[$key]['from_desc'] = $descs[$key];
        $response[$key]['to_year'] = $toyears[$key];
        $response[$key]['to_month'] = $tomonths[$key];
        $response[$key]['to_desc'] = $todescs[$key];
        }
        $academic_careers = json_encode($response); 

        // career work experience
        $weyears = $details['c_we_year']; 
        $wemonths = $details['c_we_month']; 
        $wedescs = $details['c_we_desc']; 
        $wetoyears = $details['c_we_year_to']; 
        $wetomonths = $details['c_we_month_to']; 
        $wetodescs = $details['c_we_desc_to']; 
        $weresponse = array();
        foreach($weyears as $key => $weyear)
        {
        $weresponse[$key]['we_from_year'] = $weyear;
        $weresponse[$key]['we_from_month'] = $wemonths[$key];
        $weresponse[$key]['we_from_desc'] = $wedescs[$key];
        $weresponse[$key]['we_to_year'] = $wetoyears[$key];
        $weresponse[$key]['we_to_month'] = $wetomonths[$key];
        $weresponse[$key]['we_to_desc'] = $wetodescs[$key];
        }
        $work_exp = json_encode($weresponse); 
        //exit;

        // career awards
        $awyears = $details['c_aw_year']; 
        $awmonths = $details['c_aw_month']; 
        $awdescs = $details['c_aw_desc']; 
        $awtoyears = $details['c_aw_year_to']; 
        $awtomonths = $details['c_aw_month_to']; 
        $awtodescs = $details['c_aw_desc_to']; 
        $awresponse = array();
        foreach($awyears as $key => $awyear)
        {
        $awresponse[$key]['from_year'] = $awyear;
        $awresponse[$key]['from_month'] = $awmonths[$key];
        $awresponse[$key]['from_desc'] = $awdescs[$key];
        $awresponse[$key]['to_year'] = $awtoyears[$key];
        $awresponse[$key]['to_month'] = $awtomonths[$key];
        $awresponse[$key]['to_desc'] = $awtodescs[$key];
        }
        $awards = json_encode($awresponse);

        $doctor = new Doctor;
        $doctor->url_generation             = $details['url_generation'] ;
        $doctor->status                     = $details['status'];
        $doctor->certificate                = $jsoncertificate;//json
        $doctor->name                       = $details['name'];
        $doctor->alphabet_name              = $details['alpha_name'] ;
        $doctor->image                      = $details['profile_image']; //image
        $doctor->image_caption              = $details['img_caption'];
        $doctor->image_alt                  = $details['img_alt'];
        $doctor->industry                   = $details['industry'] ;
        $doctor->conference                 = $jsonconference;
        $doctor->birthday                   = $details['b_month'].'-'.$details['b_day'].'-'.$details['b_year']; //month day year
        $doctor->place_of_birth             = $details['place_birth'];
        $doctor->career_academic_back       = $academic_careers; //json
        $doctor->career_work_exp            = $work_exp; //json
        $doctor->career_awards              = $awards; //json
        $doctor->sort_career                = $details['n_order'];
        $doctor->hospital_office            = $details['hospital_office'];
        $doctor->department                 = $jsondepartment;
        $doctor->doctor_comment             = $details['doc_comment'];
        $doctor->save();

        return redirect::back()->with('message','Successfully Encoded');
    }
}
