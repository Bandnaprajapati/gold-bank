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

Route::get('export', 'DemoController@export')->name('export');
Route::get('importExportView', 'DemoController@importExportView');
Route::post('import', 'DemoController@import')->name('import');




Route::get('/', function () {
    return view('auth/login');
});


Route::get('about', function () {
    return view('about');

});
Route::group(['middleware' => ['auth']], function () {

  Route::get('admin','DashbordController@index');
  Route::get('daly_report_list','DashbordController@create');

Route::get('provider_create','ProviderController@create');
Route::post('provider_store','ProviderController@store');
Route::get('provider_list','ProviderController@index');
Route::get('Provider-delete/{id}','ProviderController@destroy');
Route::get('provider-edit/{id}','ProviderController@edit');
Route::post('provider_update','ProviderController@update');
Route::get('customer_create','CustomerController@create');
Route::post('customer_store','CustomerController@store');
Route::get('customer_list','CustomerController@index');
Route::get('customer-delete/{id}','CustomerController@destroy');
Route::get('customer_edit/{id}','CustomerController@edit');
Route::post('customer_update','CustomerController@update');
Route::get('telecaller_list','TelecallerController@index');

Route::get('telecaller_create','TelecallerController@create');
Route::post('telecaller_store','TelecallerController@store');
Route::get('telecaller_data-delete/{id}','TelecallerController@destroy');

Route::get('telecaller_edit/{id}','TelecallerController@edit');
Route::post('telecaller_data_update','TelecallerController@update');

Route::get('callhistory_create','CallhistoryController@create');
Route::post('history_store','CallhistoryController@store');
Route::get('callhistory_list','CallhistoryController@index');
Route::get('edite_call_history/{id}','CallhistoryController@edit');
Route::post('history_update','CallhistoryController@update');
Route::get('history-delete/{id}','CallhistoryController@destroy');
Route::get('assing_data','AssingController@create');
Route::post('assingdata_store','AssingController@store');
Route::get('assing_data_list','AssingController@index');
Route::get('assing_data_edit/{id}','AssingController@edit');
Route::get('assing_data-delete/{id}','AssingController@destroy');
Route::post('assingdata_update','AssingController@update');
Route::get('rate_create','RateController@create');
Route::post('rate_store','RateController@store');
Route::get('rate_list','RateController@index');
Route::get('add_purchase_data','PurchaseController@index');
Route::get('purchase_list','PurchaseController@index');
Route::get('purchase_create','PurchaseController@create');
Route::post('purchase_store','PurchaseController@store');
Route::get('purchase_data_edit/{id}','purchaseController@edit');
Route::get('purchase_data-delete/{id}','purchaseController@destroy');
Route::post('purchase_update','purchaseController@update');
Route::get('add_sale_data','Sale_datatController@create');
Route::post('sale_store','Sale_datatController@store');
Route::get('sale_list','Sale_datatController@index');
Route::get('sale_data_edit/{id}','Sale_datatController@edit');
Route::get('sale_data-delete/{id}','Sale_datatController@destroy');
Route::post('sale_data_update','Sale_datatController@update');
Route::get('mortgage_create','MortgageController@create');
Route::post('mortgage_store','MortgageController@store');
Route::get('mortgage_list','MortgageController@index');
Route::get('mortgage_edit/{id}','MortgageController@edit');
Route::post('mortgage_update','MortgageController@update');
Route::get('mortgage_data-delete/{id}','MortgageController@destroy');
Route::get('permission', 'PermissionController@index');
Route::post('/permission','PermissionController@store');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');



