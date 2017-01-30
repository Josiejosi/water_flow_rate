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

Route::get('/', 'AuthController@login');
Route::post('/login', 'AuthController@postLogin');

Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@postRegister');

Route::get('/forgot', 'AuthController@forgot');
Route::post('/forgot', 'AuthController@postForgot');

Route::get('/logout', 'AuthController@logout');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/latest_dashboard', 'DashboardController@latestDash');


Route::get('/device/1/report', 'ReportsController@report_one');
Route::get('/device/2/report', 'ReportsController@report_two');
Route::get('/device/3/report', 'ReportsController@report_three');
Route::get('/device/4/report', 'ReportsController@report_four');
Route::get('/profile', 'ProfileController@index');
Route::post('/profile', 'ProfileController@postProfile');

Route::get('/user', function() {
	return App\Models\User::create([
		'name'=>'Tebogo', 'surname'=>'Sewape', 'email'=>'josiejosi@ymail.com', 'password'=>bcrypt('password'), 'type'=>1,
	]) ;
});

Route::get('/device', function() {
	App\Models\Device::create([
		'name'=>'COM1',
	]) ;
	App\Models\Device::create([
		'name'=>'COM2',
	]) ;
	App\Models\Device::create([
		'name'=>'COM3',
	]) ;
	App\Models\Device::create([
		'name'=>'COM4',
	]) ;
});
