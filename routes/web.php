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

Route::get('/add-borrower', 'PageController@addborrower');
Route::get('/add-collector', 'PageController@addcollector');
Route::get('/add-loan', 'PageController@addloan');
Route::get('/add-payments', 'PageController@addpayment');
Route::get('/add-user', 'PageController@adduser');
Route::get('/company-details', 'PageController@companydetails');
Route::get('/list-borrowers', 'PageController@listborrower');
Route::get('/list-collectors', 'PageController@listcollector');
Route::get('/list-loan', 'PageController@listloan');
Route::get('/list-payments', 'PageController@listpayment');
Route::get('/list-users', 'PageController@listuser');
Route::get('/edit-profile', 'PageController@editprofile');

//database route
Route::post('/add-collector-insert', 'PageController@addcollectorinsert');
Route::post('/add-company-insert', 'PageController@addcompanyinsert');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
