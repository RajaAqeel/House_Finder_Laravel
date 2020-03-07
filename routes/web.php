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




//resource routes
Route::resource('/comments','CommentsController');
Route::resource('/users','UsersController');
Route::resource('/admins','AdminController');




//auth route
Auth::routes();




//data get routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all-registered-users', 'UsersController@allUsers');
Route::get('/delete/{id}', 'UsersController@delete');




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
