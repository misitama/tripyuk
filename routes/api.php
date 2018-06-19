<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');


Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('auth/user', 'AuthController@user');
    Route::post('auth/logout', 'AuthController@logout');

    Route::get('/province/all', ['as' => 'allProvince', 'uses' => 'ProvinceController@showAll']);

    Route::get('/regency/read-by-province/{provinceId}', ['as' => 'readRegencyByProvince', 'uses' => 'RegencyController@readByProvince']);

    Route::Get('/district/read-by-regency/{regencyId}', ['as' => 'readDistrictByRegency', 'uses' => 'DistrictController@readByRegency']);


    Route::post('/role', ['as' => 'paginationRole', 'uses' => 'RoleController@pagination']);
    Route::get('/role/all', ['as' => 'allRole', 'uses' => 'RoleController@showAll']);
    Route::post('/role/create', ['as' => 'postRole', 'uses' => 'RoleController@create']);
    Route::get('/role/read/{id}', ['as' => 'readRole', 'uses' => 'RoleController@read']);
    Route::post('/role/update', ['as' => 'updateRole', 'uses' => 'RoleController@update']);
    Route::post('/role/delete/{id}', ['as' => 'deleteRole', 'uses' => 'RoleController@delete']);


    Route::post('/user', ['as' => 'paginationUser', 'uses' => 'UserController@pagination']);
    Route::post('/user/create', ['as' => 'postUser', 'uses' => 'UserController@create']);
    Route::get('/user/read/{id}', ['as' => 'readUser', 'uses' => 'UserController@read']);
    Route::post('/user/update', ['as' => 'updateUser', 'uses' => 'UserController@update']);
    Route::post('/user/delete/{id}', ['as' => 'deleteUser', 'uses' => 'UserController@delete']);
    Route::post('/user/set-active/{email}/{isActive}', ['as' => 'setActiveUser', 'uses' => 'UserController@setActive']);
    Route::post('/user/set-block/{email}/{isBlock}', ['as' => 'setBlockUser', 'uses' => 'UserController@setBlock']);

    Route::post('/bed-type', 'MasterBedTypeController@pagination');
    Route::post('/bed-type/create', 'MasterBedTypeController@create');
    Route::get('/bed-type/read/{id}', 'MasterBedTypeController@read');
    Route::get('/bed-type/all', 'MasterBedTypeController@showAll');
    Route::post('/bed-type/update', 'MasterBedTypeController@update');
    Route::post('/bed-type/delete/{id}', 'MasterBedTypeController@delete');

    Route::post('/get-air-lines-list', 'ApiDarmawisataController@getAirLineList');
    Route::post('/get-nationality-list', 'ApiDarmawisataController@getNationalityList');
    Route::post('/get-air-lines-routes', 'ApiDarmawisataController@getAirLineRoutes');
    Route::post('/get-air-line-schedules', 'ApiDarmawisataController@getAirLineSchedule');
    Route::post('/get-addon-baggages-meals', 'ApiDarmawisataController@getAddOnBaggageMeals');
    Route::post('/get-addon-seats', 'ApiDarmawisataController@getAddOnSeats');
    Route::post('/get-air-line-prices', 'ApiDarmawisataController@getAirlinePrice');


//    API Hotel Beds

    Route::post('/search-hotel');
});

Route::group(['middleware' => 'jwt.refresh'], function () {
    Route::get('auth/refresh', 'AuthController@refresh');
});

/* tiket pesawata */
Route::get('get-all-airport', 'PesawatController@getAllAirPort');
Route::get('search-flight/{departId}/{arrivalId}/{paxAdult}/{paxChildren}/{paxInfant}/{goDate}/{roundTrip}/{returnDate}', [
    'as'    => 'searchFlight',
    'uses'  => 'CariPesawatController@searchFlight'
]);
Route::get('flight-detail/{id}/{departId}/{arrivalId}/{paxAdult}/{paxChildren}/{paxInfant}/{goDate}/{roundTrip}/{returnDate}/{token}', [
    'as'    => 'detailFlight',
    'uses'  => 'DetailPenerbangan@detailPenerbangan'
]);
Route::get('flight-detail-order/{id}/{flightId}/{departId}/{arrivalId}/{paxAdult}/{paxChildren}/{paxInfant}/{goDate}/{roundTrip}/{returnDate}/{token}', [
    'as'    => 'detailFlightOrder',
    'uses'  => 'FlightDetailOrder@flightDetailOrder'
]);
Route::post('add-order/{id}/{flightId}/{departId}/{arrivalId}/{paxAdult}/{paxChildren}/{paxInfant}/{goDate}/{roundTrip}/{returnDate}/{token}', [
    'as'    => 'addOrder',
    'uses'  => 'OrderPesawatController@addOrder'
]);
Route::get('order/{token}', [
    'as'    => 'orderPesawat',
    'uses'  => 'OrderPesawatController@orderPesawat'
]);
Route::get('delete-order/{orderDetailId}/{token}', [
    'as'    => 'deleteOrder',
    'uses'  => 'OrderPesawatController@deleteOrderData'
]);

Route::get('get-token', 'KapalController@loginApi');
/***/
