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

Route::get('/land', function () {
    return view('welcome');
});

// Route::get('/candidate', function () {
//     return view('candidatelanding');
// });

// Route::get('/candidate', 'CandidateController@landing');

Route::get('/candidate', function () {
    session()->put('hasCompany', false);
    // dd(session('hasCompany'));
    return view('candidatelanding');
});

// Route::get('/', 'HomeController@landing');

Route::get('/', function () {
    session()->put('hasCompany', true);
    return view('landing');
});

Auth::routes();

// Route::get('user', 'UserController');

Route::group(['middleware' => ['admin']], function () {

    Route::get('/home', 'HomeController@index');

    Route::group(['middleware' => ['recruiter']], function () {
        Route::get('/dashboard', ['uses' => 'HomeController@everything'])->name('recruiter')->middleware('recruiter', 'auth', 'admin');

        // Route::get('/dashboard', ['uses' => 'HomeController@home']);

        // Route::get('/dashboard', ['uses' => 'HomeController@home', 'HomeController@indexPublishedRecruitment', 'HomeController@indexConcludedRecruitment', 'HomeController@indexOngoingRecruitment', 'HomeController@indexApplication']);


        //Recruitments
        Route::post('/add-recruitment', ['uses' => 'RecruitmentController@postRecruitment'])->name('addrecruitment')->middleware('recruiter', 'auth', 'admin');

        Route::get('/published-recruitment', ['uses' => 'RecruitmentController@getPublishedRecruitment'])->name('publishedrecruitment')->middleware('recruiter', 'auth', 'admin');

        Route::get('/edit-published-recruitment', ['uses' => 'RecruitmentController@putPublishedRecruitment'])->name('editpublishedrecruitment')->middleware('recruiter', 'auth', 'admin');

        Route::delete('/delete-published-recruitment/{id}', 'RecruitmentController@deletePublishedRecruitment')->name('deletepublishedrecruitment')->middleware('auth', 'admin');

        Route::get('/ongoing-recruitment', ['uses' => 'RecruitmentController@getOngoingRecruitment'])->name('ongoingrecruitment')->middleware('recruiter', 'auth', 'admin');

        Route::put('/edit-ongoing-recruitment', ['uses' => 'RecruitmentController@putOngoingRecruitment'])->name('editongoingrecruitment')->middleware('recruiter', 'auth', 'admin');

        Route::delete('/delete-ongoing-recruitment/{id}', 'RecruitmentController@deleteOngoingRecruitment')->name('deleteongoingrecruitment')->middleware('auth', 'admin');

        Route::get('/concluded-recruitment', ['uses' => 'RecruitmentController@getConcludedRecruitment'])->name('concludedrecruitment')->middleware('recruiter', 'auth', 'admin');

        Route::put('/edit-concluded-recruitment', ['uses' => 'RecruitmentController@putConcludedRecruitment'])->name('editconcludedrecruitment')->middleware('recruiter', 'auth', 'admin');

        Route::delete('/delete-concluded-recruitment/{id}', 'RecruitmentController@deleteConcludedRecruitment')->name('deleteconcludedrecruitment')->middleware('auth', 'admin');


        //Applications
        Route::get('/applications', 'RecruitmentController@getApplications')->name('applications')->middleware('recruiter', 'auth', 'admin');

        Route::delete('/delete-applications/{id}', 'RecruitmentController@deleteApplications')->name('deleteapplications')->middleware('recruiter', 'auth', 'admin');


        //Candidates
        Route::get('/shortlisted-candidate', 'RecruitmentController@shortlistedCandidate')->name('shortlistedcandidate')->middleware('recruiter', 'auth', 'admin');

        Route::get('/onboarded-candidate', 'RecruitmentController@onboardedCandidate')->name('onboardedcandidate')->middleware('recruiter', 'auth', 'admin');

        Route::get('/profile', 'RecruitmentController@profile')->name('profile')->middleware('recruiter', 'auth', 'admin');

        Route::get('/account-settings', 'RecruitmentController@accountSettings')->name('accountsettings')->middleware('recruiter', 'auth', 'admin');

        Route::get('/notifications', 'RecruitmentController@notification')->name('notifications')->middleware('recruiter', 'auth', 'admin');

        Route::get('/start-recruitment', 'RecruitmentController@postRecruitment')->name('startrecruitment')->middleware('recruiter', 'auth', 'admin');

        // Route::get('/start-recruitment', 'RecruitmentController@store');

        Route::get('/upcoming-interview', 'RecruitmentController@upcomingInterview')->name('upcominginterview')->middleware('recruiter', 'auth', 'admin');

        Route::get('/start-recruitment-form', 'RecruitmentController@startRecruitmentForm')->name('startrecruitmentform')->middleware('recruiter', 'auth', 'admin');

        Route::post('/ongoing-recruitment/edit/{id}', 'RecruitmentController@updateOngoing')->name('doscountry')->middleware('admin', 'auth', 'recruiter');

        Route::get('/edit', ['uses' => 'RecruitmentController@edit'])->name('edit')->middleware('admin', 'auth', 'recruiter');

        Route::get('/edit-shortlisted-candidate', ['uses' => 'RecruitmentController@editCandidate'])->name('edit-candidate')->middleware('admin', 'auth', 'recruiter');

        Route::delete('/delete/candidate/{id}', 'RecruitmentController@deleteCandidate')->name('doscountry')->middleware('admin', 'auth', 'recruiter');

        Route::put('/edit-shortlisted/{id}', 'RecruitmentController@updateShortlistedCandidate')->name('update-shortlisted-candidate')->middleware('admin', 'auth', 'recruiter');
    });

    Route::group(['middleware' => ['candidate']], function () {
        Route::get('/candidate-dashboard', 'CandidateController@home')->name('candidate')->middleware('candidate', 'auth', 'admin');

        Route::get('/course', 'CandidateController@course')->name('course')->middleware('candidate', 'auth', 'admin');

        Route::get('/courses', 'CoursesController@courses')->name('courses')->middleware('candidate', 'auth', 'admin');

        Route::get('/course-details', 'CoursesController@courseDetails')->name('course-details')->middleware('candidate', 'auth', 'admin');

        Route::get('/job-post-detail', 'CandidateController@jobPostDetail')->name('job-post')->middleware('candidate', 'auth', 'admin');

        Route::get('/career', 'CandidateController@career')->name('career')->middleware('candidate', 'auth', 'admin');

        Route::get('/academy', 'CandidateController@academy')->name('academy')->middleware('candidate', 'auth', 'admin');

        Route::get('/verifications', 'CandidateController@verification')->name('verifications')->middleware('candidate', 'auth', 'admin');

        // Route::get('candidate/onboarded-candidate', 'CandidateController@onboardedCandidate');

        Route::get('candidate-profile', 'CandidateController@profile')->name('candidate-profile')->middleware('candidate', 'auth', 'admin');

        Route::get('candidate-account-settings', 'CandidateController@accountSettings')->name('candidate-account-settings')->middleware('candidate', 'auth', 'admin');

        Route::get('candidate-notifications', 'CandidateController@notification')->name('candidate-notifications')->middleware('candidate', 'auth', 'admin');

        Route::get('/candidate-upcoming-interviews', 'CandidateController@upcomingInterview')->name('candidate-upcoming-interview')->middleware('candidate', 'auth', 'admin');
    });

    Route::get('doscountry', ['uses' => 'CountryController@getAllCountries'])->name('doscountry')->middleware('auth', 'admin');

    Route::get('doscountry/{id}', ['uses' => 'CountryController@getOneCountry'])->name('doscountries')->middleware('auth', 'admin');

    Route::post('/jobtitle', 'RecruitmentController@postJobTitle')->name('job-title')->middleware('auth', 'admin');

    Route::delete('/delete/{id}', 'RecruitmentController@deleteJobTitle')->name('job-title-delete')->middleware('auth', 'admin');

    Route::delete('/delete-concluded-recruitment/{id}', 'RecruitmentController@deleteConcludedRecruitment')->name('concluded-recruitment-delete')->middleware('auth', 'admin');
});


