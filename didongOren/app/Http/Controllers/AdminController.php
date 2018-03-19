<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class AdminController extends Controller
{
    //
    function getDashboard(){
        return view('admin.pages.dashboard');
    }

    function getProductList(){
        $product_list = Product::with('ProductBrand','ProductType')->orderBy('id','desc')->paginate();
        return view('admin.pages.product_list',compact('product_list'));
    }

    function deteleProduct(){
        $product_id = $req->id;
        $product = Product::where('id',$product_id)->delete();
    }
}
