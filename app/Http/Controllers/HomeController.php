<?php

namespace MedicalTerrace\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use App\Illness_Category;
use Illuminate\Support\Facades\DB;

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
        $hospital->image_caption    = $details['img_caption'];
        $hospital->image_alt        = $details['img_alt'];
        $hospital->phone_no         = $details['phone_no'].$details['phone_no_one'].$details['phone_no_two'];
        $hospital->fax              = $details['fax'].$details['fax_one'].$details['fax_two'];
        $hospital->email            = $details['email'];
        $hospital->medinscatchtext  = $medinscatchtext; //should be json
        $hospital->division         = $details['division']; // added division and medical subject list and field
        $hospital->medsublist       = $medsublist; // should be json | dropdown and input field
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

        /* $equipments = new Equipments;
        $equipments->hospital_id            = $hospital_id ;
        $equipments->title                  = $details['title'];
        $equipments->text                   = $details['text'];
        $equipments->save(); */

        $staff = new Staff;
        $staff->hospital_id            = $hospital_id;
        $staff->title                  = $details['title'];
        $staff->text                   = $details['text'];
        $staff->save();
    }

    public function edit_hospital(){
        return view('admin.edit_hospital');
    }
}
