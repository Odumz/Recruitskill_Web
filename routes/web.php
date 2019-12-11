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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@home')->name('dashboard');

Route::get('/published-recruitment', 'HomeController@publishedRecruitment')->name('publishedrecruitment');

Route::get('/ongoing-recruitment', 'HomeController@ongoingRecruitment')->name('ongoingrecruitment');

Route::get('/concluded-recruitment', 'HomeController@concludedRecruitment')->name('concludedrecruitment');

Route::get('/applications', 'HomeController@applications')->name('applications');

Route::get('/shortlisted-candidate', 'HomeController@shortlistedCandidate')->name('shortlistedcandidate');

Route::get('/onboarded-candidate', 'HomeController@onboardedCandidate')->name('onboardedcandidate');

Route::get('/profile', 'HomeController@profile')->name('profile');

Route::get('/account-settings', 'HomeController@accountSettings')->name('accountsettings');

Route::get('/notifications', 'HomeController@notification')->name('notification');

Route::get('/start-recruitment', 'HomeController@startRecruitment')->name('startrecruitment');
