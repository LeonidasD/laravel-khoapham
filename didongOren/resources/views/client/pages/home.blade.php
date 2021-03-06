@extends('client.layout')
@section('title','Trang chủ')
@section('class','home07')
@section('script')
<script type="text/javascript" src="{{URL::asset('js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('style/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/galary-image/js/jquery.blueimp-gallery.min.js')}}"></script>
<script src="{{URL::asset('js/galary-image/js/bootstrap-image-gallery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/owl-carousel/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.plugin.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.countdown.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/slideshow/jquery.themepunch.revolution.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/slideshow/jquery.themepunch.plugins.min.js')}}"></script> 
<script type="text/javascript" src="{{URL::asset('js/theme.js')}}"></script> 
@endsection
@section('content')
<div id="box-content">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="box-menu col-lg-3 col-md-3 col-sm-5 col-xs-5">
                    <div class="wrap-vertical-menu">
                        <div class="box-vertical-menu">
                            <div class="vertical-menu">
                                <div class="title">
                                    <a href="#"><span class="subtitle">Loại sản phẩm</span></a>
                                </div>
                                <ul class="show">
                                    @foreach($types as $type)
                                        <li class="icon-1 parent">
                                            <a href="{{route('list',$type->id)}}"><span>{{$type->name}}</span></a>
                                        </li>
                                    @endforeach
                                    <li class="icon-1 parent">
                                        <a href="{{route('list',0)}}"><span>Tất cả</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-banner-07">
                        <img src="images/banner/banner-home071.png" alt=""/>
                        <div class="info">
                            <h2>hp headphones</h2>
                            <h3>Starting at<span>$499</span></h3>
                            <a class="btn-shopnow" href="#"><span>shop now</span></a>
                        </div>
                    </div>
                    <div class="block block-newarrival">
                        <div class="title">
                            <span>Sản phẩm mới</span> 
                        </div>
                        <div class="content">
                            @foreach($products as $product)
                            <div class="item">
                                <div class="item-wrap">
                                    <div class="item-image">
                                        <a title="Ipad Air and iOS7" href="#" class="product-image no-touch">
                                        <img alt="Product demo" src="images/product/small/{{$product->image}}" class="first_image"> 
                                        </a>
                                    </div>
                                    <div class="pro-info">
                                        <div class="pro-inner">
                                            <div class="pro-title product-name"><a href="{{route('detail',$product->id)}}">{{$product->name}}</a></div>
                                            <div class="pro-content">
                                                <div class="wrap-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                        <span class="price"><?= number_format($product->price,0,'','.')?> VNĐ</span></span>
                                                        @if($product->is_promotion == 1)
                                                        <p class="special-price">
                                                            <span class="price">{{$product->promotion_price}}</span>
                                                        </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:100%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end item wrap -->
                            </div>
                            @endforeach
                            <div class="view-all">
                                <a href="#">Tất cả</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-center col-lg-6 col-md-6 col-sm-7 col-xs-7">
                    <div class="sliderhome7"  id="sliderhome7">
                    <div class="wrap-item">
                        <div class="item">
                            <img src="images/banner/slide-home7.png" alt=""/>
                            <a href="#" class="btn-shopnow"><span>shop now</span></a> 
                        </div>
                        <div class="item">
                            <img src="images/banner/slide-home71.png" alt=""/>
                            <a href="#" class="btn-shopnow"><span>shop now</span></a> 
                        </div>
                    </div>
                    <div class="navslider">
                        <a href="#" class="prev">Prev</a>
                        <a href="#" class="next">Next</a>
                    </div>
                    <script type="text/javascript">
                        //<![CDATA[
                            jQuery(document).ready(function($) {		
                                $('#sliderhome7 .wrap-item').owlCarousel({
                                    items: 1,
                                    itemsCustom: [ 
                                        [0, 1], 
                                        [480, 1], 
                                        [768, 1], 
                                        [992, 1],
                                        [1200,1] 
                                    ],
                                    pagination: false,
                                    slideSpeed : 800,
                                    addClassActive: true,
                                    scrollPerPage: false,
                                    touchDrag: false,
                                    afterAction: function (e) {
                                        if(this.$owlItems.length > this.options.items){
                                            $('#sliderhome7 .navslider').show();
                                        }else{
                                            $('#sliderhome7 .navslider').hide();
                                        }
                                    }
                                    //scrollPerPage: true,
                                });
                                $('#sliderhome7 .navslider .prev').on('click', function(e){
                                    e.preventDefault();
                                    $('#sliderhome7 .wrap-item').trigger('owl.prev');
                                });
                                $('#sliderhome7 .navslider .next').on('click', function(e){
                                    e.preventDefault();
                                    $('#sliderhome7 .wrap-item').trigger('owl.next');
                                });
                            });
                        //]]>
                    </script>
                    </div>
                    <div class="banner-adv-07">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a class="image" href="#">
                                    <img src="images/banner/banner-home072.png" alt="" />
                                    <div class="gk-img-overlay"></div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a class="image" href="#">
                                    <img src="images/banner/banner-home073.png" alt="" />
                                    <div class="gk-img-overlay"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="block-layout block-offers" id="block-offers">
                        <div class="title">
                            <a href="#">Điện thoại</a>
                        </div>
                        <div class="wrap-content">
                            <div class="content">
                                @foreach ($products as $product):
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="upsell"><span>up to 79% off</span></div>
                                        <div class="item-image">
                                            <a class="product-image" href="#" title="{{$product->name}}">
                                            <img width="160" class="first_image" src="images/product/{{$product->image}}" alt="Product demo"> 
                                            </a>
                                            <div class="item-btn">
                                                <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a> 
                                            </div>
                                        </div>
                                        <div class="pro-info">
                                            <div class="pro-inner">
                                                <div class="product-name"><a href="{{route('detail',$product->id)}}">Ipad Air and iOS7</a></div>
                                                <div class="pro-content">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:100%" class="rating"></div>
                                                        </div>
                                                        <span class="amount"><a href="#">1(s)</a></span>
                                                    </div>
                                                </div>
                                                <div class="wrap-cart"><a title="Add to cart" class="btn-cart" href="#">add to cart</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end item wrap -->
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="navslider">
                            <a href="#" class="prev">Prev</a>
                            <a href="#" class="next">Next</a>
                        </div>
                        <script type="text/javascript">
                            //<![CDATA[
                                jQuery(document).ready(function($) {		
                                    $('#block-offers div.content').owlCarousel({
                                        items: 2,
                                        itemsCustom: [ 
                                            [0, 1], 
                                            [480, 2], 
                                            [768, 2], 
                                            [992, 3],
                                            [1200,3] 
                                        ],
                                        pagination: false,
                                        slideSpeed : 800,
                                        addClassActive: true,
                                        scrollPerPage: false,
                                        touchDrag: false,
                                        afterAction: function (e) {
                                            if(this.$owlItems.length > this.options.items){
                                                $('#block-offers .navslider').show();
                                            }else{
                                                $('#block-offers .navslider').hide();
                                            }
                                        }
                                        //scrollPerPage: true,
                                    });
                                    $('#block-offers .navslider .prev').on('click', function(e){
                                        e.preventDefault();
                                        $('#block-offers div.content').trigger('owl.prev');
                                    });
                                    $('#block-offers .navslider .next').on('click', function(e){
                                        e.preventDefault();
                                        $('#block-offers div.content').trigger('owl.next');
                                    });
                                });
                            //]]>
                        </script>
                    </div>
                    <div class="block-layout block-tab" id="block-tab">
                        <div class="tab-item1">
                            <div class="title">
                                <a href="{{route('list',0)}}">Tất cả sản phẩm</a> 
                                <ul>
                                    @foreach($brands as $brand)
                                        @if ($brand->id == 1)
                                            <li class="active">
                                        @else
                                            <li>
                                        @endif
                                        <a data-toggle="tab" href="#tab{{$brand->id}}"><span>{{$brand->name}}</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            @foreach($brands as $brand)
                            <div id="tab{{$brand->id}}" class="tab-pane @if($brand->id == 1) active @endif">
                                <div class="wrap-content">
                                    <div class="content">
                                        @foreach($brand->Product as $product)
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a title="{{$product->name}}" href="#" class="product-image no-touch">
                                                    <img width="150" height="150" alt="{{$product->name}}" src="images/product/small/{{$product->image}}" class="first_image"> 
                                                    </a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="{{route('detail',$product->id)}}">{{$product->name}}</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                    <span class="price"><?= number_format($product->price,0,'','.')?> VNĐ</span></span>
                                                                    @if($product->is_promotion == 1)
                                                                    <p class="special-price">
                                                                        <span class="price">{{$product->promotion_price}}</span>
                                                                    </p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:100%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                        <div class="wrap-cart"><a title="Add to cart" class="btn-cart" href="#">add to cart</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end item wrap -->
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="navslider">
                                    <a href="#" class="prev">Prev</a>
                                    <a href="#" class="next">Next</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <script type="text/javascript">
                            //<![CDATA[
                                jQuery(document).ready(function($) {		
                                    $('#block-tab div.content').owlCarousel({
                                        items: 2,
                                        itemsCustom: [ 
                                            [0, 2], 
                                            [480, 2], 
                                            [768, 3], 
                                            [992, 4],
                                            [1200,4] 
                                        ],
                                        pagination: false,
                                        slideSpeed : 800,
                                        addClassActive: true,
                                        scrollPerPage: false,
                                        touchDrag: false,
                                        afterAction: function (e) {
                                            if(this.$owlItems.length > this.options.items){
                                                $('#block-tab .navslider').show();
                                            }else{
                                                $('#block-tab .navslider').hide();
                                            }
                                        }
                                        //scrollPerPage: true,
                                    });
                                    $('#block-tab .navslider .prev').on('click', function(e){
                                        e.preventDefault();
                                        $('#block-tab div.content').trigger('owl.prev');
                                    });
                                    $('#block-tab .navslider .next').on('click', function(e){
                                        e.preventDefault();
                                        $('#block-tab div.content').trigger('owl.next');
                                    });
                                });
                            //]]>
                        </script> 
                    </div>
                </div>
                <div class="box-right col-lg-3 col-md-3 col-sm-7 col-xs-7">
                    <div class="block block-deals" id="block-deals">
                        <div class="title">
                            <span>deals</span>
                            <div class="countdown">
                                <div class="defaultCountdown"></div>
                            </div>
                            <script type="text/javascript"> 
                                jQuery(document).ready(function($){
                                    var y = 2017;
                                    var m = 03;
                                    var d = 20;
                                    var h = 00;
                                    var mi =00;
                                    var s = 00;
                                    $('.defaultCountdown').countdown({    	
                                        until: new Date(y, m, d, h, mi, s),
                                        labels: ['YEA', 'MON', 'WEE', 'DAY', 'HOU', 'MIN','SEC'],
                                        labels1: ['YEA', 'MON', 'WEE', 'DAY', 'HOU', 'MIN', 'SEC'],     
                                        alwaysExpire: false,
                                        onExpiry: function(){
                                        },						
                                        serverSync: 'Aug 13, 2014 08:39:29 +0000'
                                    });
                                }); 
                            </script> 
                        </div>
                        <div class="content">
                            <div class="item">
                                <div class="item-wrap">
                                    <div class="item-image">
                                        <a title="Ipad Air and iOS7" href="#" class="product-image no-touch">
                                        <img alt="Product demo" src="images/product/18.png" class="first_image"> 
                                        </a>
                                        <div class="item-btn">
                                            <div class="box-inner">
                                                <div class="left">
                                                    <a class="link-wishlist" href="#" title="Add to wishlist">add to wishlist</a>
                                                    <a class="link-compare" href="#" title="Add to compare">add to compare</a>
                                                </div>
                                                <div class="right">
                                                    <span class="qview">
                                                    <a href="#" data-toggle="tooltip" data-placement="left" data-original-title="Quick View" class="vt_quickview_handler"><span>Quick View</span></a>
                                                    </span>
                                                    <a href="#" class="btn-cart" title="Add to cart">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-info">
                                        <div class="pro-inner">
                                            <div class="pro-title product-name"><a href="{{route('detail',$product->id)}}">Ipad Air and iOS7</a></div>
                                            <div class="pro-content">
                                                <div class="wrap-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                        <span class="price">$800.00</span></span>
                                                        <p class="special-price">
                                                            <span class="price">$1.459.00</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:100%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end item wrap -->
                            </div>
                            <div class="item">
                                <div class="item-wrap">
                                    <div class="item-image">
                                        <a title="Ipad Air and iOS7" href="#" class="product-image no-touch">
                                        <img alt="Product demo" src="images/product/1.png" class="first_image"> 
                                        </a>
                                        <div class="item-btn">
                                            <div class="box-inner">
                                                <div class="left">
                                                    <a class="link-wishlist" href="#" title="Add to wishlist">add to wishlist</a>
                                                    <a class="link-compare" href="#" title="Add to compare">add to compare</a>
                                                </div>
                                                <div class="right">
                                                    <span class="qview">
                                                    <a href="#" data-toggle="tooltip" data-placement="left" data-original-title="Quick View" class="vt_quickview_handler"><span>Quick View</span></a>
                                                    </span>
                                                    <a href="#" class="btn-cart" title="Add to cart">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-info">
                                        <div class="pro-inner">
                                            <div class="pro-title product-name"><a href="{{route('detail',$product->id)}}">Ipad Air and iOS7</a></div>
                                            <div class="pro-content">
                                                <div class="wrap-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                        <span class="price">$800.00</span></span>
                                                        <p class="special-price">
                                                            <span class="price">$1.459.00</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:100%"></div>
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
                        <div class="navslider">
                            <a href="#" class="prev">Prev</a>
                            <a href="#" class="next">Next</a>
                        </div>
                        <script type="text/javascript">
                            //<![CDATA[
                                jQuery(document).ready(function($) {		
                                    $('#block-deals div.content').owlCarousel({
                                        items: 1,
                                        itemsCustom: [ 
                                            [0, 1], 
                                            [480, 1], 
                                            [768, 1], 
                                            [992, 1],
                                            [1200,1] 
                                        ],
                                        pagination: false,
                                        slideSpeed : 800,
                                        addClassActive: true,
                                        scrollPerPage: false,
                                        touchDrag: false,
                                        afterAction: function (e) {
                                            if(this.$owlItems.length > this.options.items){
                                                $('#block-deals .navslider').show();
                                            }else{
                                                $('#block-deals .navslider').hide();
                                            }
                                        }
                                        //scrollPerPage: true,
                                    });
                                    $('#block-deals .navslider .prev').on('click', function(e){
                                        e.preventDefault();
                                        $('#block-deals div.content').trigger('owl.prev');
                                    });
                                    $('#block-deals .navslider .next').on('click', function(e){
                                        e.preventDefault();
                                        $('#block-deals div.content').trigger('owl.next');
                                    });
                                });
                            //]]>
                        </script>
                        <div class="wrap-viewall">
                            <div class="view-all">
                                <a href="#">all deal</a>
                            </div>
                        </div>
                    </div>
                    <div class="block wrap-bestseller" id="bestseller">
                        <div class="title">
                            <span>best sellers</span> 
                        </div>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <a class="accordion-toggle item1 active" data-toggle="collapse" data-parent="#accordion" href="#item1">
                                1
                                </a> 
                                <div id="item1" class="panel-collapse collapse in">
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                <img class="first_image" src="images/product/13.png" alt="Product demo"> 
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <div class="left">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">add to wishlist</a>
                                                            <a title="Add to compare" href="#" class="link-compare">add to compare</a>
                                                        </div>
                                                        <div class="right">
                                                            <span class="qview">
                                                            <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                            <a title="Add to cart" class="btn-cart" href="#">add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="{{route('detail',$product->id)}}">Ipad Air and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                <span class="price">$800.00</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div style="width:100%" class="rating"></div>
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
                            <div class="panel panel-default">
                                <a class="accordion-toggle item2" data-toggle="collapse" data-parent="#accordion" href="#item2">
                                2 
                                </a> 
                                <div id="item2" class="panel-collapse collapse">
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                <img class="first_image" src="images/product/15.png" alt="Product demo"> 
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <div class="left">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">add to wishlist</a>
                                                            <a title="Add to compare" href="#" class="link-compare">add to compare</a>
                                                        </div>
                                                        <div class="right">
                                                            <span class="qview">
                                                            <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                            <a title="Add to cart" class="btn-cart" href="#">add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="{{route('detail',$product->id)}}">Ipad Air and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                <span class="price">$800.00</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div style="width:100%" class="rating"></div>
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
                            <div class="panel panel-default">
                                <a class="accordion-toggle item3" data-toggle="collapse" data-parent="#accordion" href="#item3">
                                3 
                                </a> 
                                <div id="item3" class="panel-collapse collapse">
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                <img class="first_image" src="images/product/14.png" alt="Product demo"> 
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <div class="left">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">add to wishlist</a>
                                                            <a title="Add to compare" href="#" class="link-compare">add to compare</a>
                                                        </div>
                                                        <div class="right">
                                                            <span class="qview">
                                                            <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                            <a title="Add to cart" class="btn-cart" href="#">add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="{{route('detail',$product->id)}}">Ipad Air and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                <span class="price">$800.00</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div style="width:100%" class="rating"></div>
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
                            <div class="panel panel-default">
                                <a class="accordion-toggle item4" data-toggle="collapse" data-parent="#accordion" href="#item4">
                                4
                                </a> 
                                <div id="item4" class="panel-collapse collapse">
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                <img class="first_image" src="images/product/11.png" alt="Product demo"> 
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <div class="left">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">add to wishlist</a>
                                                            <a title="Add to compare" href="#" class="link-compare">add to compare</a>
                                                        </div>
                                                        <div class="right">
                                                            <span class="qview">
                                                            <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                            <a title="Add to cart" class="btn-cart" href="#">add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="{{route('detail',$product->id)}}">Ipad Air and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                <span class="price">$800.00</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div style="width:100%" class="rating"></div>
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
                            <div class="panel panel-default">
                                <a class="accordion-toggle item5" data-toggle="collapse" data-parent="#accordion" href="#item5">
                                5 
                                </a> 
                                <div id="item5" class="panel-collapse collapse">
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                <img class="first_image" src="images/product/18.png" alt="Product demo"> 
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <div class="left">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">add to wishlist</a>
                                                            <a title="Add to compare" href="#" class="link-compare">add to compare</a>
                                                        </div>
                                                        <div class="right">
                                                            <span class="qview">
                                                            <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                            <a title="Add to cart" class="btn-cart" href="#">add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="{{route('detail',$product->id)}}">Ipad Air and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                <span class="price">$800.00</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div style="width:100%" class="rating"></div>
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
                        <div class="wrap-viewall">
                            <div class="view-all">
                                <a href="#">All Best Sellers</a>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $('.panel-default a').click(function(e) {
                            e.preventDefault();
                            $('a').removeClass('active');
                            $(this).addClass('active');
                            });
                        </script>
                    </div>
                    <div class="block block-brand">
                        <div class="title">
                            <span>Top brands</span> 
                        </div>
                        <div class="content">
                            <div class="item frist">
                                <div class="item-wrap">
                                    <div class="item-image">
                                        <a title="Ipad Air and iOS7" href="#" class="product-image no-touch">
                                        <img alt="Product demo" src="images/brand/logo22.png" class="first_image"> 
                                        </a>
                                    </div>
                                    <div class="pro-info">
                                        <div class="pro-inner">
                                            <div class="desc">
                                                <p>Upto 50% + Extra 9% Off On Non Electronics -</p>
                                                <a class="brandphilip" href="#">Philips</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end item wrap -->
                            </div>
                            <div class="item">
                                <div class="item-wrap">
                                    <div class="item-image">
                                        <a title="Ipad Air and iOS7" href="#" class="product-image no-touch">
                                        <img alt="Product demo" src="images/brand/logo23.png" class="first_image"> 
                                        </a> 
                                    </div>
                                    <div class="pro-info">
                                        <div class="pro-inner">
                                            <div class="desc">
                                                <p>Upto 50% + Extra 9% Off On Non Electronics -</p>
                                                <a class="brandcanon" href="#">Canon</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end item wrap -->
                            </div>
                            <div class="item">
                                <div class="item-wrap">
                                    <div class="item-image">
                                        <a title="Ipad Air and iOS7" href="#" class="product-image no-touch">
                                        <img alt="Product demo" src="images/brand/logo24.png" class="first_image"> 
                                        </a> 
                                    </div>
                                    <div class="pro-info">
                                        <div class="pro-inner">
                                            <div class="desc">
                                                <p>Flat 5% To 35% Off Best Price Deals On Top Mobiles -</p>
                                                <a class="brandsamsung" href="#">samsung</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end item wrap -->
                            </div>
                            <div class="item last">
                                <div class="item-wrap">
                                    <div class="item-image">
                                        <a title="Ipad Air and iOS7" href="#" class="product-image no-touch">
                                        <img alt="Product demo" src="images/brand/logo25.png" class="first_image"> 
                                        </a> 
                                    </div>
                                    <div class="pro-info">
                                        <div class="pro-inner">
                                            <div class="desc">
                                                <p>Flat 5% To 35% Off Best Price Deals On Top Mobiles -</p>
                                                <a class="brandsony" href="#">sony</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end item wrap -->
                            </div>
                            <div class="view-all">
                                <a href="#">All Brands</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection