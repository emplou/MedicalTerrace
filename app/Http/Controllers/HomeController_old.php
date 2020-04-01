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
<<<<<<< HEAD
<<<<<<< HEAD

    public function save_hospital(){

        $details = Input::all();

        $hospital = new Lists;
        $hospital->medical_ins              = $details['date'];
        $hospital->medical_ins_eng          = $details['time'];
        $hospital->url_gen                  = $details['guide'];
        $hospital->postal_code              = $details['hours_use'];
        $hospital->address                  = $details['driver'];
        $hospital->address_eng              = $details['type_of_car'];
        $hospital->clinic_appear_image      = $details['plate_no'];
        $hospital->image_caption            = $details['amount'];
        $hospital->image_alt                = $details['status'];
        $hospital->inq_phone_no             = $details['date'];
        $hospital->facsimile                = $details['time'];
        $hospital->email                    = $details['guide'];
        $hospital->url                      = $details['hours_use'];
        $hospital->subheading_w_text        = $details['driver'];
        $hospital->division                 = $details['type_of_car'];
        $hospital->medical_subj_list        = $details['plate_no'];
        $hospital->medical_subj_text        = $details['amount'];
        $hospital->exam_date                = $details['status'];
        $hospital->subhead_text             = $details['amount'];
        $hospital->sub_image_alt            = $details['status'];
        $hospital->staff_sub                = $details['date'];
        $hospital->staff_comment_w_img      = $details['time'];
        $hospital->hospital_presc           = $details['guide'];
        $hospital->free_med_exp             = $details['hours_use'];
        $hospital->access                   = $details['driver'];
        $hospital->parking                  = $details['type_of_car'];
        $hospital->hospitalization          = $details['plate_no'];
        $hospital->no_beds                  = $details['amount'];
        $hospital->poss_date_visit          = $details['status'];
        $hospital->hospital_service         = $details['type_of_car'];
        $hospital->support_lang             = $details['plate_no'];
        $hospital->shp_dining_room          = $details['amount'];
        $hospital->credit_card              = $details['status'];
        $hospital->save();
    }
=======
>>>>>>> e849eef... separate per page
=======
>>>>>>> e849eef808f74fa713956ba8f1bff8fa29fbe892
}
