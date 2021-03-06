@extends('client.layout')
@section('title','Chi tiết sản phẩm')
@section('class')
"product-view home07"
@endsection
@section('content')
<div class="content">
	<div class="breadcrumbs">    
		<div class="container">
			<div class="row">
				<ul>
					<li class="home">
						<a href="home-01.html" title="Go to Home Page">Home</a>
						<span>|</span>
						</li>
					<li class="category3">
					<strong>Mobile</strong>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
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
					<div class="product-essential">
					<div class="wrap">
					<form action="#" method="post" id="product_addtocart_form">
							<div class="product-name">
									<h1>{{$product->name}}</h1>
								<div class="navslider">
								<a class="prev" href="#">prev</a>
								<a class="next" href="#">next</a>
								</div>
								
							</div>
							<div class="product-img-box">
								<div class="image-main">
								<img src="{{URL::asset('images/product/small/'.$product->image)}}" alt="Product demo" /> 
								</div>
								<div class="click-quick-view">&nbsp;</div>
								<div id="galary-image" class="carousel slide" data-ride="carousel">
									<!-- Wrapper for slides -->
									<div class="carousel-inner" role="listbox">
										<div class="item active">
											<div class="sub-item">
											<img src="{{URL::asset('images/product/larg/demo7.jpg')}}" alt="Chania">
											</div>
											<div class="sub-item">
											<img src="{{URL::asset('images/product/larg/demo7.jpg')}}" alt="Flower">
											</div>
											<div class="sub-item">
											<img src="{{URL::asset('images/product/larg/demo7.jpg')}}" alt="Flower">
											</div>
										</div>
	
										<div class="item">
										<div class="sub-item">
										<img src="{{URL::asset('images/product/larg/demo7.jpg')}}" alt="Chania">
										</div>
										<div class="sub-item">
										<img src="{{URL::asset('images/product/larg/demo7.jpg')}}" alt="Chania">
										</div>
										<div class="sub-item">
										<img src="{{URL::asset('images/product/larg/demo7.jpg')}}" alt="Chania">
										</div>
										</div>
									</div>
	
									<!-- Left and right controls -->
									<a class="left carousel-control" href="#galary-image" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#galary-image" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
									</div>
								
								<div class="image-quick-view no-display">
									
									<div class="content">
									<span class="close">x</span>
									<img src="{{URL::asset('images/product/larg/demo7.jpg')}}" alt=""/>
									</div>
								</div>
							</div>
							<div class="product-shop">
								<div class="wrap-er">
									<div class="ratings">
										<div class="rating-box">
											<div class="rating" style="width:87%"></div>
										</div>
										<p class="rating-links">
											<a href="#">(1)</a>
											<span class="separator">|</span>
											<a class="re-temp" href="#">Add Your Review</a>
										</p>
									</div>
								</div>
								<!--<div class="product-code"><label>Product code:</label></div>-->
								<div class="short-description">
									<div class="std"><span>
									{{$product->description}}</span>
								</div>
								<div class="box-info-detail">
									<p class="availability in-stock">
										<span class="label">Availability:</span>
										<span class="value">In stock</span>
									</p>
									<div class="price-info">
										<div class="price-box">
											<p class="old-price">
												<span class="price">
													<?= number_format($product->price)?> VNĐ</span>
											</p>
										</div>
									</div>
									<div class="product-options-bottom">
										{{--  <div class="custom-option color">
										<label for="qty">Color</label>
										<ul>
										<li add="$1.500.00"><span style="background-color:#ffffff;border:1px solid #eaeaea;">color1</span></li>
										<li add="$1.600.00 "><span style="background-color:#85d577">color2</span></li>
										<li add="$1.700.00 "><span style="background-color:#f6e23b">color3</span></li>
										<li add="$1.800.00 "><span style="background-color:#9fc5f3">color4</span></li>
										<li add="$1.900.00 "><span style="background-color:#ff6766">color5</span></li>
										<li add="$2.000.00 "><span style="background-color:#ea956e">color5</span></li>
										</ul>
										</div>  --}}
										<strong>Thông số kỹ thuật</strong>
										<div>
											<?= $product->specification ?>
										</div>
										<div class="add-to-box add-to-cart">
											<div class="add-to-cart">
												<div class="qty-wrapper">
													<label for="qty">Qty</label>
													<input type="text" pattern="\d*" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty" />
												</div>
												<div class="add-to-cart-buttons">
													<button type="button" title="Add to cart" class="btn-cart" id="btn-cart" data-toggle="modal" data-id="{{$product->id}}" data-name="{{$product->name}}" data-image="{{URL::asset('images/product/small/'.$product->image)}}"><span>Thêm vào giỏ</span></button>

												</div>
											</div>
											<!--<span class="or"></span>-->
										</div>
										<div class="add-to-box-sub">
											<ul class="add-to-links">
												<li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
												<li><a href="#" class="link-compare">Add to Compare</a></li>
												<li><a class="email-friend" href="#">Email to a Friend</a></li>
											</ul>
										</div>
									</div>
									<!--div class="product-options-bottom">
										<div class="add-to-box add-to-cart">
																		</div>
										</div-->    
								</div>
								<!-- end div .box-info-detail -->
							</div>
						</form>
						<div class="share-this" style="margin-top:18px;">
						<span class='st_sharethis_large' displayText='ShareThis'></span>
						<span class='st_facebook_large' displayText='Facebook'></span>
						<span class='st_twitter_large' displayText='Tweet'></span>
						<span class='st_linkedin_large' displayText='LinkedIn'></span>
						<span class='st_pinterest_large' displayText='Pinterest'></span>
						<span class='st_email_large' displayText='Email'></span>
						<script type="text/javascript">var switchTo5x=true;</script>
						<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
						<script type="text/javascript">stLight.options({publisher: "6d56a077-95db-44a6-a019-d5a901534fea", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
						</div>
					</div>
				<div class="tab-detail">
					<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Mô tả</a></li>
					<li><a data-toggle="tab" href="#menu1">Thông tin thêm</a></li>
					<li><a data-toggle="tab" href="#menu2">Review</a></li>
					<li><a data-toggle="tab" href="#menu3">Tags</a></li>
					<li><a data-toggle="tab" href="#menu4">Custom tab 1</a></li>
					</ul>
	
					<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<p>{{$product->summary}}</p>
					</div>
					<div id="menu1" class="tab-pane fade">
						<h3>Additional Information</h3>
						<p>Color</p>
						<p>Size</p>
					</div>
					<div id="menu2" class="tab-pane fade">
						<h3>Customer Reviews 1 item(s)</h3>
						<p><span tyle="float:left;">1 Item(s)</span> <span style="float:right;">Show <select><option>6</option><option selected>10</option><option>12</option><option>15</option><option>20</option></select>per page</span></p>
						<br/>
						<p><a href="#>">7uptheme</a></p>
						<p>At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</p>
						<table class="ratings-table">
					<colgroup>
						<col class="review-label" />
						<col class="review-value" />
					</colgroup>
					<tbody>
						<tr>
							<th>Quality</th>
							<td>
								<div class="rating-box">
								<div class="rating" style="width:80%;"></div>
								</div>
							</td>
						</tr>
						<tr>
							<th>Price</th>
							<td>
								<div class="rating-box">
								<div class="rating" style="width:80%;"></div>
								</div>
							</td>
						</tr>
						<tr>
							<th>Value</th>
							<td>
								<div class="rating-box">
								<div class="rating" style="width:100%;"></div>
								</div>
							</td>
						</tr>
					</tbody>
						</table>
						<p>Review by 7uptheme / (Posted on 4/14/2015)</p>
						<div class="form-add">
						<h2>Write Your Own Review</h2>
						<form action="" method="post" id="review-form">
						<input name="form_key" type="hidden" value="JbT1G5uAkBcFDot6" />
						<h3>You're reviewing:            <span>Ipad Air and iOS7</span>
						</h3>
						<div class="fieldset">
							<h4>How do you rate this product? <em class="required">*</em></h4>
							<span id="input-message-box"></span>
							<table class="data-table review-summary-table ratings" id="product-review-table">
								<col width="1" />
								<col />
								<col />
								<col />
								<col />
								<col />
								<thead>
									<tr>
									<th>&nbsp;</th>
									<th>
										<div class="rating-box">
											<span class="rating nobr" style="width:20%;"></span>
										</div>
									</th>
									<th>
										<div class="rating-box">
											<span class="rating nobr" style="width:40%;"></span>
										</div>
									</th>
									<th>
										<div class="rating-box">
											<span class="rating nobr" style="width:60%;"></span>
										</div>
									</th>
									<th>
										<div class="rating-box">
											<span class="rating nobr" style="width:80%;"></span>
										</div>
									</th>
									<th>
										<div class="rating-box">
											<span class="rating nobr" style="width:100%;"></span>
										</div>
									</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									<th>Price</th>
									<td class="value"><label for="Price_1"><input type="radio" name="ratings[3]" id="Price_1" value="11" class="radio" /></label></td>
									<td class="value"><label for="Price_2"><input type="radio" name="ratings[3]" id="Price_2" value="12" class="radio" /></label></td>
									<td class="value"><label for="Price_3"><input type="radio" name="ratings[3]" id="Price_3" value="13" class="radio" /></label></td>
									<td class="value"><label for="Price_4"><input type="radio" name="ratings[3]" id="Price_4" value="14" class="radio" /></label></td>
									<td class="value"><label for="Price_5"><input type="radio" name="ratings[3]" id="Price_5" value="15" class="radio" /></label></td>
									</tr>
									<tr>
									<th>Value</th>
									<td class="value"><label for="Value_1"><input type="radio" name="ratings[2]" id="Value_1" value="6" class="radio" /></label></td>
									<td class="value"><label for="Value_2"><input type="radio" name="ratings[2]" id="Value_2" value="7" class="radio" /></label></td>
									<td class="value"><label for="Value_3"><input type="radio" name="ratings[2]" id="Value_3" value="8" class="radio" /></label></td>
									<td class="value"><label for="Value_4"><input type="radio" name="ratings[2]" id="Value_4" value="9" class="radio" /></label></td>
									<td class="value"><label for="Value_5"><input type="radio" name="ratings[2]" id="Value_5" value="10" class="radio" /></label></td>
									</tr>
									<tr>
									<th>Quality</th>
									<td class="value"><label for="Quality_1"><input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio" /></label></td>
									<td class="value"><label for="Quality_2"><input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio" /></label></td>
									<td class="value"><label for="Quality_3"><input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio" /></label></td>
									<td class="value"><label for="Quality_4"><input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio" /></label></td>
									<td class="value"><label for="Quality_5"><input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio" /></label></td>
									</tr>
								</tbody>
							</table>
							<input type="hidden" name="validate_rating" class="validate-rating" value="" />
							<ul class="form-list">
								<li>
									<label for="review_field" class="required"><em>*</em>Let us know your thoughts</label>
									<div class="input-box">
									<textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
									</div>
								</li>
								<li class="inline-label">
									<label for="summary_field" class="required"><em>*</em>Summary of Your Review</label>
									<div class="input-box">
									<input type="text" name="title" id="summary_field" class="input-text required-entry" value="" />
									</div>
								</li>
								<li class="inline-label">
									<label for="nickname_field" class="required"><em>*</em>What's your nickname?</label>
									<div class="input-box">
									<input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="" />
									</div>
								</li>
							</ul>
						</div>
						<div class="buttons-set">
							<button type="submit" title="Submit Review" class="button"><span><span>Submit Review</span></span></button>
						</div>
						</form>
						
						</div>
					</div>
					<div id="menu3" class="tab-pane fade">
						<h3>Product Tags</h3>
						<p>Add Your Tags:</p>
						<form action="" menthod="get">
						<input type="text" nam="tags" />
						<button><span>Add tags</span></button>
						<form>
					</div>
					<div id="menu4" class="tab-pane fade">
						<p>This is custom tab in static block.</p>
					</div>
					</div>
				</div>
					
					<div id="upsell_pro" class="products-grid">
					<div class="inner">
						<div class="title">
							<span>Upsell Products</span>            
						</div>
						<div class="block  vt-slider vt-slider5  row">
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
								<div class="navslider">
									<a class="prev" href="#">Prev</a>
									<a class="next" href="#">Next</a>
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
@endsection