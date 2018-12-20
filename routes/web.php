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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::get('/about', 'HomeController@about')->name('about');





Route::get('/get-all-games/{page_number}/{type}', 'HomeController@getAllHomeGames');
Route::post('/games', 'HomeController@games');
Route::get('/games/{games_type}', ['uses' => 'HomeController@viewGames']);
Route::post('/get-all-games', 'HomeController@getAllHomeGames');
Route::get('/sports', 'HomeController@sports');
Route::post('/player/register', 'PlayerController@register');

Route::post('/player/login', 'PlayerController@login');
Auth::routes();

Route::get('/logout', 'PlayerController@logout')->middleware('auth');

Route::post('/deposit', 'PlayerController@makeDeposit');
Route::post('/withdraw', 'PlayerController@makeWithdraw');
//Route::get('/my-account', 'PlayerController@myAccount');

Route::get('/profile', 'PlayerController@profile');
Route::get('/game-history', 'PlayerController@gameHistory');
Route::get('/active-games', 'PlayerController@activeGames');
Route::get('/favourite-games', 'PlayerController@favouriteGames');
Route::get('/favourite-sports', 'PlayerController@favouriteSports');
Route::get('/kyc-docs', 'PlayerController@kycDocs');
Route::post('/upload-kyc-docs', 'PlayerController@uploadkycDocs')->name('uploadkycDocs');
Route::post('/contact-us',  'HomeController@contactUs');


Route::get('/game/{game_vendor_id}', 'PlayerController@game')->name('single-game');
Route::get('player-cards/{pid}/{ctype}', 'HomeController@getPlayerCards')->name('player-cards');
Route::post('lpspayment', 'HomeController@makePayment')->name('lpspayment');
Route::post('/profile/update', 'PlayerController@profileUpdate');

Route::get('/promotions', 'HomeController@promotions');
Route::post('/cool-off', 'PlayerController@coolingOff');

Route::post('/trustly-deposit', 'PlayerController@trustlyDepo');