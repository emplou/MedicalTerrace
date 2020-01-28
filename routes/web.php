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

//post
Route::post('/save_hospital','HomeController@save_hospital');
Route::post('/save_illness','HomeController@save_illness');
Route::post('/save_doctor','HomeController@save_doctor');