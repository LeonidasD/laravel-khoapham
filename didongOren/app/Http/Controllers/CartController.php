<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Product;
class CartController extends Controller
{
    //
    function addToCart(Request $req){
        $product_id = $req->id;
        $cart = Session::get('cart');
        $currentQty = (isset($cart[$product_id])) ? ++$cart[$product_id] : 1;
        if(isset($req->qty)){
            $currentQty = $req->qty;
        }
        $cart[$product_id] = $currentQty;
        Session::put('cart',$cart);
    }

    function deleteCartItem(Request $req){
        $product_id = $req->id;
        Session::pull('cart',$product_id);
    }

    function getCart(){
        $cart = Session::get('cart');
        if(isset($cart)){

        }
    }
}
