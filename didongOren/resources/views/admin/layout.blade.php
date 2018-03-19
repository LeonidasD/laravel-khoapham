<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Droopy I Fast build Admin dashboard for any platform</title>
	<meta name="description" content="Droopy is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Droopy Admin, Droopyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Data table CSS -->
	<link href="{{URL::asset('admin/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
	
	<!-- Toast CSS -->
	<link href="{{URL::asset('admin/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="{{URL::asset('admin/dist/css/style-dark.css')}}" rel="stylesheet" type="text/css">
	
	{{--  Bootstrap  --}}
	<link href="{{URL::asset('admin/vendors/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper  theme-1-active pimary-color-green">
		<!-- Top Menu Items -->
			@include('admin.menu.topmenu')
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
			@include('admin.menu.leftsidebarmenu')
		<!-- /Left Sidebar Menu -->
		
		<!-- Right Sidebar Menu -->
			@include('admin.menu.rightsidebarmenu')
		<!-- /Right Sidebar Menu -->
		
		
		
		<!-- Right Sidebar Backdrop -->
			@include('admin.menu.rightsidebarbackdrop')
		<!-- /Right Sidebar Backdrop -->

        <!-- Main Content -->
			@yield('content')
		<!-- /Main Content -->

		

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="{{URL::asset('admin/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
	<!-- Counter Animation JavaScript -->
	<script src="{{URL::asset('admin/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
	<script src="{{URL::asset('admin/vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>
	
	<!-- Data table JavaScript -->
	<script src="{{URL::asset('admin/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{URL::asset('admin/dist/js/productorders-data.js')}}"></script>
	
	<!-- Owl JavaScript -->
	<script src="{{URL::asset('admin/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
	
	<!-- Switchery JavaScript -->
	<script src="{{URL::asset('admin/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="{{URL::asset('admin/dist/js/jquery.slimscroll.js')}}"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="{{URL::asset('admin/dist/js/dropdown-bootstrap-extended.js')}}"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="{{URL::asset('admin/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
	
	<!-- EChartJS JavaScript -->
	<script src="{{URL::asset('admin/vendors/bower_components/echarts/dist/echarts-en.min.js')}}"></script>
	<script src="{{URL::asset('admin/vendors/echarts-liquidfill.min.js')}}"></script>
	
	<!-- Toast JavaScript -->
	<script src="{{URL::asset('admin/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
	
	<!-- Init JavaScript -->
	<script src="{{URL::asset('admin/dist/js/init.js')}}"></script>
	<script src="{{URL::asset('admin/dist/js/dashboard3-data.js')}}"></script>


	@yield('modal')
	<div class="modal" id="deleteAsk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
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
</body>
</html>
