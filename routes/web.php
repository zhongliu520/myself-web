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

Route::group(["prefix" => "activity", "namespace"=>"Activity"], function(){ 
    Route::get('/', 'HomeController@index'); 
});


Route::get('/', function () {
    return view('welcome');
});
//
//Route::group(['prefix'=>'/redirect'], function () {
//    $guzzle = new GuzzleHttp\Client;
//
//    $response = $guzzle->post('http://your-app.com/oauth/token', [
//        'form_params' => [
//            'grant_type' => 'client_credentials',
//            'client_id' => 'client-id',
//            'client_secret' => 'client-secret',
//            'scope' => 'your-scope',
//        ],
//    ]);
//
//    echo json_decode((string) $response->getBody(), true);
//})->middleware('auth:api');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('login', 'Api\UserController@login'); 
Route::any('register', 'Api\UserController@register'); 
//dd(request()->header());
Route::group(['middleware' => 'auth:api'], function(){ 
    Route::post('details', 'Api\UserController@details'); 
});

