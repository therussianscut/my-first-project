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

use App\Company;
use App\Customer;

Route::view('/', 'home');



Route::resource('customers', 'CustomersController')->middleware('auth');

Route::get('contact', 'ContactFormController@create');
Route::post('contact', 'ContactFormController@store');


Route::view('about', 'about')->middleware('auth');

Route::get('customers.index', 'CustomersController@index')->middleware('auth');

Route::post('customers.store', 'CustomersController@store');

Route::get('customers.create', 'CustomersController@create')->middleware('auth');

Route::get('customers/{customer}', 'CustomersController@show');

Route::get('customers/{customer}/edit', 'CustomersController@edit')->middleware('auth');

Route::patch('customers/{customer}', 'CustomersController@update');

Route::delete('customers/{customer}', 'CustomersController@destroy');


Route::get('customers.create', function(){

    $companies=Company::all();

    $customer= new Customer();


    return view ('customers.create', compact('companies', 'customer') );

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
