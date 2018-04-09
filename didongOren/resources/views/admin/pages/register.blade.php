@extends('admin.login_register')
@section('title','Đăng ký trang quản trị')
@section('content')
<section class="section-account">
    <div class="card contain-sm style-transparent">
        <div class="card-body">
            <div class="row">
                <div class="">
                    <br/>
                    <span class="text-lg text-bold text-primary">ĐĂNG KÝ</span>
                    <br/><br/>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form floating-label" action="{{route('postRegister')}}" accept-charset="utf-8" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" name="username">
                            <label for="username">Tên đăng nhập</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password">
                            <label for="password">Mật khẩu</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="confirm" name="confirm">
                            <label for="confirm">Xác nhận mật khẩu</label>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email">
                            <label for="email">Email</label>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-xs-6 text-right">
                                <button class="btn btn-primary btn-raised" type="submit">Đăng ký</button>
                            </div><!--end .col -->
                        </div><!--end .row -->
                    </form>
                </div><!--end .col -->
            </div><!--end .card -->
        </section>
@endsection