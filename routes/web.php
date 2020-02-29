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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/testimonials', 'PagesController@testimonials');
Route::get('/blog', 'PagesController@blog');
Route::get('/contact', 'PagesController@contact');
Route::get('/add-city', 'PagesController@addCity');
Route::get('/admin-view-profile', 'PagesController@adminViewProfile');

Route::resource('/comments','CommentsController');
Route::resource('/users','UsersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function()
{
    Route::get('/dashboard', 'UsersController@index');
});

Route::post('/store', [
    'uses' => 'CityController@store',
]);
