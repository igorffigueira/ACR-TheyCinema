<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Illuminate\Http\Request;

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/movieinfo/{idmovie}', ['as' => 'infomovie', 'uses' => 'MoviesController@formateid']);
Route::group(['middleware' => 'App\Http\Middleware\adminMiddleware'], function(){
    Route::get('/admin', 'AdminController@index');
});
Route::get('/payment', 'PaymentController@index');
Route::get('/parceiros', 'parceirosController@index');
Route::get('/team', 'teamController@index');
Route::get('/localizacao', 'localizacaoController@index');

Route::get('/movieinfo/buyticket/{idmovie}', ['as' => 'buyticket', 'uses' => 'buyticketController@buy']);
Route::post('/buyticket', 'buyticketController@served');

Route::post('/sendconfirmation', 'sendEmailController@sendEmail');

Route::get('verfyEmailFirst','Auth\RegisterController@verfyEmailFirst')->name('verfyEmailFirst');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

Route::post('/savemovie', 'AdminController@savemovies');
Route::post('/delete', 'AdminController@deletemovies');
Route::post('/conectMS', 'AdminController@conectMS');
Route::post('/ClearSala', 'AdminController@clearsala');

//api parte json parte
Route::get('/g/{key}', 'jsonController@getInfoCinema');


