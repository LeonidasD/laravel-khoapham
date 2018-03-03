<div id="box-header">
    <div class="header-container">
        <div class="header">
            <div class="box-header-01">
                <div class="container">
                    <div class="row">
                        <div class="row">
                            <div class="block-left col-lg-6 col-md-6 col-sm-5 col-xs-6">
                                <div class="block box-left">
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div>
                                <div class="block box-right">
                                    <div class="block block-language">
                                        <div class="lg-cur">
                                            <span>Language</span>
                                            <img src="{{URL::asset('images/flags/flag-default.jpg')}}" alt="flag">
                                        </div>
                                        <ul>
                                            <li>
                                                <a class="selected" href="#">                  
                                                <img src="{{URL::asset('images/flags/flag-default.jpg')}}" alt="flag">
                                                <span>French</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">                    
                                                <img src="{{URL::asset('images/flags/flag-default.jpg')}}" alt="flag">
                                                <span>German</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">                    
                                                <img src="{{URL::asset('images/flags/flag-default.jpg')}}" alt="flag">
                                                <span>Brazil</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="block block-currency">
                                        <div class="item-cur">
                                            <span>usd</span>           
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="#"><span class="cur_icon">$</span> EUR</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="cur_icon">$</span> JPY</a>
                                            </li>
                                            <li>
                                                <a class="selected" href="#"><span class="cur_icon">$</span> USD</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="block-right col-lg-6 col-md-6 col-sm-7 col-xs-6">
                                <div class="my-account">
                                    <span class="my-account-title">Sign in</span>
                                    <div class="content">
                                        <ul class="left">
                                            <li><a href="#" class="top-link-myaccount">My Account</a></li>
                                            <li><a href="#" class="top-link-wishlist">My Wishlist</a></li>
                                            <li><a href="#" class="top-link-checkout">Checkout</a></li>
                                            <li><a href="#" class="top-link-login">Log In</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-search">
                                    <form action="{{route('search')}}" method="GET">
                                        <button><span>search</span></button>
                                        <input name="search" type="text" value="" placeholder="Tìm kiếm trên trang"/>
                                    </form>
                                </div>
                            </div>
                            <script type="text/javascript">                
                                    jQuery(document).ready(function($){
                                    w = $( window ).width(); 
                                    if(w<768){
                                        $('.my-account .content').hide();
                                        $('.my-account').click(function(){
                                            $('.content').slideToggle();
                                        });
                                        $('.cart-mini .block-content').hide();
                                        $('.cart-mini').click(function(){
                                            $('.cart-mini .block-content').slideToggle();
                                        });

                                        $('.block-language ul').hide();
                                        $('.block-language').click(function(){
                                            $('.block-language ul').slideToggle();
                                        });
                                        $('.block-currency ul').hide();
                                        $('.block-currency').click(function(){
                                            $('.block-currency ul').slideToggle();
                                        }); 
                                    }
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-header-02">
                <div class="container">
                    <div class="row">
                        <div class="logo">
                            <a href="home-07.html"><img src="{{URL::asset('images/logo-07.png')}}" alt=""/></a>
                        </div>
                        <div id="mobile-nav">
                            <button class="btn-sidebar" type="button"><span>menu</span></button> 
                                    <script type="text/javascript">
                                    jQuery(document).ready(function($){ 
                                        $('.block-slidebar').html($('.mobile-sidebar').html());
                                        $('.mobile-sidebar').remove();            
                                        $('.btn-sidebar').click(function(){
                                            if($('body').hasClass('show-menu')){
                                                $('body').removeClass('show-menu');
                                            }else{
                                                $('body').addClass('show-menu');
                                            }
                                        });
                                        $('.close-menu').click(function(){
                                            if($('body').hasClass('show-menu')){
                                                $('body').removeClass('show-menu');
                                            }else{
                                                $('body').addClass('show-menu');
                                            }
                                        });
                                    });
                                </script>
                        </div>
                        <div class="menu">
                            <div class="box-main-menu">
                                <div class="main-menu">
                                    <ul>
                                        <li class="item1 first"><a href="{{route('home')}}">Trang chủ</a></li>
                                        <li class="item2 megamenu-parent">
                                            <a href="grid.html">Tablets</a>
                                            <img class="stick-07" src="{{URL::asset('images/stick/sale07.png')}}" alt="" />
                                            <div class="vt_megamenu_content">
                                                <div class="mega-menu-01">
                                                    <div class="menu-01 menu-01-cate">
                                                        <div class="title"><span>Categories</span></div>
                                                        <ul class="content-col">
                                                            <li class="first"><a class="mega-lap" href="#"><span>Laptop</span></a></li>
                                                            <li><a class="mega-tvi" href="#"><span>TV</span></a></li>
                                                            <li><a class="mega-mob" href="#"><span>Mobile</span></a></li>
                                                            <li><a class="mega-tab" href="#"><span>Tablet</span></a></li>
                                                            <li><a class="mega-cam" href="#"><span>Camera</span></a></li>
                                                            <li class="last"><a class="mega-rad" href="#"><span>Radio</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="menu-01 menu-01-top">
                                                        <div class="title"><span>Tops</span><span class="hot">Hot</span></div>
                                                        <ul class="content-col">
                                                            <li class="first"><a href="#"><span>Smartphones</span></a></li>
                                                            <li><a href="#"><span>Accessories</span></a></li>
                                                            <li><a href="#"><span>Headsets</span></a></li>
                                                            <li><a href="#"><span>Batteries</span></a></li>
                                                            <li><a href="#"><span>Screen Protectors</span></a></li>
                                                            <li class="last"><a href="#"><span>Memmory Cards</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div id="feature" class="menu-01 menu-01-feature carousel-feature">
                                                        <div class="title"><span>Featured</span><span class="new">New</span></div>
                                                        <div class="carousel-inner">
                                                            <div class="item active">
                                                                <div class="image"><img alt="" src="{{URL::asset('images/feature-mega01.png')}}" /></div>
                                                                <div class="carousel-caption-feature">
                                                                    <div class="title-advan">
                                                                        <span class="name-advan">Ipad Air and iOS7</span>
                                                                        <div class="text-des-advan"><span>At vero eos et accusamus et iusto odios un dignissimos ducimus qui blan ditiis prasixer esentium voluptatum</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="image"><img alt="" src="{{URL::asset('images/feature-mega01.png')}}" /></div>
                                                                <div class="carousel-caption-feature">
                                                                    <div class="title-advan">
                                                                        <span class="name-advan">Ipad Air and iOS7</span>
                                                                        <div class="text-des-advan"><span>At vero eos et accusamus et iusto odios un dignissimos ducimus qui blan ditiis prasixer esentium voluptatum</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="image"><img alt="" src="{{URL::asset('images/feature-mega01.png')}}" /></div>
                                                                <div class="carousel-caption-feature">
                                                                    <div class="title-advan">
                                                                        <span class="name-advan">Ipad Air and iOS7</span>
                                                                        <div class="text-des-advan"><span>At vero eos et accusamus et iusto odios un dignissimos ducimus qui blan ditiis prasixer esentium voluptatum</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-01 menu-01-sale">
                                                        <div class="title"><span>Sale</span></div>
                                                        <div class="content">
                                                            <img alt="" src="{{URL::asset('images/sale-mega-01.png')}}" />
                                                            <p class="description">At vero eos et accusamus et iusto odios un dignissimos ducimus qui blan ditiis prasixer esentium voluptatum</p>
                                                            <div class="shop-now"><a title="Shop now" href="#"><span>Shop now</span></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item3 megamenu-parent">
                                            <a href="grid.html">smart phone</a>
                                            <img class="stick-07" src="{{URL::asset('images/stick/new07.png')}}" alt=""/>
                                            <div class="vt_megamenu_content">
                                                <div class="mega-menu-02">
                                                    <h1 class="title">MOST POPULAR</h1>
                                                    <div class="block row vt-slider vt-slider67">
                                                        <div class="slider-inner">
                                                            <div class="container-slider">
                                                                <div class="products-grid">
                                                                    <div class="item">
                                                                        <div class="item-wrap">
                                                                            <div class="item-image">
                                                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                                                <img class="first_image" src="{{URL::asset('images/product/larg/demo9.jpg')}}" alt="Product demo" /> 
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
                                                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
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
                                                                    <div class="item">
                                                                        <div class="item-wrap">
                                                                            <div class="item-image">
                                                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                                                <img class="first_image" src="{{URL::asset('images/product/larg/demo1.jpg')}}" alt="Product demo" /> 
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
                                                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
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
                                                                    <div class="item">
                                                                        <div class="item-wrap">
                                                                            <div class="item-image">
                                                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                                                <img class="first_image" src="{{URL::asset('images/product/larg/demo6.jpg')}}" alt="Product demo" /> 
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
                                                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
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
                                                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
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
                                                                    <div class="item">
                                                                        <div class="item-wrap">
                                                                            <div class="item-image">
                                                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                                                <img class="first_image" src="{{URL::asset('images/product/larg/demo8.jpg')}}" alt="Product demo" /> 
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
                                                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
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
                                                                    <div class="item">
                                                                        <div class="item-wrap">
                                                                            <div class="item-image">
                                                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                                                <img class="first_image" src="{{URL::asset('images/product/larg/demo9.jpg')}}" alt="Product demo" /> 
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
                                                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
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
                                                                    <div class="item">
                                                                        <div class="item-wrap">
                                                                            <div class="item-image">
                                                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                                                <img class="first_image" src="{{URL::asset('images/product/larg/demo10.jpg')}}" alt="Product demo" /> 
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
                                                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
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
                                            </div>
                                        </li>
                                        <li class="item4">
                                            <a href="grid.html">laptops </a>
                                            <img class="stick-07" src="{{URL::asset('images/stick/hot07.png')}}" alt=""/>
                                        </li>
                                        <li class="item5"><a href="grid.html">Desktops</a></li>
                                        <li class="item6"><a href="#">Computer Accessories</a></li>
                                        <li class="item7 last"><a href="grid.html">Cameras & Photo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="account-and-cart">
                            <div class="box-cart">
                                <div class="cart-mini">
                                    <div class="title">
                                        <span class="item">{{Session::get('total')}}</span>
                                    </div>
                                    <div class="block-content">
                                        <div class="inner">
                                            @if(Session::has('cart'))
                                            <p class="block-subtitle">Sản phẩm mới được thêm</p>
                                            <ol id="cart-sidebar" class="mini-products-list">
                                                @foreach(Session::get('cart') as $id => $info)
                                                    <li class="item">
                                                        <a href="{{route('detail',$id)}}" title="{{$info['product']->name}}" class="product-image">
                                                        <img src="{{URL::asset('images/product/small/'.$info['product']->image)}}" alt="{{$info['product']->name}}" width="60" height="60"/>
                                                        </a>
                                                        <a href="#" class="btn-remove">Remove This Item</a>
                                                        <a href="#" title="Edit item" class="btn-edit">Edit item</a>
                                                        <div class="product-details">
                                                            <p class="product-name"><a title="{{$info['product']->name}}" href="{{route('detail',$id)}}">{{$info['product']->name}}</a></p>
                                                            <span class="price"><?= number_format($info['product']->price) ?> VNĐ</span>       
                                                            <div class="qty-abc">
                                                                <a title="Decrement" class="qty-change-left" href="#" data-id-decrement-header="{{$id}}">down</a>
                                                                <input class="input-text qty-header" type="text" value="{{$info['quantity']}}" data-id-input-header="{{$id}}"/>
                                                                <a title="Increment" class="qty-change-right" href="#" data-id-increment-header="{{$id}}">up</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ol>
                                            <div class="summary">
                                                <p class="subtotal">
                                                    <span class="label">Tổng cộng: </span> <span class="price"><?= number_format(Session::get('total_price')); ?> VNĐ</span>                                                                        
                                                </p>
                                            </div>
                                            @else
                                                <p class="block-subtitle">Không có sản phẩm nào</p> 
                                            @endif
                                            <div class="actions">
                                                <div class="a-inner">
                                                    <a class="btn-mycart" href="{{route('cart')}}" title="View my cart">Giỏ hàng </a>
                                                    <a href="{{route('getCheckout')}}" title="Checkout" class="btn-checkout">Thanh toán</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>