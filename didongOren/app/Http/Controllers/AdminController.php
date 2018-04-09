<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Validator;



use App\Product;
use App\ProductBrand;
use App\ProductType;
use App\User;


class AdminController extends Controller
{
    //
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
        foreach($product_list as $product){
            $product->specification = explode(';',$product->specification);
        }
        return view('admin.pages.product_list',compact('product_list'));
    }

    function GetAddProduct(){
        $brands = ProductBrand::get();
        $types = ProductType::get();
        return view('admin.pages.add_item',compact('brands','types'));
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
}
