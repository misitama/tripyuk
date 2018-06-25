<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

// Route::get('/',function (){
//     return view('backoffice.main');
// });

Route::get('/',function (){
   return view('frontoffice.main');
});

Route::get('/test-mail',function (){
    Mail::send(['html'=>'backoffice.mails.newuserregister'],['email'=>'admin@admin.com','activationKey'=>'activ key','password'=>'pass','level'=>'level'], function ($message){
        $message->from('postmaster@mail.tripyuk.com','Tripyuk');
        $message->to('my.ant2008@gmail.com')->subject('Tripyuk New User Activation Code | no-reply');
    });
});
