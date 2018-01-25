<!DOCTYPE html>
<html xml:lang="en" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style/css/style-main07.css"/>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" media="all" />
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="style/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/galary-image/js/jquery.blueimp-gallery.min.js"></script>
		<script src="js/galary-image/js/bootstrap-image-gallery.js"></script>
		<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="js/jquery.plugin.js"></script>
		<script type="text/javascript" src="js/jquery.countdown.js"></script>
		<script type="text/javascript" src="js/slideshow/jquery.themepunch.revolution.js"></script>
		<script type="text/javascript" src="js/slideshow/jquery.themepunch.plugins.min.js"></script> 
		<script type="text/javascript" src="js/theme.js"></script> 
		<title>@yield('title')</title>
	</head>
	<body class="home07">
		<!--begin header-->
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
													<img src="images/flags/flag-default.jpg" alt="flag">
												</div>
												<ul>
													<li>
														<a class="selected" href="#">                  
														<img src="images/flags/flag-french.jpg" alt="flag">
														<span>French</span>
														</a>
													</li>
													<li>
														<a href="#">                    
														<img src="images/flags/flag-german.jpg" alt="flag">
														<span>German</span>
														</a>
													</li>
													<li>
														<a href="#">                    
														<img src="images/flags/flag-brazil.jpg" alt="flag">
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
											<form action="?q=exp" method="POST">
												<button><span>search</span></button>
												<ul class="drop-search">
													<li>
														<span class="selected">All Categories </span>
														<ul>
															<li>All Categories </li>
															<li>Cate 1</li>
															<li>Cate 2</li>
															<li>Cate 3</li>
														</ul>
													</li>
												</ul>
												<input name="search" type="text" value="" placeholder="search this site..."/>
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
									<a href="home-07.html"><img src="images/logo-07.png" alt=""/></a>
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
												<li class="item1 first"><a href="home-07.html">Home</a></li>
												<li class="item2 megamenu-parent">
													<a href="grid.html">Tablets</a>
													<img class="stick-07" src="images/stick/sale07.png" alt="" />
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
																		<div class="image"><img alt="" src="images/feature-mega01.png" /></div>
																		<div class="carousel-caption-feature">
																			<div class="title-advan">
																				<span class="name-advan">Ipad Air and iOS7</span>
																				<div class="text-des-advan"><span>At vero eos et accusamus et iusto odios un dignissimos ducimus qui blan ditiis prasixer esentium voluptatum</span></div>
																			</div>
																		</div>
																	</div>
																	<div class="item">
																		<div class="image"><img alt="" src="images/feature-mega01.png" /></div>
																		<div class="carousel-caption-feature">
																			<div class="title-advan">
																				<span class="name-advan">Ipad Air and iOS7</span>
																				<div class="text-des-advan"><span>At vero eos et accusamus et iusto odios un dignissimos ducimus qui blan ditiis prasixer esentium voluptatum</span></div>
																			</div>
																		</div>
																	</div>
																	<div class="item">
																		<div class="image"><img alt="" src="images/feature-mega01.png" /></div>
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
																	<img alt="" src="images/sale-mega-01.png" />
																	<p class="description">At vero eos et accusamus et iusto odios un dignissimos ducimus qui blan ditiis prasixer esentium voluptatum</p>
																	<div class="shop-now"><a title="Shop now" href="#"><span>Shop now</span></a></div>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li class="item3 megamenu-parent">
													<a href="grid.html">smart phone</a>
													<img class="stick-07" src="images/stick/new07.png" alt=""/>
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
																						<img class="first_image" src="images/product/larg/demo9.jpg" alt="Product demo" /> 
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
																						<img class="first_image" src="images/product/larg/demo1.jpg" alt="Product demo" /> 
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
																						<img class="first_image" src="images/product/larg/demo6.jpg" alt="Product demo" /> 
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
																						<img class="first_image" src="images/product/larg/demo7.jpg" alt="Product demo" /> 
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
																						<img class="first_image" src="images/product/larg/demo8.jpg" alt="Product demo" /> 
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
																						<img class="first_image" src="images/product/larg/demo9.jpg" alt="Product demo" /> 
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
																						<img class="first_image" src="images/product/larg/demo10.jpg" alt="Product demo" /> 
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
													<img class="stick-07" src="images/stick/hot07.png" alt=""/>
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
												<span class="item">0</span>
											</div>
											<div class="block-content">
												<div class="inner">
													<p class="block-subtitle">Recently added item(s)</p>
													<ol id="cart-sidebar" class="mini-products-list">
														<li class="item">
															<a href="#" title="Fashion Product 09" class="product-image">
															<img src="images/product/small/image-demo-1.jpg" alt="Fashion Product 09" />
															</a>
															<a href="#" class="btn-remove">Remove This Item</a>
															<a href="#" title="Edit item" class="btn-edit">Edit item</a>
															<div class="product-details">
																<p class="product-name"><a title="Fashion Product 09" href="#">Fashion Product 09</a></p>
																<span class="price">$200.00</span>       
																<div class="qty-abc">
																	<a title="Decrement" class="qty-change-left" href="#">down</a>
																	<input class="input-text qty" type="text" value="1" />
																	<a title="Increment" class="qty-change-right" href="#">up</a>
																</div>
															</div>
														</li>
													</ol>
													<div class="summary">
														<p class="subtotal">
															<span class="label">Subtotal:</span> <span class="price">$200.00</span>                                                                        
														</p>
													</div>
													<div class="actions">
														<div class="a-inner">
															<a class="btn-mycart" href="#" title="View my cart">view my cart</a>
															<a href="" title="Checkout" class="btn-checkout">Checkout</a>
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
		<!--end header-->
		<!--begin content-->
        @yield('content')
		<!--end content-->
		<!--begin footer-->
		<div id="box-footer">
			<div class="box-footer-top">
				<div class="container">
					<div class="row">
						<div class="row">
							<div class="box-connect col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="block-title"><span>Connect with</span></div>
								<a href="#" class="face-book">face book</a>
								<a href="#" class="tweeter">tweeter</a>
								<a href="#" class="no-name">no-name</a>
								<a href="#" class="pinseter">pinseter</a>
								<a href="#" class="google">google+</a>
								<a href="#" class="init">init</a>
							</div>
							<div class="box-tweeter col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="block-title"><span>tweeter</span></div>
								<div class="content">
									Leo aliquet, dictum orci at, varius ligula. Duis aliquet pellentesque tincidunt. Vestibulum finibus ceo aliquet, dictum orci at, varius ligula. Duis aliquet 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer-middle">
				<div class="container">
					<div class="row">
						<div class="row">
							<div class="block block-info col-lg-3 col-md-3 col-sm-3 col-xs-6">
								<div class="block-title"><span>Information</span></div>
								<div class="block-content">
									<ul>
										<li><a href="#">Site Map</a></li>
										<li><a href="#">Search Terms</a></li>
										<li><a href="#">Advanced Search</a></li>
										<li><a href="#">Our stores</a></li>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</div>
							</div>
							<div class="block block-customer col-lg-3 col-md-3 col-sm-3 col-xs-6">
								<div class="block-title"><span>Customer Service</span></div>
								<div class="block-content">
									<ul>
										<li><a href="#">View Cart</a></li>
										<li><a href="#">My Account</a></li>
										<li><a href="#">Order Status</a></li>
										<li><a href="#">Shop By Brand</a></li>
										<li><a href="#">Trade-in Program</a></li>
										<li><a href="#">Testimonial</a></li>
										<li><a href="#">FAQs</a></li>
									</ul>
								</div>
							</div>
							<div class="block block-galary col-lg-3 col-md-3 col-sm-3 col-xs-6">
								<div class="block-title"><span>Gallery</span></div>
								<div id="links" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#links" data-slide-to="0" class="active"></li>
										<li data-target="#links" data-slide-to="1"></li>
										<li data-target="#links" data-slide-to="2"></li>
									</ol>
									<div class="carousel-inner" role="listbox">
										<div class="item active">
											<a href="images/product/larg/demo1.jpg" title="Glary image 01" data-gallery>
											<img src="images/product/larg/demo1.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo2.jpg" title="Glary image 02" data-gallery>
											<img src="images/product/larg/demo2.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo3.jpg" title="Glary image 03" data-gallery>
											<img src="images/product/larg/demo3.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo4.jpg" title="Glary image 04" data-gallery>
											<img src="images/product/larg/demo4.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo5.jpg" title="Glary image 05" data-gallery>
											<img src="images/product/larg/demo5.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo6.jpg" title="Glary image 06" data-gallery>
											<img src="images/product/larg/demo6.jpg" alt=""/>
											</a>
										</div>
										<div class="item">
											<a href="images/product/larg/demo7.jpg" title="Glary image 07" data-gallery>
											<img src="images/product/larg/demo7.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo8.jpg" title="Glary image 08" data-gallery>
											<img src="images/product/larg/demo8.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo9.jpg" title="Glary image 09" data-gallery>
											<img src="images/product/larg/demo9.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo10.jpg" title="Glary image 10" data-gallery>
											<img src="images/product/larg/demo10.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo11.jpg" title="Glary image 11" data-gallery>
											<img src="images/product/larg/demo11.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo12.jpg" title="Glary image 12" data-gallery>
											<img src="images/product/larg/demo12.jpg" alt=""/>
											</a>
										</div>
										<div class="item">
											<a href="images/product/larg/demo13.jpg" title="Glary image 13" data-gallery>
											<img src="images/product/larg/demo13.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo13.jpg" title="Glary image 13" data-gallery>
											<img src="images/product/larg/demo13.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo13.jpg" title="Glary image 13" data-gallery>
											<img src="images/product/larg/demo13.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo13.jpg" title="Glary image 13" data-gallery>
											<img src="images/product/larg/demo13.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo13.jpg" title="Glary image 13" data-gallery>
											<img src="images/product/larg/demo13.jpg" alt=""/>
											</a>
											<a href="images/product/larg/demo13.jpg" title="Glary image 13" data-gallery>
											<img src="images/product/larg/demo13.jpg" alt=""/>
											</a>
										</div>
									</div>
								</div>
								<div class="block-content">
									<ul>
										<li><a href="#" class="view-all">View all</a></li>
									</ul>
								</div>
								<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
								<div id="blueimp-gallery" class="blueimp-gallery">
									<!-- The container for the modal slides -->
									<div class="slides"></div>
									<!-- Controls for the borderless lightbox -->
									<h3 class="title">&nbsp;</h3>
									<a class="prev">‹</a>
									<a class="next">›</a>
									<a class="close">×</a>
									<a class="play-pause"></a>
									<ol class="indicator"></ol>
									<!-- The modal dialog, which will be used to wrap the lightbox content -->
									<div class="modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" aria-hidden="true">&times;</button>
													<h4 class="modal-title">&nbsp;</h4>
												</div>
												<div class="modal-body next"></div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default pull-left prev">
													<i class="glyphicon glyphicon-chevron-left"></i>
													Previous
													</button>
													<button type="button" class="btn btn-primary next">
													Next
													<i class="glyphicon glyphicon-chevron-right"></i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="block block-cu col-lg-3 col-md-3 col-sm-3 col-xs-6">
								<div class="block-title"><span>Contact us</span></div>
								<div class="block-content">
									<ul>
										<li class="item1"><span>Our business address is 1063 <br />Freelon Street San Francisco</span></li>
										<li class="item2"><span>+ 020.566.6666</span></li>
										<li class="item3"><a href="mailto:support@7-Up.com">support@7-Up.com</a></li>
									</ul>
									<div class="phone-nb"><a href="tel:0906868757">090.68.68.757</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer-bottom">
				<div class="container">
					<div class="row">
						<div class="box-left">
							<ul>
								<li class="home"><a>MELLO</a></li>
								<li><a href="#">About Us   </a><span>|</span></li>
								<li><a href="#">Delivery & Returns</a><span>|</span></li>
								<li><a href="#">Terms & Conditions</a><span>|</span></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
							<h6>Mello &copy; 2015 Magento Demo Store. All Rights Reserved. Designed by <a title="Visit VnThemePro.Com!" href="7uptheme.com">7-Up</a></h6>
						</div>
						<div class="box-right">
							<ul>
								<li><img src="images/p1.png" alt="" /></li>
								<li><img src="images/p2.png" alt="" /></li>
								<li><img src="images/p3.png" alt="" /></li>
								<li><img src="images/p4.png" alt="" /></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<a id="gototop">Top</a>
			<!--js-->
		</div>
		<!--end footer-->
		<div class="block-slidebar">
			<button class="close-menu" type="button"><span>close menu</span></button>
			<ul class="nav-menu clearfix">
				<li class="active">
					<a title="Home" href="http://demo.7uptheme.com/milano/" class="active"><span>Home</span></a>
				</li>
				<li onmouseout="toggleMenu(this,0)" onmouseover="toggleMenu(this,1)" class="level0 nav-1 parent">
					<a href="http://demo.7uptheme.com/milano/men-14.html">
					<span>Men</span>
					</a>
					<ul class="level0">
						<li class="level1 nav-1-1 first">
							<a href="http://demo.7uptheme.com/milano/men-14/new-arrivals.html">
							<span>New Arrivals</span>
							</a>
						</li>
						<li class="level1 nav-1-2">
							<a href="http://demo.7uptheme.com/milano/men-14/jeans.html">
							<span>Jeans</span>
							</a>
						</li>
						<li class="level1 nav-1-3">
							<a href="http://demo.7uptheme.com/milano/men-14/joggers.html">
							<span>Joggers</span>
							</a>
						</li>
						<li class="level1 nav-1-4 last">
							<a href="http://demo.7uptheme.com/milano/men-14/polos.html">
							<span>polos</span>
							</a>
						</li>
					</ul>
				</li>
				<li onmouseout="toggleMenu(this,0)" onmouseover="toggleMenu(this,1)" class="level0 nav-2 parent">
					<a href="http://demo.7uptheme.com/milano/women.html">
					<span>Women</span>
					</a>
					<ul class="level0">
						<li class="level1 nav-2-1 first">
							<a href="http://demo.7uptheme.com/milano/women/new-arrivals.html">
							<span>New Arrivals</span>
							</a>
						</li>
						<li class="level1 nav-2-2">
							<a href="http://demo.7uptheme.com/milano/women/shirts.html">
							<span>Shirts</span>
							</a>
						</li>
						<li class="level1 nav-2-3">
							<a href="http://demo.7uptheme.com/milano/women/tees.html">
							<span>Tees</span>
							</a>
						</li>
						<li class="level1 nav-2-4">
							<a href="http://demo.7uptheme.com/milano/women/khakis.html">
							<span>Khakis</span>
							</a>
						</li>
						<li class="level1 nav-2-5">
							<a href="http://demo.7uptheme.com/milano/women/socks.html">
							<span>Socks</span>
							</a>
						</li>
						<li class="level1 nav-2-6 last">
							<a href="http://demo.7uptheme.com/milano/women/tall-shop.html">
							<span>Tall shop</span>
							</a>
						</li>
					</ul>
				</li>
				<li onmouseout="toggleMenu(this,0)" onmouseover="toggleMenu(this,1)" class="level0 nav-3 parent">
					<a href="http://demo.7uptheme.com/milano/fashion.html">
					<span>Shoes &amp; Bags</span>
					</a>
					<ul class="level0">
						<li class="level1 nav-3-1 first">
							<a href="http://demo.7uptheme.com/milano/fashion/eyewear.html">
							<span>Eyewear</span>
							</a>
						</li>
						<li class="level1 nav-3-2">
							<a href="http://demo.7uptheme.com/milano/fashion/outerwear.html">
							<span>outerwear</span>
							</a>
						</li>
						<li class="level1 nav-3-3">
							<a href="http://demo.7uptheme.com/milano/fashion/shoes.html">
							<span>Shoes</span>
							</a>
						</li>
						<li class="level1 nav-3-4 last">
							<a href="http://demo.7uptheme.com/milano/fashion/bags-luggage.html">
							<span>Bags &amp; Luggage</span>
							</a>
						</li>
					</ul>
				</li>
				<li onmouseout="toggleMenu(this,0)" onmouseover="toggleMenu(this,1)" class="level0 nav-4 parent">
					<a href="http://demo.7uptheme.com/milano/accessries.html">
					<span>Accessries</span>
					</a>
					<ul class="level0">
						<li class="level1 nav-4-1 first">
							<a href="http://demo.7uptheme.com/milano/accessries/books-music.html">
							<span>Books &amp; Music</span>
							</a>
						</li>
						<li class="level1 nav-4-2">
							<a href="http://demo.7uptheme.com/milano/accessries/shorts.html">
							<span>Shorts</span>
							</a>
						</li>
						<li class="level1 nav-4-3">
							<a href="http://demo.7uptheme.com/milano/accessries/electronics.html">
							<span>Electronics</span>
							</a>
						</li>
						<li class="level1 nav-4-4 last">
							<a href="http://demo.7uptheme.com/milano/accessries/decorative-accents.html">
							<span>Decorative Accents</span>
							</a>
						</li>
					</ul>
				</li>
				<li onmouseout="toggleMenu(this,0)" onmouseover="toggleMenu(this,1)" class="level0 nav-5 parent">
					<a href="http://demo.7uptheme.com/milano/deals.html">
					<span>Deals</span>
					</a>
					<ul class="level0">
						<li class="level1 nav-5-1 first">
							<a href="http://demo.7uptheme.com/milano/deals/women.html">
							<span>Women</span>
							</a>
						</li>
						<li class="level1 nav-5-2">
							<a href="http://demo.7uptheme.com/milano/deals/men.html">
							<span>Men</span>
							</a>
						</li>
						<li class="level1 nav-5-3">
							<a href="http://demo.7uptheme.com/milano/deals/accessories.html">
							<span>Accessories</span>
							</a>
						</li>
						<li class="level1 nav-5-4 last">
							<a href="http://demo.7uptheme.com/milano/deals/home-decor.html">
							<span>Home &amp; Decor</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="level0 nav-6">
					<a href="http://demo.7uptheme.com/milano/blog.html">
					<span>Blog</span>
					</a>
				</li>
			</ul>
		</div>
	</body>
</html>