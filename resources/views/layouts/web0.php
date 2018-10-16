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




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/main', 'HomeController@main')->name('main');
Route::get('/welcome', 'HomeController@logout')->name('welcome');
Route::get('/soft', 'HomeController@soft')->name('soft');
Route::post('/st_login/checklogin', 'HomeController@checklogin');
Route::get('/st_login/successlogin', 'HomeController@successlogin');
Route::get('/st_login/logout', 'HomeController@logout');
Route::get('/st_register', 'HomeController@st_register');
Route::post('st_register_action', 'HomeController@register');
Route::get('/st_login', 'HomeController@st_login');
Route::get('/admin_login', 'AdminController@admin_login');
Route::get('/admin_login_action', 'AdminController@admin_login_action');
Route::get('/dashboard', 'AdminController@dashboard');
Route::post('/admin_login/checklogin', 'AdminController@checklogin');
Route::get('/admin_login/successlogin', 'AdminController@successlogin');
Route::get('/admin_login/logout', 'AdminController@logout');
Route::get('/logout', 'AdminController@logout');
Route::get('/add_admin', 'AdminController@add_admin');
Route::get('/add_user', 'AdminController@add_user');
Route::get('/all_user', 'AdminController@all_user');
Route::get('/cse', 'AdminController@cse');
Route::get('/ece', 'AdminController@ece');
Route::get('/ete', 'AdminController@ete');
Route::get('/eee', 'AdminController@eee');
Route::get('/software', 'AdminController@software');
Route::get('/hardware', 'AdminController@hardware');
Route::get('/network', 'AdminController@network');

//Route::post('/st_login_check', 'HomeController@login');
/*Route::post('/logout', function(){
  Auth::logout();
  return Redirect::to('/');
})->middleware("auth");
*/
