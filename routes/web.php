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

/* For all users */
Route::get('/', 'DashboardController@index');

Route::get('/profile', 'UsersController@index');


/* For all customers */
Route::get('/create-order', 'OrdersController@create');

Route::get('/confirm-quotation', 'QuotationsController@index');

Route::get('/invoice-list', 'InvoicesController@index');

Route::get('/view-invoice', 'InvoicesController@show');

Route::get('/order-history', function () {
    return view('order-history');
});

/* For all sales agents */

Route::get('/order-lists', 'OrdersController@index');

Route::get('/manage-order', 'OrdersController@show');

Route::get('/manage-order/edit', 'OrdersController@edit');



Route::get('/update-invoice', function () {
    return view('update-invoice');
});

/* Can also be accessed by the owner */
Route::get('/transactional-logs', function () {
    return view('transactional-logs');
});

/* For the owner */

Route::get('/manage-quotation', function () {
    return view('manage-quotation');
});
Route::post('/manage-quotations/compute', 'QuotationsController@store');

/* Session is absent */
Route::resource('Users', 'Users');
Route::resource('BindingType', 'BindingTypes');
Route::resource('Customer', 'Customers');
Route::resource('Invoice', 'Invoices');
Route::resource('JobType', 'JobTypes');
Route::resource('PaperType', 'PaperTypes');
Route::resource('Quotation', 'Quotations');
Route::resource('SalesAgent', 'SalesAgents');
Route::resource('Order', 'Orders');
Route::resource('OrderJobType', 'OrderJobTypes');
Route::resource('OffsetType', 'OffsetTypes');
Route::resource('SizeType', 'SizeTypes');
Route::resource('LaminationType', 'LaminationTypes');
Route::resource('DiecuttingType', 'DiecuttingTypes');

Auth::routes();
Route::get('/', 'DashboardController@index')->name('Dashboard');
?>
