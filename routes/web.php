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

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user_regis_search', 'User_regisController@user_regis_search');
Route::post('user_regis_update', 'User_regisController@user_regis_update');
Route::post('image-crop', 'User_regisController@imageCropPost');
Route::get('step-4/{id}', 'User_regisController@get_data');
Route::post('api/get_chart', 'User_regisController@get_chart');

Route::post('image_crop_new', 'User_regisController@image_crop_new');

Route::group(['middleware' => 'admin'], function() {
  Route::get('/admin/user_export', 'User_regisController@user_export');

  Route::get('/admin/user_exported', 'User_regisController@user_exported');
  Route::post('api/post_status', 'User_regisController@post_status');
  Route::resource('admin/dashboard', 'DashboardController');
  Route::resource('admin/user_regis', 'User_regisController');
  Route::get('admin/regised', 'User_regisController@user_regised');
  Route::get('admin/user_regis_search_admin', 'User_regisController@user_regis_search_admin');
  Route::get('admin/load_img/{id}', 'User_regisController@load_img');

  Route::get('admin/search_user', 'User_regisController@user_regis_search_admin_2');


});
