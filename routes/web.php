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

// auth system route
Route::get('/login', 'MainController@index')->name('login');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin')->middleware('auth')->name('main.successlogin');
Route::get('logout', 'MainController@logout');
//end auth system route

Route::get('/register','MainController@register')->name('regR');
Route::get('/requestFund','MainController@requestFund')->name('regD');
Route::post('/donor/store', 'MainController@registerAsDonor')->name('registerAsDonor');
Route::post('/request/store', 'ReceiverController@store')->name('fundReceive');

Route::get('/registrationMail/{id}','MailController@registration');
Route::get('/requestAid/{id}','MailController@requestAid');
Route::get('/approvedMail/{id}','MailController@approved');
Route::get('/donated/{id}','MailController@donated');


Route::post('/request/update', 'ReceiverController@update')->name('request.update');

//donated list by euta donor or admin ley herney
Route::get('/donor/list','DonorController@list')->middleware('auth');
Route::get('/donated','DonorController@donated')->middleware('auth');

//dona
