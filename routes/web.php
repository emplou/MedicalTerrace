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
Route::get('/edit_hospital','HomeController@edit_hospital');

//post
Route::post('/save_hospital','HomeController@save_hospital');