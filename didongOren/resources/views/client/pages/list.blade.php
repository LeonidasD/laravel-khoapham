@extends('client.layout')
@section('title','Danh sách sản phẩm')
@section('class')
"category-list home07"
@endsection
@section('content')

<div class="content">
	<div class="breadcrumbs">    
		<div class="container">
			<div class="row">
				<ul>
					<li class="home">
						<a href="{{route('home')}}" title="Go to Home Page">Trang chủ</a>
						<span>|</span>
					 </li>
					@if($types->count() > 1)
						<li class="category3">
							<strong>Tất cả sản phẩm</strong>
						</li>
					@else
						@foreach($types as $type)
							<li class="category3">
								<strong>{{$type->name}}</strong>
							</li>
						@endforeach
					@endif
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div id="box-left" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
			<div class="block block-layered-nav">
				<div class="block-title">
						@if($types->count() > 1)
							<strong><span>Tất cả sản phẩm</span></strong>
						@else
							@foreach($types as $type)
								<strong><span>{{$type->name}}</span></strong>
							@endforeach
						@endif
				</div>
				<div class="block-content">
				  <dl id="narrow-by-list">

					<?php $i = 1; ?>
					@foreach($types as $type)
						@if($i<= $types->count())
							@foreach($type->ProductBrand as $brand)
								@if($i == 1)
									<dt id="tab{{$i}}" class="tab-accordion accordion-open">{{$brand->name}}</dt>
									<dd class="tabcontent{{$i++}}">
								@else
									<dt id="tab{{$i}}" class="tab-accordion accordion-close">{{$brand->name}}</dt>
									<dd class="tabcontent{{$i++}}" style="display:none;">
								@endif
										<ol>
												@foreach($brand->Product as $product)
													@if($types->count() == 1 )
														@if($product->id_type == $type->id)
															<li ><a href="{{route('detail',$product->id)}}">{{$product->name}}</a></li>
														@endif
													@else
															<li ><a href="{{route('detail',$product->id)}}">{{$product->name}}</a></li>
													@endif
												@endforeach
											
										</ol>
									</dd>
							@endforeach
						@endif
					@endforeach
				</dl>
				</div>
				<div class="block-title-shop-by">
				<strong><span>Shop by</span></strong>
				</div>
				<div class="block-content">
				  <dl id="narrow-by-list">
						<dt id="tab22" class="tab-accordion accordion-open"> Price</dt>
						<dd class="tabcontent22">
							<div class="price">
							<div class="range-wrap"><div id="slider-range"></div>
							</div>
							<div class="text-box"><div class="price-from">
								$ <input type="text" name="min" id="minPrice" class="priceTextBox" value="400"/></div><div class="price-to"> <input type="text" name="max" id="maxPrice" class="priceTextBox" value="1000"/></div>					
								<a class="go" href="javascript:void(0)">Fillter</a>
								<input type="hidden" id="amount" readonly="readonly" style="background:none; border:none;" value="$400 - $1000" />
							</div>
							</div>	
						</dd>
						<dt id="tab42" class="tab-accordion accordion-close">Color</dt>
							<dd class="tabcontent42" style="display:none;"><ol>
							<li class='licolor'><a  class='itemcolor colorwhite' href="grid.html?color=25">White_#ffffff</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#e66054' href="grid.html?color=8">Blue _#e66054</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#d0b7cc' href="grid.html?color=10">Green_#d0b7cc</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#107a8e' href="grid.html?color=9">Yellow _#107a8e</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#a7bc93' href="grid.html?color=24">Pink_#a7bc93</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#d3b627' href="grid.html?color=23">Lightblue_#d3b627</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#b4b3ae' href="grid.html?color=22">Gray_#b4b3ae</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#502006' href="grid.html?color=21">Red_#502006</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#311e21' href="grid.html?color=20">violet_#311e21</a></li>
							</ol>
							</dd>
						<dt id="tab32" class="tab-accordion accordion-open">Manufacturer</dt>
						  <dd class="tabcontent32">
						  <ol>
							<li ><a  href="grid.html?manufacturer=11">Apple </a>(2)</li>
							<li > <a   href="grid.html?manufacturer=13">Samsung</a>(5) </li>
							<li ><a href="grid.html?manufacturer=14">HTC</a>(3) </li>
							<li ><a   href="grid.html?manufacturer=12">Blackberry</a>(2) </li>
							</ol>
							</dd>
							
							<dt id="tab55" class="tab-accordion accordion-close">Size</dt>
						   <dd class="tabcontent55" style="display:none;">
						   <ol> 
						    <li class="size"><a href="grid.html?size=4">L</a></li>
						    <li class="size"><a  href="grid.html?size=3">S</a></li>
							<li class="size"><a  href="grid.html?size=5">X</a></li>
							<li class="size"><a  href="grid.html?size=6">XL</a></li>
							</ol>
							</dd>
						   </dl>
						</div>
			</div>
			<div class="block block-compare">
				<div class="block-title">
					<strong><span>COMPARE PRODUCTS (2)</span></strong>
				</div>
				<div class="content">
				<ul>
				<li><a href="detail.html">Ipad Air and iOS7</a></li>
				<li><a href="detail.html">Ipad Air and iOS7</a></li>
				</ul>
				</div>
				<div class="actions">
					<a class="btn-clear" href="detail.html">
					clear all
					</a>
					<a class="go-compare" href="detail.html">
					Compare
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
			<div class="item active"><a href="detail.html"><img src="{{URL::asset('images/product/small/banner13.png')}}" alt="banner" /></a>
				<div class="std">
				<span class="t1">up to 45%</span>
				<span class="t2">Nokia Lumia 920</span>
				<span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
				</div>
				<a class="gt-shop" href="detail.html">Shop Now</a>
			</div>
			<div class="item"><a href="detail.html"><img src="{{URL::asset('images/product/small/banner13.png')}}" alt="banner" /></a>
				<div class="std">
				<span class="t1">up to 50%</span>
				<span class="t2">Nokia Lumia 920</span>
				<span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
				</div>
				<a class="gt-shop" href="detail.html">Shop Now</a>
			
			</div>
			<div class="item"><a href="detail.html"><img src="{{URL::asset('images/product/small/banner13.png')}}" alt="banner" /></a>
				<div class="std">
				<span class="t1">up to 80%</span>
				<span class="t2">Nokia Lumia 920</span>
				<span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
				</div>
				<a class="gt-shop" href="detail.html">Shop Now</a>
			
			</div>
			</div>
			</div>
			</div>
			</div>
			<div id="main" class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-main">
			<div class="wrap-banner-cate">
			<a class="cate-img" href="detail.html"><img src="images/banner-2.png" alt="" /></a>
			</div>
				<div class="page-title category-title">
					@if(isset($search))
						<strong><span>Kết quả tìm kiếm: "{{$search}}"</span></strong>
						<br>
						@if(isset($message))
							<strong><span>{{$message}}</span></strong>
						@endif
					@elseif($types->count() > 1)
						<strong><span>Tất cả sản phẩm</span></strong>
					@else
						@foreach($types as $type)
							<strong><span>{{$type->name}}</span></strong>
						@endforeach
					@endif
				</div>
				<div id="catalog-listing">
					<div class="category-products page-product-list">
						<div class="toolbar-top">
						   <div class="toolbar">
							  <div class="sorter">
								 <label>View as</label>
								 <p class="view-mode">
									<a href="grid.html" title="List" class="list">Grid</a>                            
									<strong title="Grid" class="grid">List</strong>                            
									                              
								 </p>
								 <div class="sort-by">
									<label>Sort By</label>
									<div class="wrap-sb">
									   <div class="selected-order"></div>
									   <ul class="select-order">
										  <li><a href="grid.html?dir=asc&amp;order=position"  class="selected">Position</a></li>
										  <li><a href="grid.html?dir=asc&amp;order=name" >Name</a></li>
										  <li><a href="grid.html?dir=asc&amp;order=price" >Price</a></li>
									   </ul>
									</div>
									<a class="desc" href="grid.html?dir=desc&amp;order=position" title="Set Descending Direction">
									   <!--<img src="" alt="" class="v-middle" />-->
									</a>
								 </div>
								 <div class="limiter">
									<label>Show</label>
									<div class="wrap-show">
									   <div class="selected-limiter"></div>
									   <ul class="select-limiter">
										   @for($i = 5; $i<= 20; $i+= 5)
												@if(isset($id))
													<li><a href="{{route('list',['id'=> $id,'limit'=> $i])}}"
												@else
													<li><a href="{{route('search',['search'=> $search,'limit'=> $i])}}"
												@endif
												
												@if(isset($limit))
													@if($i == $limit) class="selected" @endif>{{$i}}</a></li>
												@else
													@if($i == 5) class="selected" @endif>{{$i}}</a></li>
												@endif
										  @endfor
									   </ul>
									</div>
									<label class="stylepp">per page</label>
								 </div>
							  </div>
						   </div>
						   	@if(!isset($id))
								{{$products->appends(['search' => $search, 'limit' => $limit])->links()}}
							@else
								{{$products->appends(['limit'=> $limit])->links()}}
							@endif
						</div>
						<ol class="products-list">
							@foreach($products as $product)
									<li class="item">
										<div class="inner-item ">
											<div class="item-image">
												<div class="inner"> 
												<a class="product-image no-touch" href="{{route('detail',$product->id)}}" title="{{$product->name}}">  
												<img class="first_image" src="{{URL::asset('images/product/small/'.$product->image)}}" alt="{{$product->name}}" /> 
												</a>                
												</div>
											</div>
											<div class="product-shop">
												<div class="inner">
												<h2 class="product-name"><a class="product-image" href="{{route('detail',$product->id)}}" title="{{$product->name}}"></a>{{$product->name}}</h2>
												<div class="price-box">
													<span class="regular-price" id="product-price-12">
													<span class="price"><?= number_format($product->price)?> VNĐ</span>                                    
													</span>
												</div>
												<div class="ratings">
													<div class="rating-box">
														<div class="rating" style="width:80%"></div>
													</div>
													<span class="amount"><a href="detail.html">1(s)</a></span>
												</div>
												
												<div class="desc std">
													{{$product->summary}}
												</div>
												<div class="wrap-btn-prolist">
													<div class="item-btn">
														<div class="box-inner">
															<a title="Add to wishlist" href="detail.html" class="link-wishlist">&nbsp;</a>
															<a title="Add to compare" href="detail.html" class="link-compare">&nbsp;</a>
															<span class="qview"><a href="detail.html" ></a>
															<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="detail.html"><span>Quick View</span></a>
														</span>
														</div>
													</div>
													<a title="Add to cart" class="btn-cart" id="btn-cart" data-toggle="modal" data-id="{{$product->id}}" data-name="{{$product->name}}" data-image="{{URL::asset('images/product/small/'.$product->image)}}"><span>Thêm vào giỏ</span></a>
												</div>
												</div>
											</div>
										</div>
									</li>
						   	@endforeach
						</ol>
						<div class="toolbar-bottom">
						   <div class="toolbar">
							  <div class="sorter">
								 <label>View as</label>
								 <p class="view-mode">
									<strong title="Grid" class="grid">Grid</strong>                            
									<a href="grid.html?mode=list" title="List" class="list">List</a>                                
								 </p>
								 <div class="sort-by">
									<label>Sort By</label>
									<div class="wrap-sb">
									   <div class="selected-order"></div>
									   <ul class="select-order">
										  <li><a href="grid.html?dir=asc&amp;order=position"  class="selected">Position</a></li>
										  <li><a href="grid.html?dir=asc&amp;order=name" >Name</a></li>
										  <li><a href="grid.html?dir=asc&amp;order=price" >Price</a></li>
									   </ul>
									</div>
									<a class="desc" href="grid.html?dir=desc&amp;order=position" title="Set Descending Direction">
									   <!--<img src="" alt="" class="v-middle" />-->
									</a>
								 </div>
								 <div class="limiter">
									<label>Show</label>
									<div class="wrap-show">
									   <div class="selected-limiter"></div>
										<ul class="select-limiter">
											@for($i = 5; $i<= 20; $i+= 5)
													@if(isset($id))
														<li><a href="{{route('list',['id'=> $id,'limit'=> $i])}}"
													@else
														<li><a href="{{route('search',['search'=> $search,'limit'=> $i])}}"
													@endif
													
													@if(isset($limit))
														@if($i == $limit) class="selected" @endif>{{$i}}</a></li>
													@else
														@if($i == 5) class="selected" @endif>{{$i}}</a></li>
													@endif
											@endfor
										</ul>
									</div>
									<label class="stylepp">per page</label>
								 </div>
							  </div>
						   </div>
						   {{$products->links()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>		
</div>

@endsection