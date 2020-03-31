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



//resource routes
Route::resource('/comments','CommentsController');
Route::resource('/users','UsersController');
Route::resource('/admins','AdminController');
Route::resource('/dataoperators', 'DataOperatorController');
Route::resource('/subareas', 'SubAreaController');
Route::resource('/internet', 'InternetServiceProviderController');
Route::sersource('/services', 'AllServicesController');



//auth route
Auth::routes();




//data get routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all-registered-users', 'UsersController@allUsers');
Route::get('/delete/{id}', 'UsersController@delete');
Route::get('/add-sub-area', 'SubAreaController@index');
Route::get('/add-internetProvider-info', 'DropDownController@allCity');
Route::get('/my-services', 'AllServicesController@allServices');
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