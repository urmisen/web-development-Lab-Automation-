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
Route::get('/st_login/successlogin', 'HomeController@st_dashboard');
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
Route::get('/software', 'LabController@software');
Route::get('/hardware', 'LabController@hardware');
Route::get('/network', 'LabController@network');
Route::get('/view', 'AdminController@view');
Route::get('/setting', 'AdminController@setting');
Route::post('/add_user_action', 'AdminController@add_user_action');
Route::post('/add_admin_action', 'AdminController@add_admin_action');
Route::get('/all_admin', 'AdminController@all_admin');
Route::get('/admin_delete/{id}', 'AdminController@admin_delete');
Route::get('/user_delete/{id}', 'AdminController@user_delete');
Route::get('/user_view/{id}', 'AdminController@user_view');
Route::get('/user_edit/{id}', 'AdminController@user_edit');
Route::post('/user_edit_action/{id}', 'AdminController@user_edit_action');
Route::get('/add_lab', 'LabController@add_lab');
Route::get('/all_lab', 'LabController@all_lab');
Route::post('/add_lab_action', 'LabController@add_lab_action');
Route::get('/lab_delete/{id}', 'LabController@lab_delete');
Route::get('/lab_view/{id}', 'LabController@lab_view');
Route::get('/lab_edit/{id}', 'LabController@lab_edit');
Route::post('/lab_edit_action/{id}', 'LabController@lab_edit_action');
Route::get('/st_profile', 'HomeController@st_profile');
Route::get('/st_logout', 'HomeController@st_logout');
Route::get('/st_setting', 'HomeController@st_setting');
Route::post('/st_setting_action', 'HomeController@st_setting_action');
Route::get('/ad_profile', 'AdminController@ad_profile');
Route::get('/ad_logout', 'AdminController@ad_logout');
Route::get('/ad_setting', 'AdminController@ad_setting');
Route::post('/st_setting_action', 'AdminController@ad_setting_action');
Route::get('/st_all_lab', 'HomeController@st_all_lab');

Route::get('/st_lab_view/{id}', 'LabController@st_lab_view');
Route::get('/st_lab_delete/{id}', 'LabController@st_lab_delete');
Route::get('/st_software', 'LabController@st_software');
Route::get('/st_hardware', 'LabController@st_hardware');
Route::get('/st_network', 'LabController@st_network');



Route::get('/new', 'LabController@new');
