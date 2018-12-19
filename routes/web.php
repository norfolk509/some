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

Route::get('/',  ['uses'=>'HomeController@landing', 'as'=>'landing']);

Route::get('/home', ['uses'=>'HomeController@index', 'as'=>'home']);

Route::get('/games/{game}', ['uses'=>'GameController@show', 'as'=>'game.info']);

/**********************
 ***  Static pages ***
 **********************/

Route::get('/about', ['uses'=>'StaticPagesController@about', 'as'=>'about']);

Route::get('/publishers', ['uses'=>'StaticPagesController@publishers', 'as'=>'publishers']);

Route::get('/directory', ['uses'=>'StaticPagesController@directory', 'as'=>'directory']);

/**********************
 ***  Support pages ***
 **********************/
Route::group(['prefix' => 'support'], function()
{
    Route::get('/', ['uses'=>'SupportController@index', 'as'=>'support']);
    Route::get('/title_id/{game_title}', ['uses'=>'SupportController@index']);
    Route::get('/faq/{category_no}/{qa_no}', ['uses'=>'SupportController@faq']);
    Route::get('/general-inquiries', ['uses'=>'SupportController@generalInquiriesIndex']);
    Route::get('/general-inquiries/confirm', ['uses'=>'SupportController@generalInquiriesIndex']);
    Route::post('/general-inquiries/confirm', ['uses'=>'SupportController@generalInquiriesConfirm']);
});

/**********************
 ***  User settings ***
 **********************/

Route::post('/user/set-game-notifications/{user_id}/{game_id}', 'UserSettingsController@setNotifications');
Route::post('/user/set-favorite-game/{user_id}/{game_id}', 'UserSettingsController@setFavoriteGame');

/**********************
 ***  Lgbtq Pages ***
 **********************/
Route::get('/promo/{lgbtq?}/{genre?}', ['uses'=>'LgbtController@genres', 'as'=>'genres']);