<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Special extends Controller
{
    //add
    public function index(){
    	return view('special');
    }

    public function save_special(){

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
}
