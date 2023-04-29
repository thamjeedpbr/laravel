<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/migrate', function () {
    \Artisan::call('migrate');
    dd('migrated!');
});

Route::get('/seed-init', function () {
    \Artisan::call('db:seed');
    dd('seeded!');
});
Route::get('/optimize', function () {
    \Artisan::call('optimize');
    \Artisan::call('cache:clear');
    \Artisan::call('config:cache');

    dd('optimizeed!');
});
Route::get('/clear', function () {
    \Artisan::call('cache:clear');
    \Artisan::call('config:cache');
    \Artisan::call('config:clear');

    dd('cleared');
});
// Route::get('/', function () {
//     return redirect()->route('dashboard');
// });
Route::get('/', function () {
    return view('welcome');
});
//....LOGIN SECTION.............................................................
Route::prefix('/login')->namespace('App\Http\Controllers')->group(function () {
    Route::post('/register', 'HomeController@register')->name('register');
    Route::get('/', 'LoginController@login')->name('login');
    Route::post('/', 'LoginController@login_submit')->name('login.submit');
});
Route::namespace('App\Http\Controllers')->middleware('admin')->group(function () {
    Route::get('/dashboard', 'CandidateController@pending')->name('dashboard');
    Route::get('/change-password', 'LoginController@change_password_view')->name('change_password_view');
    Route::post('/change-password', 'LoginController@update_password')->name('update_password');

    Route::resource('candidate', CandidateController::class);
    Route::get('candidate-list-approved', 'CandidateController@approved')->name('candidate.list.approved');
    Route::get('candidate-list-pending', 'CandidateController@pending')->name('candidate.list.pending');
    Route::get('candidate-list-rejected', 'CandidateController@rejected')->name('candidate.list.rejected');

    Route::get('candidate-status/approve/{id}', 'CandidateController@approve_candidate')->name('candidate.status.approve');
    Route::get('candidate-status/reject/{id}', 'CandidateController@reject_candidate')->name('candidate.status.reject');

    Route::post('candidate-docs/status', 'CandidateController@CandidateDocsStatus')->name('candidate.docs.status');

    Route::post('candidate/all-data', 'CandidateController@GetAllCandidateAjax')->name('candidate.alldata');
    Route::post('candidate/pending', 'CandidateController@GetPendingCandidateAjax')->name('candidate.pending');
    Route::post('candidate/approved', 'CandidateController@GetApprovedCandidateAjax')->name('candidate.approved');
    Route::post('candidate/rejected', 'CandidateController@GetRejectedCandidateAjax')->name('candidate.rejected');
    Route::get('candidate/delete/{id}', 'CandidateController@delete')->name('candidate.delete');
    Route::get('candidate/docs-delete/{id}', 'CandidateController@DocsDelete')->name('candidate.docs.delete');

});
Route::namespace('App\Http\Controllers')->middleware('candidate')->group(function () {
    Route::get('/candidate-dashboard', 'HomeController@candidate_dashboard')->name('candidate.dashboard');
    Route::post('candidate/upload-docs', 'CandidateController@DocsUpload')->name('candidate.upload.docs');
});

Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
