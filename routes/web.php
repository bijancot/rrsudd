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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth', 'checkRole:2,3']], function () {
    Route::get('/pasien', 'PasienController@index');
    Route::get('/resume-medis/insert', 'ResumeMedisController@FormInsert');
    Route::get('/resume-medis/edit/{id}', 'ResumeMedisController@FormEdit');
    Route::get('/risetjson', 'ResumeMedisController@RisetJsonForm');
    
    Route::post('/resume-medis/insert', 'ResumeMedisController@Insert');
    Route::post('/resume-medis/edit/{id}', 'ResumeMedisController@Update');
    Route::post('/resume-medis/delete', 'ResumeMedisController@Delete');
    Route::post('/risetjson', 'ResumeMedisController@InsertJsonForm');
});

Route::group(['middleware' => ['auth', 'checkRole:1,2,3']], function () {
    Route::get('/pasien', 'PasienController@index');
    Route::get('/logging', 'LoggingController@index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
