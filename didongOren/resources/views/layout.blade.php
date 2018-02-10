<!DOCTYPE html>
<html xml:lang="en" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{{URL::asset('style/css/style-main07.css')}}"/>

		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" media="all" />
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
		<title>@yield('title')</title>
	</head>
	<body class=@yield('class')>
		<!--begin header-->
		@include('header')
		<!--end header-->
		<!--begin content-->
        @yield('content')
		<!--end content-->
		<!--begin footer-->
		@include('footer')
		<!--end footer-->
	</body>
</html>