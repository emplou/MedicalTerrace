<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add_doctor','HomeController@add_doctor');
Route::get('/add_illness','HomeController@add_illness');
Route::get('/add_hospital','HomeController@add_hospital');
Route::get('/add_special','HomeController@add_special');

// Route::get('/add_illness', function () {

//     $items=\App\Illness_Category::all();
//     return view('index')->with ('items',$items);
 
//  });

//list
Route::get('/illness_list','HomeController@illness_list');
Route::get('/doctor_list','HomeController@doctor_list');
Route::get('/hospital_list','HomeController@hospital_list');
Route::get('/special_list','HomeController@special_list');
Route::get('/topics_list','HomeController@topics_list');
Route::get('/column_list','HomeController@column_list');
Route::get('/daily_list','HomeController@daily_list');
Route::get('/medicine_list','HomeController@medicine_list');
Route::get('/equipment_list','HomeController@equipment_list');
Route::get('/magazine_list','HomeController@magazine_list');

//edit
Route::get('/save_edit_hospital','HospitalController@save_edit_hospital');
Route::get('/modal_edit_doctor/{id}','DoctorController@modal_edit_doctor');
Route::get('/modal_edit_hospital/{id}','HospitalController@modal_edit_hospital');
Route::get('/modal_edit_special/{id}','SpecialController@modal_edit_special');
Route::get('/modal_edit_illness/{id}','IllnessController@modal_edit_illness');
Route::get('/modal_preview_illness','HomeController@modal_preview_illness');

//post
Route::post('/save_hospital','HospitalController@save_hospital');
Route::post('/save_illness','IllnessController@save_illness');
Route::post('/save_doctor','DoctorController@save_doctor');
Route::post('/save_special','SpecialController@save_special');

//edit page
Route::get('/edit_illness/{id}','IllnessController@edit_illness');
Route::get('/edit_special/{id}','HomeController@edit_special');
Route::get('/copy_illness/{id}','IllnessController@copy_illness');

//edit post
Route::post('/save_edit_doctor','DoctorController@save_edit_doctor');
Route::post('/save_copy_doctor', 'DoctorController@save_copy_doctor');
Route::post('/overwrite_special', 'SpecialController@overwrite_special');
Route::post('/overwrite_illness', 'IllnessController@overwrite_illness');

//get data
Route::get('/get_all_department','HomeController@get_all_department');

//approval request
Route::post('/doc_approve_request','HomeController@doc_approve_request');
Route::post('/approve_request_illness','IllnessController@approve_request_illness');
Route::post('/approve_request_special','SpecialController@approve_request_special');

//approve
Route::post('/approve_illness','IllnessController@approve_illness');
Route::post('/approve_special','SpecialController@approve_special');

//release reservation
Route::post('/release_reservation_illness','IllnessController@release_reservation_illness');
Route::post('/release_reservation_special','SpecialController@release_reservation_special');

//release
Route::post('/release_illness','IllnessController@release_illness');
Route::post('/release_special','SpecialController@release_special');