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

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save_doctor(Request $request){

        $details = Input::all();

        // dd($details);

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

        $destinationPath = '';
        $filename        = '';
        $file            = $request->file('profile_image');

        $destinationPath = public_path().'/doctor_photos';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);

        $author = Auth::user()->id;

        $doctor = new Doctor;
        $doctor->url_generation             = $details['url_generation'] ;
        $doctor->status                     = $details['status'];
        $doctor->certificate                = $jsoncertificate;//json
        $doctor->name                       = $details['name'];
        $doctor->alphabet_name              = $details['alpha_name'] ;
        $doctor->image                      = '/medicalterrace/public/doctor_photos/'.$filename; //image
        $doctor->image_caption              = $details['img_caption'];
        $doctor->image_alt                  = $details['img_alt'];
        $doctor->industry                   = $details['industry'] ;
        $doctor->conference                 = $jsonconference;
        $doctor->birthday                   = $details['b_month'].'-'.$details['b_day'].'-'.$details['b_year']; //month day year
        $doctor->place_of_birth             = $details['place_birth'];
        $doctor->career_academic_back       = $academic_careers; //json
        $doctor->career_work_exp            = $work_exp; //json
        $doctor->career_awards              = $awards; //json
        // $doctor->sort_career                = '1';
        $doctor->sort_career                = $details['n_order'];
        $doctor->hospital_office            = $details['hospital_office'];
        $doctor->department                 = $jsondepartment;
        $doctor->doctor_comment             = $details['doc_comment'];
        $doctor->tracking_status            = '1';
        $doctor->author                     = $author;
        $doctor->save();

        // return redirect::back()->with('message','Successfully Encoded');
        return redirect('/doctor_list');
    }

    public function modal_edit_doctor($id){
        // return view('modals.modal_edit_doctor', compact('id'));
        // $request = Request::all();
        // $data = Doctor::where('id', $request->id )->get();
        $doctor = DB::table('dv_doctors')->where('id','=',$id)->get();
        foreach($doctor as $doc){
                $authorID = $doc->author;
        }

        $value['data'] = DB::table('dv_doctors')->where('id','=',$id)->get();
        $value['dpt'] = DB::table('hospital_departments')->get();
        $value['auth'] = DB::table('users')->where('id','=',$authorID)->get();
        // // return $doctor;
        // return response()->json($data);
        // $userData['data'] = Doctor::getuserData($id);
        $fetch = json_encode($value);
        return $fetch;
        // return $value;
    }

    public function save_edit_doctor(Request $request){
        $details = Input::all();

        // dd($request->all());

        $doctors = DB::table('dv_doctors')->where('id','=',$details['docID'])->get();
        foreach($doctors as $doc){
            $image = $doc->image;
        }

        if(empty($details['profile_image'])){
            $final = $image;
            
        }else{
            $destinationPath = '';
            $filename        = '';
            $file            = $request->file('profile_image');

            $destinationPath = public_path().'/doctor_photos';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess   = $file->move($destinationPath, $filename);

            $final = '/doctor_photos/'.$filename;

        }

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

        $department = $details['department']; 
        $res2 = array();
        foreach($department as $key => $dep)
        {
            $res2[$key]['med_sbj_list'] = $dep;
        }
        $jsondepartment = json_encode($res2);

        $docID = $details['docID'];

        $doctors = DB::table('dv_doctors')
                            ->where('id','=', $docID)
                            ->update([
                                        'url_generation'            => $details['url_generation'],
                                        'status'                    => $details['status'],
                                        'certificate'               => $jsoncertificate,
                                        'name'                      => $details['name'],
                                        'alphabet_name'             => $details['alphabet_name'],
                                        'image'                     => $final,
                                        'image_caption'             => $details['img_caption'],
                                        'image_alt'                 => $details['img_alt'],
                                        'industry'                  => $details['industry'],
                                        'conference'                => $jsonconference,
                                        'birthday'                  => $details['b_month'].'-'.$details['b_day'].'-'.$details['b_year'],
                                        'place_of_birth'            => $details['place_birth'],
                                        'career_academic_back'      => $academic_careers,
                                        'career_work_exp'           => $work_exp,
                                        'career_awards'             => $awards,
                                        'sort_career'               => $details['n_order'],
                                        'hospital_office'           => $details['hospital_office'],
                                        'department'                => $jsondepartment,
                                        'doctor_comment'            => $details['doc_comment'],
                                    ]);

                                    // dd($doctors);

        return redirect::back()->with('message','Successfully Encoded');
    }

    // public function save_copy_edit(Request $request){

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

    //     $destinationPath = '';
    //     $filename        = '';
    //     $file            = $request->file('profile_image');

    //     $destinationPath = public_path().'/doctor_photos';
    //     $filename        = str_random(6) . '_' . $file->getClientOriginalName();
    //     $uploadSuccess   = $file->move($destinationPath, $filename);

    //     $doctor = new Doctor;
    //     $doctor->url_generation             = $details['url_generation'] ;
    //     $doctor->status                     = $details['status'];
    //     $doctor->certificate                = $jsoncertificate;//json
    //     $doctor->name                       = $details['name'];
    //     $doctor->alphabet_name              = $details['alpha_name'] ;
    //     $doctor->image                      = '/doctor_photos/'.$filename; //image
    //     $doctor->image_caption              = $details['img_caption'];
    //     $doctor->image_alt                  = $details['img_alt'];
    //     $doctor->industry                   = $details['industry'] ;
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
    //     $doctor->save();

    //     return redirect::back()->with('message','Successfully Encoded');
    // }

    public function save_copy_doctor(Request $request){
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

        // $destinationPath = '';
        // $filename        = '';
        // $file            = $request->file('profile_image');

        // $destinationPath = public_path().'/doctor_photos';
        // $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        // $uploadSuccess   = $file->move($destinationPath, $filename);

        $doctors = DB::table('dv_doctors')->where('id','=',$details['docID'])->get();
        foreach($doctors as $doc){
            $image = $doc->image;
        }

        if(empty($details['profile_image'])){
            $final = $image;
            
        }else{
            $destinationPath = '';
            $filename        = '';
            $file            = $request->file('profile_image');

            $destinationPath = public_path().'/doctor_photos';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess   = $file->move($destinationPath, $filename);

            $final = '/doctor_photos/'.$filename;

        }

        $author = Auth::user()->id;

        $doctor = new Doctor;
        $doctor->url_generation             = $details['url_generation'] ;
        $doctor->status                     = $details['status'];
        $doctor->certificate                = $jsoncertificate;//json
        $doctor->name                       = $details['name'];
        $doctor->alphabet_name              = $details['alphabet_name'] ;
        $doctor->image                      = $final; //image
        $doctor->image_caption              = $details['img_caption'];
        $doctor->image_alt                  = $details['img_alt'];
        $doctor->industry                   = $details['industry'];
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
        $doctor->tracking_status            = '1';
        $doctor->author                     = $author;
        $doctor->save();


        return redirect('/doctor_list');
    }

    public function doc_approve_request(Request $request){
        $details = Input::all();

        $special = DB::table('dv_doctors')
                                    ->where('id','=', $details['docIDappreq'])
                                    ->update([
                                                'tracking_status'               => '3',
                                            ]);
        $date = date('Y-m-d');
        $appReq = new ApprovalRequest;
        $appReq->type                   = '2';
        $appReq->type_id                = $details['docIDappreq'];
        $appReq->date_approval_request  = $date;
        $appReq->save();

        $archive = new Archive;
        $archive->type                  = '2';
        $archive->type_id               = $details['docIDappreq'];
        $archive->tracking_type         = '3';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/doctor_list');
    }

    public function doc_approve(Request $request){
        $details = Input::all();

        $special = DB::table('dv_doctors')
                                    ->where('id','=', $details['docIDappreq'])
                                    ->update([
                                                'tracking_status'               => '4',
                                            ]);
        $date = date('Y-m-d');
        $appReq = new Approved;
        $appReq->type                   = '2';
        $appReq->type_id                = $details['docIDappreq'];
        $appReq->date_approval          = $date;
        $appReq->save();

        $archive = new Archive;
        $archive->type                  = '2';
        $archive->type_id               = $details['docIDappreq'];
        $archive->tracking_type         = '4';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/doctor_list');
    }

    public function doc_release_reservation(Request $request){
        $details = Input::all();

        $special = DB::table('dv_doctors')
                                    ->where('id','=', $details['docIDappreq'])
                                    ->update([
                                                'tracking_status'               => '5',
                                            ]);
        $date = date('Y-m-d');
        $appReq = new ReleaseReservation;
        $appReq->type                               = '2';
        $appReq->type_id                            = $details['docIDappreq'];
        $appReq->date_release_reservation           = $date;
        $appReq->save();

        $archive = new Archive;
        $archive->type                  = '2';
        $archive->type_id               = $details['docIDappreq'];
        $archive->tracking_type         = '5';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/doctor_list');
    }

    public function doc_release(Request $request){
        $details = Input::all();

        $special = DB::table('dv_doctors')
                                    ->where('id','=', $details['docIDappreq'])
                                    ->update([
                                                'tracking_status'               => '6',
                                            ]);
        $date = date('Y-m-d');
        $appReq = new Release;
        $appReq->type                               = '2';
        $appReq->type_id                            = $details['docIDappreq'];
        $appReq->date_release                       = $date;
        $appReq->save();

        $archive = new Archive;
        $archive->type                  = '2';
        $archive->type_id               = $details['docIDappreq'];
        $archive->tracking_type         = '6';
        $archive->archived_date         = $date;
        $archive->save();

        return redirect('/doctor_list');
    }

}
