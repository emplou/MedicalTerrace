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
}
