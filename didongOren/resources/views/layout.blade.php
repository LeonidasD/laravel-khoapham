<!DOCTYPE html>
<html xml:lang="en" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{{URL::asset('style/css/style-main07.css')}}"/>

		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" media="all" />
		@yield('script')
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