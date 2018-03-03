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
        if(Session::has('total_price'))
            $total_price = Session::get('total_price');
        else
            $total_price = 0;

        if(isset($cart[$product_id])){
            //add from other views
            if(array_key_exists($product_id,$cart))
                $currentQty = $cart[$product_id]['quantity'] + 1;
            //add from Cart view
            if(isset($req->qty)){
                $currentQty = $req->qty;
            }
            
            //total price += price * (currentQty - cartQty)
            $total_price = $total_price + $cart[$product_id]['product']->price * ($currentQty-$cart[$product_id]['quantity']);
            $cart[$product_id]['quantity'] = $currentQty;
        }
        else{
            // create new Product
            $currentQty = 1;
            if(isset($req->qty)){
                $currentQty = $req->qty;
            }
            $product = Product::where('id',$product_id)->first();
            $product_info = ['product'=> $product,'quantity' => $currentQty];
            $cart[$product_id] = $product_info;
            $total_price = $total_price + $cart[$product_id]['product']->price * $currentQty;
        }

        Session::put('cart',$cart);
        Session::put('total',count($cart));
        Session::put('total_price',$total_price);
        echo count($currentQty);
    }
    
    function updateCart(Request $req){
        $qty = $req->qty;
        $product_id = $req->id;
        $cart = Session::get('cart');
        if(Session::has('total_price')){
            $total_price = Session::get('total_price');
            //total price += price * (currentQty - cartQty)
            $total_price += $cart[$product_id]['product']->price * ($currentQty-$cart[$product_id]['quantity']);
        }
        if(is_array($qty)){
            foreach($qty as $key=>$value){
                $value = intval($value);
                $cart[$key]['quantity'] = $value;
            }
        }
        else{
            $cart[$product_id]['quantity'] = $qty;
        }
        Session::put('cart',$cart);
        Session::put('total',count($cart));
        Session::put('total_price',$total_price);
    }

    function deleteCartItem(Request $req){
        $product_id = $req->id;
        $cart = Session::get('cart');
        $total_price = Session::get('total_price');
        $total_price -= $cart[$product_id]['product']->price * $cart[$product_id]['quantity'];
        unset($cart[$product_id]);
        Session::put('cart',$cart);
        Session::put('total',count($cart));
        Session::put('total_price',$total_price);
        echo count($cart);
    }

    function getCart(Request $req){
        // Session::flush();
        
        // Session::save(); //save after flush to make sure session's completely deleted

        return view('pages.cart');
    }
}
