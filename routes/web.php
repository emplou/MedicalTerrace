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

//edit
Route::get('/save_edit_hospital','HomeController@save_edit_hospital');
Route::get('/modal_edit_doctor/{id}','HomeController@modal_edit_doctor');
Route::get('/modal_edit_hospital/{id}','HomeController@modal_edit_hospital');
Route::get('/modal_edit_special/{id}','HomeController@modal_edit_special');
Route::get('/modal_edit_illness/{id}','HomeController@modal_edit_illness');
Route::get('/modal_preview_illness','HomeController@modal_preview_illness');

//post
Route::post('/save_hospital','HomeController@save_hospital');
Route::post('/save_illness','HomeController@save_illness');
Route::post('/save_doctor','HomeController@save_doctor');
Route::post('/save_special','HomeController@save_special');

//edit post
Route::post('/save_edit_doctor','HomeController@save_edit_doctor');
Route::post('/save_copy_doctor', 'HomeController@save_copy_doctor');
Route::post('/overwrite_special', 'HomeController@overwrite_special');
Route::post('/overwrite_illness', 'HomeController@overwrite_illness');
Route::post('/save_overwrite_hospital', 'HomeController@save_overwrite_hospital');

//get data
Route::get('/get_all_department','HomeController@get_all_department');

//approval request
Route::post('/doc_approve_request','HomeController@doc_approve_request');
Route::post('/approve_request_illness','HomeController@approve_request_illness');
Route::post('/approve_request_special','HomeController@approve_request_special');

//approve
Route::post('/approve_illness','HomeController@approve_illness');
Route::post('/approve_special','HomeController@approve_special');

//release reservation
Route::post('/release_reservation_illness','HomeController@release_reservation_illness');
Route::post('/release_reservation_special','HomeController@release_reservation_special');

//release
Route::post('/release_illness','HomeController@release_illness');
Route::post('/release_special','HomeController@release_special');