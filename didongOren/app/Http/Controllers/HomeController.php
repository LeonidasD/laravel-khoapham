<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;
use App\ProductBrand;

class HomeController extends Controller
{
    //
    function __construct(){
    }
    function getHome(){
        
        $products = Product::where('on_sale',1)->orderBy('id','DESC')->limit(5)->get();
        $brands = ProductBrand::with('Product')->get();
        $types = ProductType::get();
        return view('client.pages.home',compact('products','brands','types'));
    }


    
}
