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

// Home Controller //
Route::get('/',[
    'uses' => 'HomeController@getHome',
    'as' => 'home'
]);

// List Controller //
Route::group(['prefix'=>'list'],function(){

    Route::get('search/{page?}',[
    'uses' => 'ListController@getSearchResult',
    'as' => 'search'
]);

    Route::get('{id}/{page?}',[
        'uses' => 'ListController@getProducts',
        'as' => 'list'
    ]);
    
});

// Detail Controller //
Route::get('detail/{id}',[
   'uses' => 'DetailController@getDetail',
   'as' => 'detail'
]);

// Cart Controller //
Route::get('cart',[
    'uses' => 'CartController@getCart',
    'as' => 'cart'
]);
Route::get('addToCart',[
   'uses'  => 'CartController@addToCart',
   'as' => 'addToCart'
]);
Route::get('updateCart',[
    'uses' => 'CartController@updateCart',
    'as' => 'updateCart'
]);
Route::get('deleteCartItem',[
    'uses' => 'CartController@deleteCartItem',
    'as' => 'deleteCart'
]);

// Checkout Controller //
Route::get('checkout',[
    'uses' => 'CheckoutController@getCheckoutForm',
    'as' => 'getCheckout'
]);
Route::get('finish',[
    'uses' => 'CheckoutController@finishCheckout',
    'as' => 'checkout'
]);