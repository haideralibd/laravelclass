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
use Illuminate\http\Request;
/*Route::get('/', function () {
 
    return view('welcome');
});*/
Route::get('/mycart', 'CartController@mycart');
Route::post('/add-to-cart','CartController@addToCart');


Route::get('/','HomeController@index');
Route::resource('/product','ProductController');


Route::view('/about', 'about');

Route::view('/contact_us', 'contact');


Route::any('/cartItemDelete/{temp_order_row_id}', 'CartController@cartItemDelete');

Route::any('/cartItemDeleteAll', 'CartController@cartItemDeleteAll');

Route::post('/update-cart','CartController@updateCart');

Route::post('/submit-contact', function (Request $request){
//	dd($request);
	$data = array('name'=>$request->username,'email' => $request->email, 'message' => $request->message);

	return view('/show_details',['data'=>$data]);
});
