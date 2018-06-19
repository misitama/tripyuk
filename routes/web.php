<?php

use Illuminate\Http\Request;
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
//Route::get('/', function (Request $request) {
//
//	$data['request'] = $request;
//
//    return view('frontoffice.welcome', $data);
//});;
//Route::post('/confirmation/{email}/{activation}',['as'=>'confirmationUser','uses'=>'UserController@confirmationUser']);
//
//Route::group(['guard'=>'web','prefix' => 'admin'], function(){
//
//	Route::group(['middleware' => 'auth'], function(){
//
//	});
//});


Route::group(['domain'=>'backoffice.tripyuk.com'],function (){
    Route::any('/',function (){
        return view('backoffice.main');
    });
});

Route::any('/',function (){
    return view('frontoffice.main');
});
