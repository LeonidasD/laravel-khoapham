<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use File;
use Hash;
use Validator;



use App\Bill;
use App\Functions;
use App\PageUrl;
use App\Product;
use App\ProductBrand;
use App\ProductType;
use App\User;



class AdminController extends Controller
{
    //Product List
    function GetRegister(){
        return view('admin.pages.register');
    }

    function PostRegister(Request $req){
        $rules = [
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6|max:32',
            'confirm' => 'same:password',
            'email' => 'required|unique:users,email',
            'email' => 'required|email|min:8'
        ];
        $messages = [
            'username.unique' => 'Tên tài khoản đã tồn tại',
            'email.unique' => 'Email đã được sử dụng',
            'confirm.same' => 'Mật khẩu xác nhận phải giống nhau',
            'password.min' => 'Mật khẩu phải ít nhất 6 ký tự'
        ];
        $validator = Validator::make($req->all(), $rules, $messages);
        
        if($validator->fails()){
            return redirect()->route('getRegister')
                            ->withErrors($validator)
                            ->withInput();
        }

        $user = new User();
        $user->username = $req->username;
        $user->password = Hash::make($req->password);
        $user->email = $req->email;
        $user->save();
        return redirect()->route('getLogin')->with('success','Đăng ký thành công! Mời bạn đăng nhập');
    }

    function GetLogin(){
        return view('admin.pages.login');
    }

    function PostLogin(Request $req){
        $user = ['username'=> $req->username, 'password' => $req->password];
        $remember_me = false;
        if($req->remember_me)
            $remember_me = true;
        if(Auth::attempt($user,$remember_me))
            return redirect()->route('getDashboard');
        return redirect()->route('getLogin')->with('error','Sai thông tin đăng nhập');
    }

    function Logout(){
        Auth::logout();
        return redirect()->route('getLogin');
    }

    function GetDashboard(){
        return view('admin.pages.dashboard');
    }

    function GetProductList(){
        $product_list = Product::with('ProductBrand','ProductType')->where('is_deleted',0)->orderBy('id','desc')->paginate();
        return view('admin.pages.product_list',compact('product_list'));
    }

    function GetAddProduct(){
        $brands = ProductBrand::get();
        $types = ProductType::get();
        return view('admin.pages.add_item',compact('brands','types'));
    }

    function PostAddProduct(Request $req){
        $function = new Functions;//functions convert unicode name to url
        $alias = $function->changeTitle($req->name);

        $url = new PageUrl;
        $url->url = $alias;
        $url->save();
        if($url->id){
            $product = new Product;
            $product->name = $req->name;
            $product->id_brand = intval($req->brand);
            $product->id_type = intval($req->type);
            $product->id_url = $url->id;
            $product->summary = $req->summary;
            $product->specification = $req->specification;
            $product->quantity = $req->qty;
            $product->price = $req->price;
            if($req->is_promotion){
                $is_promotion = $req->is_promotion;
                $promotion_price = $req->pmt_price;
                $promotion_description = $req->pmt_desc;
            }
            if($req->hasFile('image')){
                $image = $req->file('image');
                $Img_name = date('Y-m-d H-i-s'). '-' . $image->getClientOriginalName();
                $image->move('images/product/small',$Img_name);
                $product->image = $Img_name;
            }
            $product->save();
            return redirect()->route('productList')->with('success','Thêm sản phẩm thành công!');
        }
        return redirect()->route('productList')->with('error','Thêm sản phẩm thất bại!');
    }

    function GetEditProduct(Request $req){
        $product = Product::where('id',$req->id)->first();
        $brands = ProductBrand::get();
        $types = ProductType::get();
        return view('admin.pages.edit_item',compact('product','brands','types'));
    }

    function PostEditProduct(Request $req){
        $product_id = $req->id;
        $product = Product::where('id',$product_id)->first();
        if($product->id){
            $url = PageUrl::where('id',$product->id_url)->first();
            $product->name = $req->name;
            $product->id_brand = intval($req->brand);
            $product->id_type = intval($req->type);
            $product->id_url = $url->id;
            $product->summary = $req->summary;
            $product->specification = $req->specification;
            $product->quantity = $req->qty;
            $product->price = $req->price;
            if($req->is_promotion){
                $is_promotion = $req->is_promotion;
                $promotion_price = $req->pmt_price;
                $promotion_description = $req->pmt_desc;
            }
            if($req->hasFile('image')){
                File::delete('images/product/small/'.$product->image);
                $image = $req->file('image');
                $Img_name = date('Y-m-d H-i-s'). '-' . $image->getClientOriginalName();
                $image->move('images/product/small',$Img_name);
                $product->image = $Img_name;
            }
            $product->save();
            return redirect()->route('productList')->with('success','Sửa sản phẩm '.$product->name.' thành công!');
        }
        return redirect()->route('productList')->with('error','Lỗi thay đổi sản phẩm! Vui lòng thử lại!');
    }

    function GetDeteleProduct(Request $req){
        $product_id = $req->id;
        $setDeleted = Product::where('id',$product_id)->first();
        if($setDeleted->id){
            $setDeleted->is_deleted = 1;
            $setDeleted->save();
            echo "success";
            return;
        }
        echo "failed";
    }

    //Bill List

    function GetBillList(){
        $chua = Bill::where('status',0)->with('Customer','BillDetail','Product')->orderBy('order_date','desc')->orderBy('status','asc')->get();
        $da = Bill::where('status',1)->with('Customer','BillDetail','Product')->orderBy('order_date','desc')->orderBy('status','asc')->get();
        $huy = Bill::where('status',2)->with('Customer','BillDetail','Product')->orderBy('order_date','desc')->orderBy('status','asc')->get();
        $bills = [$chua,$da,$huy];
        return view('admin.pages.bill',compact('bills'));
    }

    function ConfirmBill(Request $req){
        $confirmBill = Bill::where('id',$req->id)->first();
        if($confirmBill->id){
            $confirmBill->status = 1;
            $confirmBill->save();
            echo "success";
            return;
        }
        echo "failed";
    }

    function CancelBill(Request $req){
        $cancelledBill = Bill::where('id',$req->id)->first();
        if($cancelledBill->id){
            $cancelledBill->status = 2;
            $cancelledBill->save();
            echo "success";
            return;
        }
        echo "failed";
    }


}
