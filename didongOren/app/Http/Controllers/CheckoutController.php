<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Bill;
use App\BillDetail;
use App\Customer;

class CheckoutController extends Controller
{
    //
    function getCheckoutForm(){
        // dd(Session::get('cart'));
        if(Session::has('cart')){
            return view('pages.checkout');
        }
    }

    function finishCheckout(Request $req){
        $cart = Session::get('cart');
        $detail_id = BillDetail::orderBy('id','desc')->first();
        $detail_id = ($detail_id == null) ? 1 : $detail_id->id;
        foreach($cart as $id => $info){
            $bill_detail = new BillDetail;
            $bill_detail->id = $detail_id;
            $bill_detail->id_product = $id;
            $bill_detail->quantity = $info['quantity'];
            $bill_detail->save();
        }
        $customer = new Customer;
        $customer->name = $req->name;
        $customer->address = $req->address;
        $customer->phone = $req->phone;
        $customer->email = $req->email;
        $customer->save();

        $bill = new Bill;
        $bill->id_detail = $detail_id;
        $bill->id_customer = $customer->id;
        $bill->note = $req->note;
        $bill->status = 0;
        $bill->save();


    }
}
