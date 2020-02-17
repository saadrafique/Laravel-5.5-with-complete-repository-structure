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


Route::get('/vue', 'vue_controller@index');

Route::get('/component_excercise', 'vue_controller@component_excercise');

Route::get('/component_communication', 'vue_controller@component_communication');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'TestFormController@index');
Route::get('/form', 'TestFormController@form');
Route::post('/store', 'TestFormController@store');
Route::get('/delete/{id}', 'TestFormController@destroy');
Route::get('/detail/{id}', 'TestFormController@show');
Route::get('/edit/{id}', 'TestFormController@edit');
Route::patch('/update/{id}', 'TestFormController@update');
//Route::resource('form','TestFormController');


Route::group(['prefix' => 'api'], function() {

Route::get('/all_records', 'Api\FormApiController@index');
Route::get('/single_record/{id}', 'Api\FormApiController@singleRecord');

});






