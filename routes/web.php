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

Route::get('/register','MainController@register');
Route::get('/requestFund','MainController@requestFund');
Route::post('/donor/store', 'MainController@registerAsDonor')->name('registerAsDonor');
Route::post('/request/store', 'ReceiverController@store');

Route::get('/registrationMail/{id}','MailController@registration');
Route::get('/requestAid/{id}','MailController@requestAid');
