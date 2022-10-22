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


Route::get('/', function () {
    return view('welcome');
});
*/


Auth::routes();
Route::get('/', 'FirstController@index')-> name('index');
Route::get('/about_us', 'FirstController@about')-> name('about');

Route::resource('/transcription', 'TrancribeController');

Route::resource('/uploads/check_status', 'SubmitController');


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/payment', 'PaymentController');



/* new look template */
Route::get('/hometwo','FirstController@home');

Route::get('/llogin','FirstController@login');
Route::get('/lregister','FirstController@event');
Route::get('/all-files','FirstController@uploads');





/* client orders */
Route::get('/your_orders','ClientOrderController@index')->name('client_order')->middleware('auth');
Route::get('/your_orders/{id}','ClientOrderController@details')->name('client_order_details')->middleware('auth'); 

/*cart operations managed from here */
Route::get('/Cart/{file}', 'CartsController@add')->name('cart.add')->middleware('auth');
Route::get('/addone/{file}', 'CartsController@adddirect')->name('cart.adddirect')->middleware('auth');
Route::get('/Cart', 'CartsController@index')->name('cart.index')->middleware('auth');
Route::get('/Cart/destroy/{id}', 'CartsController@destroy')->name('cart.destroy')->middleware('auth');

/*managing orders */
Route::resource('/orders','OrderController')->middleware('can:manage-user');
Route::get('/complete_orders','OrderStatusController@complete')->name('completed')->middleware('can:manage-user');
Route::get('/complete_orders/{id}','OrderStatusController@editcom')->name('editcom')->middleware('can:manage-user');
Route::get('/pending_orders','OrderStatusController@pending')->name('pending')->middleware('can:manage-user');



/*paypal implementaion  */
Route::get('/Paypal/checkout/{order}', 'PaypalController@getExpressCheckout')->name('paypal.checkout');
Route::get('/Paypal/checkout-success{order}', 'PaypalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('/Paypal/cancel', 'PaypalController@cancel')->name('paypal.cancel');








/* Admin management */

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-user')->group(function()
{
 
    Route::resource('/users','UserController');
    Route::resource('/operations','OperationController');
    Route::resource('/uploads','TranscriptionController');
    
   
    

    
    
  
});




