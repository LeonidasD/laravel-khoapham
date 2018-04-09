<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Product;
use App\Bill;
use App\BillDetail;
use App\Customer;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    //
    function getCheckoutForm(){
        // dd(Session::get('cart'));
        if(Session::has('cart')){
            return view('client.pages.checkout');
        }
    }

    function finishCheckout(Request $req){
        $cart = Session::get('cart');
        $customer = new Customer;
        $bill = new Bill;
        //array() for <= php 5.4
        $email_detail = array();
        $detail_id = BillDetail::orderBy('id','desc')->first();
        
        $detail_id = ($detail_id == null) ? 1 : $detail_id->id;
        foreach($cart as $id => $info){
            $bill_detail = new BillDetail;
            $bill_detail->id = $detail_id;
            $bill_detail->id_product = $id;
            $product = Product::where('id',$id)->first();
            $product->quantity -= $info['quantity'];
            $bill_detail->quantity = $info['quantity'];
            $email_detail[] = $bill_detail;
            $bill_detail->save();
        }
        
        $customer->name = $req->name;
        $customer->address = $req->address;
        $customer->phone = $req->phone;
        $customer->email = $req->email; 
        Mail::send('client.mail', compact('customer'), function($message) use ($customer) {
            $message->to($customer->email, $customer->name)->subject
               ("Hoá đơn của anh/chị ". $customer->name);
            $message->from('duc.huu128@gmail.com','Shop Công nghệ Oren');
        });
        $customer->save();

        $bill->id_detail = $detail_id;
        $bill->id_customer = $customer->id;
        $bill->note = $req->note;
        $bill->status = 0;
        $bill->save();
        return view('client.pages.finish');
    }
}
