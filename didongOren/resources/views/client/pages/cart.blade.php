@extends('client.layout')
@section('title','Giỏ hàng')
@section('class','home07')
@section('content')
    @if(Session::has('cart'))
        <div id="content">
            <div class="container">
                <div class="row">
                    <div id="box-left" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="block block-lastest-pro">
                            <div class="block-title">
                                <strong><span>Latest Products</span></strong>
                            </div>
                            <div class="block  vt-slider lastest-slider  row">
                            <div class="slider-inner">
                                <div class="container-slider">
                                    <div class="products-grid">
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image" src="{{URL::asset('images/product/larg/demo7.jpg')}}" alt="Product demo" /> 
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                        <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="#">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                <span class="price">$800.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1(s)</a></span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end item wrap -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="block block-compare">
                            <div class="block-title">
                                <strong><span>COMPARE PRODUCTS (2)</span></strong>
                            </div>
                            <div class="content">
                            <ul>
                            <li><a href="#">Ipad Air and iOS7</a></li>
                            <li><a href="#">Ipad Air and iOS7</a></li>
                            </ul>
                            </div>
                            <div class="actions">
                                <a class="btn-clear" href="#">
                                Clear all
                                </a>
                                <a class="go-compare" href="#">
                                COMPARE
                                </a>
                            </div>
                            
                        </div>
                        <div class="block box-banner">	
                            <div id="box-banner" class="carousel slide" data-ride="carousel" data-interval="1500"><ol class="carousel-indicators">
                                <li class="active" data-target="#box-banner" data-slide-to="0"></li>
                                <li data-target="#box-banner" data-slide-to="1"></li>
                                <li data-target="#box-banner" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active"><a href="#"><img src="images/banner13.png" alt="banner" /></a>
                                        <div class="std">
                                        <span class="t1">up to 45%</span>
                                        <span class="t2">Nokia Lumia 920</span>
                                        <span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
                                        </div>
                                        <a class="gt-shop" href="#">Shop Now</a>
                                    </div>
                                    <div class="item"><a href="#"><img src="images/banner14.png" alt="banner" /></a>
                                        <div class="std">
                                        <span class="t1">up to 50%</span>
                                        <span class="t2">Nokia Lumia 920</span>
                                        <span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
                                        </div>
                                        <a class="gt-shop" href="#">Shop Now</a>
                                    
                                    </div>
                                    <div class="item"><a href="#"><img src="images/banner15.png" alt="banner" /></a>
                                        <div class="std">
                                        <span class="t1">up to 80%</span>
                                        <span class="t2">Nokia Lumia 920</span>
                                        <span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
                                        </div>
                                        <a class="gt-shop" href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="main" class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-main">
                            <div class="product-name">
                                <h1>Giỏ hàng</h1>
                            <div>
                            <form action="{{route('updateCart')}}" method="GET">
                                <button type="submit" class="btn btn-default btn-primary">Cập nhật</button>
                                <a href="{{route('getCheckout')}}" class="btn btn-default btn-primary btn-success">Thanh toán</a>
                                <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Mã sản phẩm</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Hình ảnh</th>
                                                <th>Giá</th>
                                                <th>Khuyến mãi</th>
                                                <th>Chi tiết khuyến mãi</th>
                                                <th>Số lượng</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>                 
                                            @foreach(Session::get('cart') as $id => $info)
                                                <tr id="product-{{$id}}">
                                                    <td>{{$id}}</td>
                                                        <td>{{$info['product']->name}}</td>
                                                        <td><img class="first_image" src="{{URL::asset('images/product/small/'.$info['product']->image)}}" alt="{{$info['product']->name}}" width="120" height="120"/> </td>
                                                        <td><?= number_format($info['product']->price)?>VNĐ</td>

                                                        @if($info['product']->is_promotion == 1)
                                                            <td>Có</td>
                                                            <td>{{$info['product']->promotion_description}}</td>
                                                        @else
                                                            <td>Không</td>
                                                            <td></td>
                                                        @endif
                                                    <td><input name="qty[{{$id}}]" type="number" value="{{$info['quantity']}}" min="1"/></td>
                                                    <td><a title="Xoá sản phẩm" class="btn-delete-cart btn btn-danger" id="btn-delete-cart" data-toggle="modal" data-id="{{$info['product']->id}}" data-name="{{$info['product']->name}}"><span>Xoá</span></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                </table>
                            </form>                    
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div id="content">
            <div class="container">
                <div class="row">
                    <div id="box-left" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="block block-lastest-pro">
                            <div class="block-title">
                                <strong><span>Latest Products</span></strong>
                            </div>
                            <div class="block  vt-slider lastest-slider  row">
                            <div class="slider-inner">
                                <div class="container-slider">
                                    <div class="products-grid">
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image" src="{{URL::asset('images/product/larg/demo7.jpg')}}" alt="Product demo" /> 
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                        <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="#">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                <span class="price">$800.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1(s)</a></span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end item wrap -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="block block-compare">
                            <div class="block-title">
                                <strong><span>COMPARE PRODUCTS (2)</span></strong>
                            </div>
                            <div class="content">
                            <ul>
                            <li><a href="#">Ipad Air and iOS7</a></li>
                            <li><a href="#">Ipad Air and iOS7</a></li>
                            </ul>
                            </div>
                            <div class="actions">
                                <a class="btn-clear" href="#">
                                Clear all
                                </a>
                                <a class="go-compare" href="#">
                                COMPARE
                                </a>
                            </div>
                            
                        </div>
                        <div class="block box-banner">	
                            <div id="box-banner" class="carousel slide" data-ride="carousel" data-interval="1500"><ol class="carousel-indicators">
                                <li class="active" data-target="#box-banner" data-slide-to="0"></li>
                                <li data-target="#box-banner" data-slide-to="1"></li>
                                <li data-target="#box-banner" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active"><a href="#"><img src="images/banner13.png" alt="banner" /></a>
                                        <div class="std">
                                        <span class="t1">up to 45%</span>
                                        <span class="t2">Nokia Lumia 920</span>
                                        <span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
                                        </div>
                                        <a class="gt-shop" href="#">Shop Now</a>
                                    </div>
                                    <div class="item"><a href="#"><img src="images/banner14.png" alt="banner" /></a>
                                        <div class="std">
                                        <span class="t1">up to 50%</span>
                                        <span class="t2">Nokia Lumia 920</span>
                                        <span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
                                        </div>
                                        <a class="gt-shop" href="#">Shop Now</a>
                                    
                                    </div>
                                    <div class="item"><a href="#"><img src="images/banner15.png" alt="banner" /></a>
                                        <div class="std">
                                        <span class="t1">up to 80%</span>
                                        <span class="t2">Nokia Lumia 920</span>
                                        <span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
                                        </div>
                                        <a class="gt-shop" href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="main" class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-main">
                        <div class="wrap">
                            <div class="row text-center">
                                <h1>Không có sản phẩm nào trong giỏ hàng</h1>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    @endif
@endsection
@section('cart')

<script>

</script>
@endsection