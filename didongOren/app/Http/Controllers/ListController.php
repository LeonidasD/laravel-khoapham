<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;
use Session;

class ListController extends Controller
{
    //

    function getProducts(Request $req){
        $id = $req->id;
        $page = (isset($req->page)) ? $req->page : 5;
        $products = ($id == 0) ? Product::with('ProductType')->paginate($page) : Product::with('ProductType')->where('id_type',$id)->paginate($page);
        $types = ($id == 0) ? ProductType::with('Product','ProductBrand.Product')->get() : ProductType::with('Product', 'ProductBrand.Product')->where('id',$id)->get();
        return view('pages.list',compact('products','types','id','page'));
    }

    function getSearchResult(Request $req){
        $search = $req->search;
        $page = $req->page;
        $products = ($search == '') ? Product::with('ProductType')->paginate($page) : Product::with('ProductType')->where('name','like',"%$search%")->paginate($page);
        $types = ProductType::with('Product','ProductBrand.Product')->get();
        if($products->count() < 1){
            $message = "Không tìm thấy sản phẩm có từ khoá '$search'";
            return view('pages.list',compact('products','types','search','message','page'));
        }
        return view('pages.list',compact('products','types','search','page'));
    }
}
