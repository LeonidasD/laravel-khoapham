<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Product;

class CartController extends Controller
{
    //
    function addToCart(Request $req){
        ob_end_clean();
        $product_id = $req->id;
        $product_image = $req->img;
        $product = null;
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
            ob_start();
            echo "<span class='current-qty' data-id='$product_id'>".$currentQty."</span>";
            echo "<span class='summary'>".number_format($total_price)." VNĐ</span>";
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
            ob_start();
            echo "<span class='item'>";
            echo "<li class='item'>";
            echo "<a href='detail/$product->id' title='$product->name' class='product-image'>";
            echo "<img src='$product_image' alt='$product->name' width='60' height='60'/>";
            echo "</a>";
            echo "<a href='#' class='btn-remove'>Remove This Item</a>";
            echo "<a href='#' title='Edit item' class='btn-edit'>Edit item</a>";
            echo "<div class='product-details'>";
            echo "<p class='product-name'><a title='$product->name' href='route(detail,$product->id)'>$product->name</a></p>";
            echo "<span class='price'>". number_format($product->price). " VNĐ</span>";
            echo "<div class='qty-abc'>";
            echo "<a title='Decrement' class='qty-change-left' href='#' data-id='$product->id' data-name='$product->name'>down</a>";
            echo "<input class='input-text qty-header' type='text' value='$currentQty' data-id='$product_id' />";
            echo "<a title='Increment' class='qty-change-right' href='#' data-id='$product->id' data-name='$product->name' >up</a>";
            echo "</div>
                </div>
            </li>";
            echo "</span>";
            echo "<span class='summary'><div class='summary'>
            <p class='subtotal'>
                <span class='label'>Tổng cộng: </span> <span class='price'>". number_format($total_price). " VNĐ</span>                                                                        
            </p></div></span>";
            echo "<span class='checkout-button'>
                    <div class='actions'>
                    <div class='a-inner'>
                        <a class='btn-mycart' href='cart' title='View my cart'>Giỏ hàng </a>
                        <a class='btn-checkout' href='checkout' title='Checkout' >Thanh toán</a>
                    </div>
                </div>
            </span>";
            echo "<span class='total-qty'>".count($cart)."</span>";
        }

        Session::put('cart',$cart);
        Session::put('total',count($cart));
        Session::put('total_price',$total_price);
    }
    
    function updateCart(Request $req){
        $qty = $req->qty;
        $cart = Session::get('cart');

        if(is_array($qty)){
            foreach($qty as $key=>$value){
                $value = intval($value);
                if(Session::has('total_price')){
                    $total_price = Session::get('total_price');
                    //total price += price * (currentQty - cartQty)
                    $total_price += $cart[$key]['product']->price * ($cart[$key]['quantity']-$value);
                }
                $cart[$key]['quantity'] = $value;
            }
        }
        Session::put('cart',$cart);
        Session::put('total',count($cart));
        Session::put('total_price',$total_price);
        return redirect()->route('cart')->with('message','Cập nhật giỏ hàng thành công');
    }

    function deleteCartItem(Request $req){
        $product_id = $req->id;
        $cart = Session::get('cart');
        $total_price = Session::get('total_price');
        $total_price -= $cart[$product_id]['product']->price * $cart[$product_id]['quantity'];
        unset($cart[$product_id]);
        if(count($cart) <= 0){
            Session::forget('cart');
            Session::forget('total');
            Session::forget('total_price');
            echo 0;
            return;
        }
        Session::put('cart',$cart);
        Session::put('total',count($cart));
        Session::put('total_price',$total_price);
        echo count($cart);
        Session::save(); //save after flush to make sure session's completely deleted
    }

    function getCart(Request $req){
        // Session::flush();
        
        // Session::save(); //save after flush to make sure session's completely deleted


        return view('client.pages.cart');
    }
}
