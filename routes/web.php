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


Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/condition', 'PagesController@condition');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact/store', 'PagesController@store')->name('contact.store');

Route::get('/sms/send', 'PagesController@sendSMS')->name('sms.send');
Route::get('/offers', 'OfferController@allOffers');
Route::get('/deploy', 'DeployController@index');
Route::get('/weather', 'ChaletController@weather');
Route::get('show-chalet/{id}','PagesController@show')->name('showChalet');
Route::get('show-offer/{id}','OfferController@show')->name('showOffer');
//Route::get('/','UserController@index');

//Route::get('/owner/personalData/edit/{id}','OwnerDataController@edit')->name('personalData');
//Route::post('/owner/personalData/update/{id}','OwnerDataController@update');
//Route::get('/sendEmail','PagesController@sendEmail');




Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('/chalet','ChaletController');
    Route::resource('/admin','AdminController')->middleware('isAdmin');
    Route::get('/adm/messages','AdminController@message')->name('admin.message');
    Route::get('/adm/replyToMessages/{id}','AdminController@replyToMessages')->name('admin.reply');
    Route::post('/message/send','AdminController@MessageSend')->name('admin.send');

    Route::resource('/user','UserController');

    Route::get('/edit-password/{id}','UserController@editPassword')->name('password.edit');
    Route::put('/update-password/{id}','UserController@updatePassword')->name('password.update');

    Route::resource('/owner','OwnerController')->middleware('isOwner');



    Route::resource('/reservation','ReservationController')->except('create');
    Route::get('/reservation/create/{id}','ReservationController@create')->name('reservation.create');
    Route::get('/reservations','ReservationController@reservationChalets');

    Route::resource('/tenant','TenantController')->middleware('isTenant');


//    Route::put('/owner/update-password/{id}','TenantController@updatePasswordTenant')->name('passwordTenant.update');

    Route::get('/tenant/res/chalets','TenantController@chalets')->name('chalets-show');

    Route::resource('/offer','OfferController')->except('create');
    Route::get('/offer/create/{id}','OfferController@create')->name('offer.create');



    Route::post('evaluateChalet', 'ChaletController@evaluateChalet')->name('chalet.evaluate');
    Route::get('dashboard/main', 'ChaletController@mainDashboard')->name('dashboard.main');




});
