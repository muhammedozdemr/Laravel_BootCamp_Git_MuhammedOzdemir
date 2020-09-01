<?php

use Illuminate\Support\Facades\Route;

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
//View daki çalıştı
/*Route::get('/merhaba', function(){
	return view('merhaba')
});
*/

Route::get('/admin','AdminController@index');


//Controllerdaki Çalıştı
Route::get('/merhaba', 'HomeController@merhaba');
Route::get('/kayit', 'HomeController@createView');
Route::post('/kaydet','HomeController@create');
Route::get('/kisiler','HomeController@indexView');
Route::get('/sil/{id}','HomeController@delete')->where(array('id'=>'[0-9]+'));//silme işlemi regex ifade
Route::post('/guncelle/{id}','HomeController@update');//güncelleme işlemi
Route::get('/guncelle/{id}','HomeController@updateView')->where(array('id'=>'[0-9]+'));
//Route::match(['get','post']);



Route::get('/users','UserController@users');
