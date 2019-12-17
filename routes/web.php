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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});

Auth::routes();

// Route::get('user', 'UserController');

Route::get('/home', 'HomeController@index');

Route::get('/dashboard', 'HomeController@home');

Route::get('/published-recruitment', 'HomeController@publishedRecruitment');

Route::get('/ongoing-recruitment', 'HomeController@ongoingRecruitment');

Route::get('/concluded-recruitment', 'HomeController@concludedRecruitment');

Route::get('/applications', 'HomeController@applications');

Route::get('/shortlisted-candidate', 'HomeController@shortlistedCandidate');

Route::get('/onboarded-candidate', 'HomeController@onboardedCandidate');

Route::get('/profile', 'HomeController@profile');

Route::get('/account-settings', 'HomeController@accountSettings');

Route::get('/notifications', 'HomeController@notification');

Route::get('/start-recruitment', 'HomeController@startRecruitment');

Route::get('/upcoming-interget', 'HomeController@upcomingInterget');

Route::get('/candidate-dashboard', 'CandidateController@home');

Route::get('/course', 'CandidateController@course');

Route::get('/job-post-detail', 'CandidateController@jobPostDetail');

Route::get('/career', 'CandidateController@career');

Route::get('/academy', 'CandidateController@academy');

Route::get('/verifications', 'CandidateController@verification');

Route::get('candidate/onboarded-candidate', 'CandidateController@onboardedCandidate');

Route::get('candidate-profile', 'CandidateController@profile');

Route::get('candidate-account-settings', 'CandidateController@accountSettings');

Route::get('candidate-notifications', 'CandidateController@notification');

Route::get('candidate/start-recruitment', 'CandidateController@startRecruitment');

Route::get('doscountry', ['uses' => 'CountryController@getAllCountries']);

Route::get('doscountry/{id}', ['uses' => 'CountryController@getOneCountry']);
