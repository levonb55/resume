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

//Public routes
Route::get('/', 'PageController@home')->name('home');
Route::get('jobs', 'PageController@jobs')->name('jobs');
Route::get('contact', 'PageController@contact')->name('contact');

//Authentication routes
Auth::routes();
Route::get('register', 'Auth\LoginController@showLoginForm')->name('register');
Route::get('logout', 'Auth\LoginController@logout');

//Private routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('choose-template', 'CredentialController@getTemplates')->name('templates')->middleware('resume-review');
    Route::post('choose-template', 'CredentialController@chooseTemplate')->name('choose-template');
    
    Route::group(['middleware' => ['template.chosen']], function () {
        Route::get('resume', 'CredentialController@createResume')->name('create-resume');
        Route::get('header', 'CredentialController@header')->name('header');
        Route::post('header', 'CredentialController@storeHeader')->name('header.store')->middleware('resume-review');

        //Owner routes
        Route::group(['middleware' => ['owner']], function () {
            Route::get('experience/{experience}/edit', 'ExperienceController@edit')->name('experience.edit');
            Route::put('experience/{experience}', 'ExperienceController@update')->name('experience.update');
            Route::delete('experience/{experience}', 'ExperienceController@destroy')->name('experience.destroy');
            Route::get('education/{education}/edit', 'EducationController@edit')->name('education.edit');
            Route::put('education/{education}', 'EducationController@update')->name('education.update');
            Route::delete('education/{education}', 'EducationController@destroy')->name('education.destroy');
        });

        Route::get('experience', 'ExperienceController@index')->name('experience.index');
        Route::post('experience', 'ExperienceController@store')->name('experience.store');
        Route::get('experience/create', 'ExperienceController@create')->name('experience.create');
        Route::post('experience/reorder', 'ExperienceController@reorderExperience')->name('experience.reorder');
        Route::get('education', 'EducationController@index')->name('education.index');
        Route::post('education', 'EducationController@store')->name('education.store');
        Route::get('education/create', 'EducationController@create')->name('education.create');
        Route::post('education/reorder', 'EducationController@reorderEducation')->name('education.reorder');
        Route::get('skills', 'CredentialController@getSkills')->name('skills');
        Route::post('skills', 'CredentialController@storeSkills')->name('skills.store')->middleware('resume-review');
        Route::get('summary', 'CredentialController@getSummary')->name('summary');
        Route::post('summary', 'CredentialController@storeSummary')->name('summary.store')->middleware('resume-review');
        Route::get('add-section', 'ExtraCredentialController@getAddSection')->name('add-section')->middleware('resume-review');
        Route::post('add-section', 'ExtraCredentialController@postAddSection')->name('add-section.post');
        Route::get('accomplishments', 'ExtraCredentialController@getAccomplishments')->name('accomplishments');
        Route::post('accomplishments', 'ExtraCredentialController@storeAccomplishments')->name('accomplishments')->middleware('resume-review');
        Route::get('profiles', 'ExtraCredentialController@getProfiles')->name('profiles');
        Route::post('profiles', 'ExtraCredentialController@storeProfiles')->name('profiles')->middleware('resume-review');
        Route::get('additional-information', 'ExtraCredentialController@getAdditionalInfo')->name('additional-information');
        Route::post('additional-information', 'ExtraCredentialController@storeAdditionalInfo')->name('additional-information')->middleware('resume-review');
        Route::get('certifications', 'ExtraCredentialController@getCertifications')->name('certifications');
        Route::post('certifications', 'ExtraCredentialController@storeCertifications')->name('certifications')->middleware('resume-review');
        Route::get('custom-section/{custom}', 'ExtraCredentialController@showCustomSection')->name('custom-section.show');
        Route::post('custom-section', 'ExtraCredentialController@storeCustomSection')->name('custom-section.store')->middleware('resume-review');
        Route::post('custom-section/add', 'ExtraCredentialController@addCustomSection')->name('custom-section.add');
        Route::delete('custom-section/{custom}', 'ExtraCredentialController@destroyCustomSection')->name('custom-section.destroy')->middleware('owner');
        Route::get('resume/review', 'CredentialController@getResumeReview')->name('resume-review');
        Route::put('resume/{resume}/review', 'CredentialController@updateResumeReview')->name('resume-review.update');
        Route::get('download-resume-pdf', 'ResumeController@downloadResumePdf')->name('download-resume-pdf');
        Route::get('download-resume-word', 'ResumeController@downloadResumeWord')->name('download-resume-word');
        Route::get('download-resume-txt', 'ResumeController@downloadResumeTxt')->name('download-resume-txt');
        Route::get('checkout', 'CheckoutController@getCheckout')->name('checkout');
        Route::post('checkout', 'CheckoutController@postCheckout')->name('checkout');

        //Cover Letter Routes
        Route::get('cover-letter', 'CoverLetterController@index')->name('cover-letter');
        Route::get('cover-letter/choose-template', 'CoverLetterController@getTemplates')->name('cover-letter.choose-template');
        Route::post('cover-letter/choose-template', 'CoverLetterController@chooseTemplate')->name('cover-letter.choose-template');
        Route::get('cover-letter/job', 'CoverLetterController@getJob')->name('cover-letter.job');
        Route::post('cover-letter/job', 'CoverLetterController@postJob')->name('cover-letter.job');
        Route::get('cover-letter/employer', 'CoverLetterController@getEmployer')->name('cover-letter.employer');
        Route::post('cover-letter/employer', 'CoverLetterController@postEmployer')->name('cover-letter.employer');
        Route::get('cover-letter/strengths', 'CoverLetterController@getStrengths')->name('cover-letter.strengths');
        Route::post('cover-letter/strengths', 'CoverLetterController@postStrengths')->name('cover-letter.strengths');
        Route::get('cover-letter/experience', 'CoverLetterController@getExperience')->name('cover-letter.experience');
        Route::post('cover-letter/experience', 'CoverLetterController@postExperience')->name('cover-letter.experience');
        Route::get('cover-letter/working-style', 'CoverLetterController@getWorkingStyle')->name('cover-letter.style');
        Route::post('cover-letter/working-style', 'CoverLetterController@postWorkingStyle')->name('cover-letter.style');
    });
});


Route::get('/test', function() {
   return \Session::all();
});


//Route::get('/home', 'HomeController@index')->name('home');
