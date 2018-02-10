<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;


class ListController extends Controller
{
    //

    function getProducts(Request $req){
        $id = $req->id;
        $page = $req->page;
        $products = ($id == 0) ? Product::with('ProductType')->paginate($page) : Product::with('ProductType')->where('id_type',$id)->paginate($page);
        $types = ($id == 0) ? ProductType::with('Product','ProductBrand.Product')->get() : ProductType::with('Product', 'ProductBrand.Product')->where('id',$id)->get();
        return view('pages.list',compact('products','types','id','page'));
    }

    function getSearchResult(Request $req){
        $search = $req->search;
        $page = $req->page;
        $products = ($search == '') ? "Không có sản phẩm" : Product::with('ProductType')->where('name','like',"%$search%")->paginate($page);
        $types = ProductType::with('Product','ProductBrand.Product')->get();
        return view('pages.list',compact('products','types','search'));
    }
}
