<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->
<head><meta charset="shift_jis">

	<!-- start: Meta -->
	
	<title>Mudos Admin</title>
	<meta name="description" content="Web Developer">
	<meta name="author" content="Balogun Joseph Jesutofunmi">
	<meta name="keyword" content="Web Admin page Call 8139525526">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<script src="{{asset('backend/js/Chart.min.js')}}"></script>
	<script src="{{asset('backend/js/utils.js')}}"></script>
	{{-- <script src="{{asset('backend/js/jquery.js')}}"></script> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{URL::to('backend/img/logo.png')}}">
	<!-- end: Favicon -->




</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
            <a class="brand" href="{{URL::to('/dashboard')}}"><span>Mudos</span> Pharmacy</a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">


						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								{{Session::get('admin_name')}}<i class="halflings-icon white user"></i>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                            <li><a href="{{URL::to('/logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>
	<!-- start: Header -->

		<div class="container-fluid-full" style="min-height: 500px">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">

					<ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a href="{{URL::to('/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet">
                         Dashboard</span></a></li>




                             <li><a href="{{URL::to('/all-category')}}"><i class="icon-tasks"></i><span class="hidden-tablet">
                                All Category</span></a></li>


                             <li><a href="{{URL::to('/add-category')}}"><i class="icon-tasks"></i><span class="hidden-tablet">
                            Add Category</span></a></li>

						<li><a href="{{URL::to('/all-manufacture')}}"><i class="icon-eye-open"></i><span class="hidden-tablet">
                             All Manufacture</span></a></li>
						<li><a href="{{URL::to('/add-manufacture')}}"><i class="icon-dashboard"></i><span class="hidden-tablet">
                             Add Manufacture</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Products </span><span class="label label-important"> new</span></a>
							<ul>
								<li><a class="submenu" href="{{URL::to('/add-product')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Product</span></a></li>
								<li><a class="submenu" href="{{URL::to('/all-product')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Products</span></a></li>

							</ul>
                        </li>


                        <li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Slider</span><span class="label label-important"></span></a>
							<ul>
								<li><a class="submenu" href="{{URL::to('/add-slider')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Slider</span></a></li>
								<li><a class="submenu" href="{{URL::to('/all-slider')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Slider</span></a></li>

							</ul>
						</li>

                        <li><a href="{{URL::to('/manage-order')}}"><i class="icon-list-alt"></i><span class="hidden-tablet">Manage Order</span></a></li>
						<li><a href="{{URL::to('/prescription-list')}}"><i class="icon-list-alt"></i><span class="hidden-tablet">Prescriptions</span></a></li>
                    </ul>
				</div>
			</div>
			<!-- end: Main Menu -->


			<!-- start: Content -->
			<div id="content" class="span10">


			@yield('admin_content')

	       </div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->


	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2020 <a href="https://wa.me/+2348139525526" alt="Bootstrap Themes">JGET</a></span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://www.digi-realm.com.ng/" alt="Bootstrap Admin Templates">Digi-Realm</a></span>
		</p>

	</footer>

	<!-- start: JavaScript-->

	<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
	{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
	{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
	<script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>
	<script src="{{asset('backend/js/modernizr.js')}}"></script>
	<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>
	<script src='{{asset('backend/js/fullcalendar.min.js')}}'></script>
	<script src='{{asset('backend/js/jquery.dataTables.min.js')}}'></script>
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
	<script src="{{asset('backend/js/excanvas.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.noty.js')}}"></script>
	<script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.iphone.toggle.js')}}"></script>
	<script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.gritter.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.imagesloaded.js')}}"></script>
	<script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery.knob.modified.js')}}"></script>
	<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('backend/js/counter.js')}}"></script>
	<script src="{{asset('backend/js/retina.js')}}"></script>
	<script src="{{asset('backend/js/custom.js')}}"></script>
	<!-- end: JavaScript-->
	<script>
		$(document).ready(function(){
			$("#products-list").DataTable()
		})
	</script>

</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
