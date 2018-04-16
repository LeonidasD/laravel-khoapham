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
        //Create Bustomer
        $customer = new Customer;
        $customer->name = $req->name;
        $customer->address = $req->address;
        $customer->phone = $req->phone;
        $customer->email = $req->email;
        $customer->save();

        //Create Bill
        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->order_date = date('Y-m-d H:i:s');
        $bill->note = $req->note;
        $bill->total = Session::get('total_price');
        $bill->status = 0;
        $bill->save();

        $detail_id = BillDetail::orderBy('id','desc')->first();
        
        $detail_id = ($detail_id == null) ? 1 : $detail_id->id + 1;
        foreach($cart as $id => $info){
            $bill_detail = new BillDetail;
            $bill_detail->id = $detail_id;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $id;
            $bill_detail->quantity = $info['quantity'];
            $bill_detail->save();
        }

        Mail::send('client.mail', compact('customer','bill'), function($message) use ($customer) {
            $message->to($customer->email, $customer->name)->subject
               ("Hoá đơn của anh/chị ". $customer->name);
            $message->from('duc.huu128@gmail.com','Shop Công nghệ Oren');
        });
        
        Session::forget('cart');
        Session::forget('total');
        Session::forget('total_price');
        return view('client.pages.finish');
    }
}
