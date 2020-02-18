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

Route::get('/home', function () {
    return  redirect()->route('home');
});

Route::get('/users', function () {
    return view('users');
})->middleware('auth');

Route::get('/products', function () {
    return view('products');
})->middleware('auth');

Route::get('/orders', function () {
    return view('orders');
})->middleware('auth');

Route::get('/delivers', function () {
    return view('delivers');
})->middleware('auth');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('comandas', 'ComandaController@index')->name('comandas.index')->middleware('auth');

Route::get('comandas/{comanda}', 'ComandaController@show')->name('comandas.show')->middleware('auth');

Route::get('comandas/{comanda}/edit', 'ComandaController@edit')->name('comandas.edit')->middleware('auth');

Route::put('comandas/{comanda}', 'ComandaController@update')->name('comandas.update')->middleware('auth');

Route::resource('adminUsers', 'AdminUserController')->middleware('auth');

Route::resource('riders', 'RiderController')->middleware('auth');

Route::resource('customers', 'CustomerController')->middleware('auth');

Route::resource('businesses', 'BusinessController')->middleware('auth');


//Simulators
Route::get('simulator/business/{zip}', 'Simulator\Business\BusinessSimulatorController@businessesInZipCode')->name('simulator.business.businessesInZipCode');

Route::get('simulator/business/{business}/menu', 'Simulator\Business\BusinessSimulatorController@businessMenu')->name('simulator.business.businessMenu');

Route::get('simulator/business/{order}/status', 'Simulator\Business\BusinessSimulatorController@orderStatus')->name('simulator.business.orderStatus');

Route::get('simulator/rider', 'Simulator\Rider\RiderSimulatorController@selectRider')->name('simulator.rider.selectRider');

Route::get('simulator/rider/{rider}/jobs', 'Simulator\Rider\RiderSimulatorController@jobs')->name('simulator.rider.jobs');

Route::post('simulator/rider/{order}/{rider}', 'Simulator\Rider\RiderSimulatorController@setJob')->name('simulator.rider.setjob');

Route::get('simulator/rider/{deliver}/order', 'Simulator\Rider\RiderSimulatorController@deliverStatus')->name('simulator.rider.deliverStatus');
