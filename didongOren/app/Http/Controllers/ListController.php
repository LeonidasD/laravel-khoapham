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
        $limit = (isset($req->limit)) ? $req->limit : 5;
        $products = ($id == 0) ? Product::with('ProductType')->orderBy('id','desc')->paginate($limit) : Product::with('ProductType')->where(['id_type'=>$id,'on_sale' => 1])->orderBy('id','desc')->paginate($limit);
        $types = ($id == 0) ? ProductType::with('Product','ProductBrand.Product')->get() : ProductType::with('Product', 'ProductBrand.Product')->where('id',$id)->get();
        return view('client.pages.list',compact('products','types','id','limit'));
    }

    function getSearchResult(Request $req){
        $search = $req->search;
        $limit = (isset($req->limit)) ? $req->limit : 5;
        $products = ($search == '') ? Product::with('ProductType')->paginate($limit) : Product::with('ProductType')->where('name','like',"%$search%")->where('on_sale',1)->paginate($limit);
        $types = ProductType::with('Product','ProductBrand.Product')->get();
        if($products->count() < 1){
            $message = "Không tìm thấy sản phẩm có từ khoá '$search'";
            return view('client.pages.list',compact('products','types','search','message','limit'));
        }
        return view('client.pages.list',compact('products','types','search','limit'));
    }
}
