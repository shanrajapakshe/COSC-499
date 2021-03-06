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
// Nomination Routes
Route::get('/nominations/index', 'NominationController@index');
Route::get('/nominations/create','NominationController@create');
Route::get('/nominations/{nomination}', 'NominationController@show');
Route::post('/nominations', 'NominationController@store');
Route::post('/nominations/{nomination}', 'NominationController@store');
Route::get('/nominations/{nomination}/edit','NominationController@edit');
Route::put('/nominations/{nomination}/update', 'NominationController@update');
Route::delete('/nominations/destroy/{nomination}','NominationController@destroy');

// Admin - awards
Route::get('/admin/award/{award}/edit','AdminController@editAward');
Route::put('/admin/award/{award}/update','AdminController@updateAward');
Route::delete('/admin/award/destroy/{award}','AdminController@destroyAward');
Route::post('/admin/award/store','AdminController@storeAward');
Route::get('/admin/award','AdminController@award');	//This includes portal and nominations page(tabs)
Route::get('/admin/awardReport','AdminController@awardReport');
Route::get('/admin/awardReport/filter','AdminController@getReportByYear');

Route::get('/admin/allAwardNominee/{award}','AdminController@allAwardNominee');

// Admin - award Categories
Route::get('/admin/categories', 'AdminController@Categories');
Route::get('/admin/categories/{category}/edit','AdminController@editCategory');
Route::put('/admin/categories/{category}/update','AdminController@updateCategory');
Route::delete('/admin/categories/destroy/{category}','AdminController@destroyCategory');
Route::post('/admin/categories/store','AdminController@storeCategory');

// Admin - profs
Route::get('/admin/prof','AdminController@prof');
Route::get('/admin/prof/{prof}/edit','AdminController@editProf');
Route::put('/admin/prof/{prof}/update','AdminController@updateProf');
Route::delete('/admin/prof/destroy/{prof}','AdminController@destroyProf');
Route::post('/admin/prof/store','AdminController@storeProf');

// Admin - Other
Route::get('/admin/search','AdminController@search');
Route::get('/admin/nominations', 'AdminController@nominations');

// Admin - Nominee Info Page
Route::get('/admin/nomineeInfo', 'AdminController@nomineeInfo');
Route::get('/admin/nomineeInfo/{nominee}/edit','AdminController@editEmail');
Route::put('/admin/nomineeInfo/{nominee}/update','AdminController@updateEmail');
Route::delete('/admin/nomineeInfo/destroy/{nominee}','AdminController@destroyNominee');

Route::post('/admin/nomineeInfo/store','AdminController@storeEmail');
Route::get('/admin/nomineeInfo/{nomineeInfo}/edit','AdminController@editEmail');

// Sending Emails
Route::post('/admin/nomineeInfo/emailTemplate', 'AdminController@emailTemplate');
Route::get('/admin/nomineeInfo/editTemplate', 'AdminController@editTemplate');
Route::put('/admin/nomineeInfo/updateTemplate', 'AdminController@updateTemplate');

Route::post('/admin/nomineeInfo/emailSent','AdminController@sendEmail');
Route::post('/admin/nomineeInfo/templateChanged','AdminController@changeTemplate');

//generate pdf

Route::get('/admin/nomineeInfo/generatePDF','AdminController@generatePDF');

// Other pages
Route::get('/about', 'PageController@getAbout');
Route::get('/profile', 'PageController@getContact' );
Route::get('/help', 'PageController@getHelp' );
Route::get('/', 'PageController@getIndex' );
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

// Route::get('/home', 'HomeController@index');
