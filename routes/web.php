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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

//pages routes
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/testimonials', 'PagesController@testimonials');
Route::get('/blog', 'PagesController@blog');
Route::get('/contact', 'PagesController@contact');
Route::get('/add-city', 'PagesController@addCity');
Route::get('/admin-view-profile', 'PagesController@adminViewProfile');
Route::get('/admin-profile', 'PagesController@adminProfile');
Route::get('/my-properties', 'PagesController@viewAllProperties');
Route::get('/all-registered-users', 'PagesController@viewAllUsers');
Route::get('/house-owner-profile', 'PagesController@houseOwnerProfile');
Route::get('/my-properties','PagesController@myProperties');
Route::get('/my-services', 'PagesController@myServices');
Route::get('/favourite-properties','PagesController@favouriteProperties');
Route::get('/add-house-01','PagesController@addProperty');
Route::get('add-data-operator', 'PagesController@registerDataOperator');
Route::get('/data-operator-profile', 'PagesController@dataOperatorProfile');
Route::get('/view-unverified-properties', 'PagesController@viewUnverifiedProperties');
Route::get('/view-unverified-services', 'PagesController@viewUnverifiedServices');
Route::get('/add-sub-area', 'PagesController@addSubArea');
Route::get('/service-provider-profile', 'PagesController@serviceProviderProfile');
Route::get('/favourited-services', 'PagesController@viewFavouriteServices');
Route::get('/add-internetProvider-info', 'PagesController@addService');
Route::get('/all-registered-houses', 'PagesController@allRegisteredHouses');
Route::get('/all-registered-services', 'PagesController@allRegisteredServices');



//resource routes
Route::resource('/comments','CommentsController');
Route::resource('/users','UsersController');
Route::resource('/admins','AdminController');
Route::resource('/dataoperators', 'DataOperatorController');
Route::resource('/subareas', 'SubAreaController');
Route::resource('/internet', 'InternetServiceProviderController');
Route::resource('/cable', 'CableProviderServiceController');
Route::resource('/housemaid', 'HousemaidServiceController');
Route::resource('/parking', 'ParkingServiceController');
Route::resource('/schoolvan', 'AchoolvanServiceController');
Route::resource('/sweeper', 'SweeperServiceController');
Route::resource('/watchman', 'WatchmanServiceController');
Route::resource('/houses', 'HouseController');




//auth route
Auth::routes();




//data get routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all-registered-users', 'UsersController@allUsers');
Route::get('/favourite-properties', 'HouseController@favouriteProperties');
Route::get('/add-house-01','DropDownController@cities');
Route::get('/edit/{id}','HouseController@edit');
Route::get('/deleteI/{id}', 'AllServicesController@deleteI');
Route::get('/deleteC/{id}', 'AllServicesController@deleteC');
Route::get('/deleteP/{id}', 'AllServicesController@deleteP');
Route::get('/deleteHo/{id}', 'AllServicesController@deleteH');
Route::get('/deleteSc/{id}', 'AllServicesController@deleteSc');
Route::get('/deleteSw/{id}', 'AllServicesController@deleteSw');
Route::get('/deleteW/{id}', 'AllServicesController@deleteW');
Route::get('/deleteServiceI/{id}', 'AllServicesController@deleteServiceI');
Route::get('/deleteServiceC/{id}', 'AllServicesController@deleteServiceC');
Route::get('/deleteServiceP/{id}', 'AllServicesController@deleteServiceP');
Route::get('/deleteServiceHo/{id}', 'AllServicesController@deleteServiceH');
Route::get('/deleteServiceSc/{id}', 'AllServicesController@deleteServiceSc');
Route::get('/deleteServiceSw/{id}', 'AllServicesController@deleteServiceSw');
Route::get('/deleteServiceW/{id}', 'AllServicesController@deleteServiceW');
Route::get('/delete/{id}', 'UsersController@delete');
Route::get('/deleteH/{id}', 'HouseController@delete');
Route::get('/deleteHouse/{id}', 'HouseController@deleteHouse');
Route::get('/delete/{id}', 'InternetServiceProviderController@delete');
Route::get('/add-sub-area', 'SubAreaController@index');
Route::get('/my-services', 'AllServicesController@index');
Route::get('all-registered-services', 'AllServicesController@allServicesAdmin');
Route::get('all-registered-houses', 'HouseController@allHouses');
Route::get('/add-internetProvider-info', 'DropDownController@allCity');
Route::get('/my-properties', 'HouseController@index');
Route::get('/properties-single2', 'HouseController@show({id})');
Route::get('/services-single2', 'InternetServiceProviderController@show({id})');
Route::get('/changePassword', 'ChangePasswordController@ChangePasswordPageAdmin');
Route::get('/changePasswordDo', 'ChangePasswordController@ChangePasswordPageDo');
Route::get('/changePasswordHo', 'ChangePasswordController@ChangePasswordPageHo');
Route::get('/changePasswordSp', 'ChangePasswordController@ChangePasswordPageSp');
use App\sub_area;
Route::get('/ajax-sub-area', function(){
    $city_id = Request::get('city_id');
    $subArea = sub_area::where('city_id', '=', $city_id)->get();
    return Response::json($subArea);
});




//dashboards routes
Route::group(['middleware' => ['auth', 'admin']], function()
{
    Route::get('/dashboard', 'UsersController@adminData');
});
Route::group(['middleware' => ['auth', 'houseOwner']], function()
{
    Route::get('/ho_dashboard', 'UsersController@houseOwnerData');
});
Route::group(['middleware' => ['auth', 'serviceProvider']], function()
{
    Route::get('/sp_dashboard', 'UsersController@serviceProviderData');
});
Route::group(['middleware' => ['auth', 'dataOperator']], function()
{
    Route::get('/do_dashboard', 'UsersController@dataOperatorData');
});




//data post routes
Route::post('/store', [
    'uses' => 'CityController@store',
]);
Route::post('/store1', [
    'uses' => 'AdminController@store',
]);
Route::post('/store2', [
    'uses' => 'ServiceOwnerController@store',
]);
Route::post('/dataOperatorStore', [
    'uses' => 'DataOperatorController@register'
]);
Route::post('/subAreaStore', [
    'uses' => 'SubAreaController@store'
]);
Route::post('/addInternetService', [
    'uses' => 'InternetServiceProviderController@store'
]);
Route::post('/addHouse', [
    'uses' => 'HouseController@store'
]);
Route::post('/changePasswordA', [
    'uses' => 'ChangePasswordController@ChangePasswordAdmin'
]);
Route::post('/changePasswordHo', [
    'uses' => 'ChangePasswordController@ChangePasswordHo'
]);
Route::post('/changePasswordDo', [
    'uses' => 'ChangePasswordController@ChangePasswordDo'
]);
Route::post('/changePasswordSp', [
    'uses' => 'ChangePasswordController@ChangePasswordSp'
]);



//data put routes
Route::put('/editHouseInformation/{id}', 'HouseController@update');

