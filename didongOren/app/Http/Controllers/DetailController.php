<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class DetailController extends Controller
{
    //
    function getDetail($id){
        $product = Product::where('id',$id)->first();
        $relatedType = $product->id;
        $relatedProduct = Product::where('id_type',$relatedType)->get();
        return view('pages.detail',compact('product','relatedProduct'));
    }
}
