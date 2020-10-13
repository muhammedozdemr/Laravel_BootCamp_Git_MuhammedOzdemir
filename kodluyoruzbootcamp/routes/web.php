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
Route::get('/kayit', 'HomeController@createView')->name('register.view');

Route::get('/','LoginController@loginView');
Route::post('/giris','LoginController@login')->name('login');

Route::get('/admin','AdminController@index');

Route::get('/mail','AdminController@mail');


//Controllerdaki Çalıştı
Route::get('/merhaba', 'HomeController@merhaba');
Route::get('/kisiler','HomeController@indexView')->name('person');
Route::post('/kaydet','HomeController@create');
Route::get('/sil/{id}','HomeController@delete')->where(array('id'=>'[0-9]+'));//silme işlemi regex ifade
Route::post('/guncelle/{id}','HomeController@update')->where(array('id'=>'[0-9]+'))->name('user.update');//güncelleme işlemi
Route::get('/guncelle/{id}','HomeController@updateView')->where(array('id'=>'[0-9]+'));
//Route::match(['get','post']);

Route::get('/user-import','ExcelUploadController@userImportView')->name('user.upload');
Route::post('/user-import-post','ExcelUploadController@userImport')->name('user.import');


Route::get('/urun-ekle','ProductController@productCreateView')->name('product.add');
Route::post('/urun-kaydet','ProductController@productCreate')->name('product.create');

Route::get('/indir','ExcelDownloadController@userDownload')->name('user.download');

Route::get('/users','UserController@users');

Auth::routes();//login ve register

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'],function(){

	//Eğer giriş yapıldıktan sonra girilmesini istiyorsanız.İlgili routelar buraya gelmeli

});
