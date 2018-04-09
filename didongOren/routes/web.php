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

Route::prefix('admin')->group(function(){
    Route::post('/login',[
        'uses' => 'AdminController@PostLogin',
        'as' => 'postLogin'
    ]);

    Route::get('/login',[
        'uses' => 'AdminController@GetLogin',
        'as' => 'getLogin'
    ]);

    Route::get('/logout',[
        'uses' => 'AdminController@Logout',
        'as' => 'logout'
    ]);

    Route::post('/register',[
        'uses' => 'AdminController@PostRegister',
        'as' => 'postRegister'
    ]);

    Route::get('/register',[
        'uses' => 'AdminController@GetRegister',
        'as' => 'getRegister'
    ]);

    Route::group(['middleware'=> 'admin'],function(){
        Route::get('/dashboard',[
            'uses' => 'AdminController@GetDashboard',
            'as' => 'getDashboard'
        ]);
    
        Route::get('productlist',[
            'uses' => 'AdminController@GetProductList',
            'as' => 'productList'
        ]);
    
        Route::get('addItem',[
            'uses' => 'AdminController@GetAddProduct',
            'as' => 'addItem'
        ]);
    
        Route::get('deleteItem',[
            'uses' => 'AdminController@GetDeteleProduct',
            'as' => 'deleteItem'
        ]);
    });
    
});