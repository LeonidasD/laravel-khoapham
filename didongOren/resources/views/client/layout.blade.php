<!DOCTYPE html>
<html xml:lang="en" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{{URL::asset('style/css/style-main07.css')}}"/>

		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" media="all" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.3.2.min.js"></script>
		@yield('script')
		<title>@yield('title')</title>
	</head>
	@yield('style')
	<body class=@yield('class')>
		<!--begin header-->
		@include('client.header')
		<!--end header-->
		<!--begin content-->
        @yield('content')
		<!--end content-->
		<!--begin footer-->
		@include('client.footer')
		<!--end footer-->
		@yield('cart')
	</body>
</html>