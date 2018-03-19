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
                                <h1>Thông tin thanh toán</h1>
                            <div>
                            <div class="row">
                                <div class="col-md-6">
                                    @foreach(Session::get('cart') as $id => $info)
                                        <a href="{{route('detail',$id)}}" title="{{$info['product']->name}}" class="product-image">
                                        <img src="{{URL::asset('images/product/small/'.$info['product']->image)}}" alt="{{$info['product']->name}}" width="60" height="60"/>
                                        </a>
                                        <div class="product-details">
                                            <p class="product-name"><a title="{{$info['product']->name}}" href="{{route('detail',$id)}}">Tên sản phẩm: {{$info['product']->name}}</a></p>
                                            <div class="qty">
                                                <p>Số lượng: {{$info['quantity']}}</p>
                                            </div>
                                            <span class="price">Giá: <?= number_format($info['product']->price)?> VNĐ</span>       

                                        </div>
                                        <hr>
                                    @endforeach
                                    <p>Tổng cộng: <?= number_format(Session::get('total_price'));?> VNĐ
                                </div>
                                <div class="col-md-6">
                                    <form action="{{route('checkout')}}" method="GET">
                                        <div class="form-group">
                                            <label for="name">Họ tên</label>
                                            <input class="form-control" type="text" id="name" name="name" placeholder="Họ tên của bạn">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Địa chỉ giao hàng</label>
                                            <input class="form-control" type="text" id="address" name="address" placeholder="Địa chỉ của bạn">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Số điện thoại</label>
                                            <input class="form-control" type="text" id="phone" name="phone" placeholder="Số điện thoại của bạn">
                                        </div>
                                        <div class="form-group">
                                            <label for="ten">Email</label>
                                            <input class="form-control" type="text" id="email" name="email" placeholder="Email của bạn">
                                        </div>
                                        <div class="form-group">
                                            <label for="note">Ghi chú</label>
                                            <textarea class="form-control" type="text" id="note" name="note" placeholder="Ghi chú đơn hàng"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default btn-success">Hoàn tất</button>
                                    </form>
                                </div>
                            </div>                 
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
<div class="modal fade" id="deleteAsk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Thông báo</h4>
                </div>
                <div class="modal-body">
                    <span class="delete_question"></span>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-confirm-delete">Đồng ý</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
                </div>
            </div>
        </div>
</div>
<div class="modal fade" id="deleteCartItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Thông báo</h4>
                </div>
                <div class="modal-body">
                    <span class="cart_item"></span>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-done">Đồng ý</button>
                </div>
            </div>
        </div>
</div>
<script>
$('.btn-delete-cart').click(function(){
    var product_id = $(this).attr('data-id');
    var product_name = $(this).attr('data-name');
    $('.delete_question').html('Bạn có chắc chắn muốn xoá sản phẩm ' + product_name + '?');
    $('.btn-confirm-delete').attr('data-id',product_id);
    $('.btn-confirm-delete').attr('data-name',product_name);
    $('#deleteAsk').modal('show');
    
})
$('.btn-confirm-delete').click(function(){
    var product_id = $(this).attr('data-id');
    var product_name = $(this).attr('data-name');
    $.ajax({
        url: "{{route('deleteCart')}}",
        data: {
            id: product_id
        },
        type: "GET",
        success: function(data){
            $('.cart_item').html('Đã xoá khỏi giỏ hàng sản phẩm ' + product_name);
            $('#deleteAsk').modal('hide');
            $('#addToCartModal').modal('hide');
            $('#deleteCartItemModal').modal('show');
        },
        error: function(error){
            alert(error.responseText);
        }
    })
})
$('.btn-done').click(function(){
    window.location.reload();
})
</script>
@endsection