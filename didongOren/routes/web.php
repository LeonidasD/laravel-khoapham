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

    Route::get('search-result',[
    'uses' => 'ListController@getSearchResult',
    'as' => 'search'
    ]);

    Route::get('{id}',[
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
Route::post('checkout',[
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
    
        //Product List
        Route::group(['prefix'=> 'product'],function(){
            Route::get('product-list',[
                'uses' => 'AdminController@GetProductList',
                'as' => 'productList'
            ]);
        
            Route::get('add-item',[
                'uses' => 'AdminController@GetAddProduct',
                'as' => 'getAddItem'
            ]);

            Route::post('postAddItem',[
                'uses' => 'AdminController@PostAddProduct',
                'as' => 'postAddItem'
            ]);

            Route::get('edit-item/{id}',[
                'uses' => 'AdminController@GetEditProduct',
                'as' => 'getEditItem'
            ]);

            Route::post('postEditItem',[
                'uses' => 'AdminController@PostEditProduct',
                'as' => 'postEditItem'
            ]);
            
            Route::get('deleteItem',[
                'uses' => 'AdminController@GetDeteleProduct',
                'as' => 'deleteItem'
            ]);
        });
    });

    //Bill List
    Route::group(['prefix' => 'bill'], function(){
        Route::get('bill-list',[
            'uses' => 'AdminController@GetBillList',
            'as' => 'billList'
        ]);

        Route::get('cancel-bill',[
            'uses' => 'AdminController@CancelBill',
            'as' => 'cancelBill'
        ]);

        Route::get('confirm-bill',[
            'uses' => 'AdminController@ConfirmBill',
            'as' => 'confirmBill'
        ]);
    });


});