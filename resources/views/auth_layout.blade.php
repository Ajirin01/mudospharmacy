<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('fontend/css/bootstrap.min.css')}}">
    <link href="{{asset('fontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{asset('fontend/css/main-blue.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/blue.css')}}">


    <link rel="stylesheet" href="{{asset('fontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/rateit.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


    <link href="{{asset('fontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('fontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('fontend/css/responsive.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/slick/slick.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('fontend/slick/slick-theme.css')}}">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{URL::to('fontend/images/home/mudos_yellow_mudos_logo_yellow.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('fontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('fontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('fontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('fontend/images/ico/apple-touch-icon-57-precomposed.png')}}">

<!--========== Loading resouces for auth forms ==================================================-->   
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('fontend/auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}"> --}}
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/auth/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/auth/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/auth/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/auth/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/auth/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/auth/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/auth/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/auth/css/main.css')}}">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{URL::to('fontend/images/home/logo.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('fontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('fontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('fontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('fontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,600italic' rel='stylesheet' type='text/css'>
<!-- =Include bootstrap CSS File=-->
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />--}}

{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}


{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
<style type="text/css">
    .panel-title {
    display: inline;
    font-weight: bold;
    }
    .display-table {
        display: table;
    }
    .display-tr {
        display: table-row;
    }
    .display-td {
        display: table-cell;
        vertical-align: middle;
        width: 61%;
    }

.paymentWrap {
	padding: 50px;
}

.paymentWrap .paymentBtnGroup {
	max-width: 800px;
	margin: auto;
}

.paymentWrap .paymentBtnGroup .paymentMethod {
	padding: 40px;
	box-shadow: none;
	position: relative;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active {
	outline: none !important;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active .method {
	border-color: #4cd264;
	outline: none !important;
	box-shadow: 0px 3px 22px 0px #7b7b7b;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method {
	position: absolute;
	right: 3px;
	top: 3px;
	bottom: 3px;
	left: 3px;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	border: 2px solid transparent;
	transition: all 0.5s;
}

</style>
</head><!--/head-->

<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5e974cb435bcbb0c9ab172b9/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>


<body class="cnt-home">
	<!-- ============================================== HEADER ============================================== -->
	<header class="header-style-1"> 
	  
	  <!-- ============================================== TOP MENU ============================================== -->
	  <div class="top-bar animate-dropdown">
		<div class="container">
		  <div class="header-top-inner">
			<div class="cnt-account">
			  <ul class="list-unstyled">
	
				@php
					$customer_id=Session::get('customer_id');
					$shipping_id=Session::get('shipping_id');
					$customer_id = Session::get('customer_id');
				@endphp
				<li class="header_cart"><a href="#">My Cart</a></li>
				@if ($customer_id  != NULL && $shipping_id == NULL)
				  <li class="check"><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i>Checkout</a></li>
				@endif
				@if ($customer_id  != NULL && $shipping_id != NULL)
				  <li class="check"><a href="{{URL::to('/payment')}}">Checkout</a></li>
				@endif
				{{-- <li class="check"><a href="{{URL::to('/show-cart')}}">Checkout</a></li> --}}
				<li class="check"><a href="mailto:pharmacistobinna@mudospharmacy.com"><i class="fa text text-success fa-comment"></i> Consult A pharmacist</a></li>
				@if($customer_id  !=  null)
				<li class="login"><a href="{{URL::to('/customer_logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
	
				@else
				<li class="login"><a href="{{URL::to('/login-check')}}"><i class="fa fa-lock"></i> Login</a></li>
	
				@endif
				{{-- <li class="login"><a href="#">Login</a></li> --}}
			  </ul>
			</div>
	
			<!-- /.cnt-cart -->
			<div class="clearfix"></div>
		  </div>
		  <!-- /.header-top-inner --> 
		</div>
		<!-- /.container --> 
	  </div>
	  <!-- /.header-top --> 
	  <!-- ============================================== TOP MENU : END ============================================== -->
	  <div class="main-header">
		<div class="container">
		  <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
			  <!-- ============================================================= LOGO ============================================================= -->
			  <div class="logo"> <a href="/"> <img src="{{asset('fontend/images/home/mudos_logo_yellow.png')}}" alt="logo"> </a> </div>
			  <!-- /.logo --> 
			  <!-- ============================================================= LOGO : END ============================================================= --> </div>
			<!-- /.logo-holder -->
			
			<div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder"> 
			  <!-- /.contact-row --> 
			  <!-- ============================================================= SEARCH AREA ============================================================= -->
			  <div class="search-area">
				<form action="{{URL::to('/search')}}" method="POST" role="search">
				  {{ csrf_field() }}
				  <div class="control-group">
					<ul class="categories-filter animate-dropdown">
					  <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
						@php
							$all_published_category=DB::table('tbl_category')
														  ->where('publication_status', 1)
																		->get();
						@endphp
						<ul class="dropdown-menu" role="menu" >
						  @foreach ($all_published_category as $v_category)
					  <li class="dropdown menu-item"> <a href="{{URL::to('/product_by_category/'.$v_category->category_id)}}">{{$v_category->category_name}}</a>
					@endforeach
						</ul>
					  </li>
					</ul>
					<input class="search-field" placeholder="Search here..." name="q"/>
					<a class="search-button" href="#" ></a> </div>
				</form>
			  </div>
			  <!-- /.search-area --> 
			  <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
			<!-- /.top-search-holder -->
			
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row"> 
			  <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
			  
			  <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
				<div class="items-cart-inner">
				  <br>
				  <marquee behavior="" direction="" style="font-size: 1.5rem"> Mudos-Pharmacy Online drug store. Pay with cards and pay on delivery </marquee>
				  </div>
				</div>
				</a>
				<!-- /.dropdown-menu--> 
			  </div>
			  <!-- /.dropdown-cart --> 
			  
			  <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
			<!-- /.top-cart-row --> 
		  </div>
		  <!-- /.row --> 
		  
		</div>
		<!-- /.container --> 
		
	  </div>
	  <!-- /.main-header --> 
	  
	  <!-- ============================================== NAVBAR ============================================== -->
	  <div class="header-nav animate-dropdown">
		<div class="container">
		  <div class="yamm navbar navbar-default" role="navigation">
			<div class="navbar-header">
		   <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
		   <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			<div class="nav-bg-class">
			  <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
				<div class="nav-outer">
				  <ul class="nav navbar-nav">
					<li class="active dropdown"> <a href="/">Home</a> </li>
					<li class="dropdown mega-menu"> 
					<a href="{{URL::to('/contactUs')}}"   class="dropdown-toggle" data-toggle="dropdown">Contact</a>
					</li>
					<li class="hidden-sm"> <a href="{{URL::to('/aboutUs')}}">About Us</a> </li>
					<li class="navbar-right special-menu"> <a href="#"></a> </li>
				  </ul>
				  <!-- /.navbar-nav -->
				  <div class="clearfix"></div>
				</div>
				<!-- /.nav-outer --> 
			  </div>
			  <!-- /.navbar-collapse --> 
			  
			</div>
			<!-- /.nav-bg-class --> 
		  </div>
		  <!-- /.navbar-default --> 
		</div>
		<!-- /.container-class --> 
		
	  </div>
	  <!-- /.header-nav --> 
	  <!-- ============================================== NAVBAR : END ============================================== --> 
	  
	</header>
	
	<!-- ============================================== HEADER : END ============================================== -->
	<div class="body-content outer-top-vs" id="top-banner-and-menu">
	  <div class="container">
		<div class="row"> 
		  <!-- ============================================== CONTENT ============================================== -->
		  <div class=""> 
			<!-- ========================================== SECTION – HERO ========================================= -->
			@yield('content')
			<!-- we put slider here -->
	
			<!-- ============================================== INFO BOXES ============================================== -->
			<div class="row our-features-box">
			  <div class="container">
			   <ul>
				 <li>
				   <div class="feature-box">
					 <div class="icon-truck"></div>
					 <div class="content-blocks">We ship nationwide</div>
				   </div>
				 </li>
				 <li>
				   <div class="feature-box">
					 <div class="icon-support"></div>
					 <div class="content-blocks">call 
					   +1 800 789 0000</div>
				   </div>
				 </li>
				 <li>
				   <div class="feature-box">
					 <div class="icon-money"></div>
					 <div class="content-blocks">Can pay on delivery </div>
				   </div>
				 </li>
				 <li>
				   <div class="feature-box">
					 <div class="icon-return"></div>
					 <div class="content">24 hrs delivery within Niger State</div>
				   </div>
				 </li>
				 
			   </ul>
			 </div>
				 <!-- /.info-boxes --> 
				 <!-- ============================================== INFO BOXES : END ============================================== --> 
	
		  </div>
		  <!-- /.homebanner-holder --> 
		  <!-- ============================================== CONTENT : END ============================================== --> 
		</div>
		<!-- /.row --> 
	  </div>
	  <!-- /.container --> 
	</div>
	<!-- /#top-banner-and-menu --> 
	
	<!-- ============================================================= FOOTER ============================================================= -->
	<footer id="footer" class="footer color-bg">
	  <div class="footer-bottom">
		<div class="container">
		  <div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="address-block">
			
			  <!-- /.module-heading -->
			  
			  <div class="module-body">
				<ul class="toggle-footer" style="">
				  <li class="media">
					<div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
					<div class="media-body">
					  <p style="color: white">Tunga, Minna Niger State</p>
					</div>
				  </li>
				  <li class="media">
					<div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
					<div class="media-body">
					  <p style="color: white">+2348069153379 </p>
					</div>
				  </li>
				  <li class="media">
					<div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
					<div class="media-body"> <span><a href="#">info@mudospharmacy.com</a></span> </div>
				  </li>
				</ul>
			  </div>
			  </div>
			  <!-- /.module-body --> 
			</div>
			<!-- /.col -->
			
			<div class="col-xs-12 col-sm-6 col-md-3">
			  <div class="module-heading">
				<h4 class="module-title">Customer Service</h4>
			  </div>
			  <!-- /.module-heading -->
			  
			  <div class="module-body">
				<ul class='list-unstyled'>
				  <li><a href="https://api.whatsapp.com/send?phone=08069153379&text=Hello I have enquiries">Online Help</a></li>
				  <li class="first"><a href="{{URL::to('/contactUs')}}" title="Contact us">Contact Us</a></li>
				</ul>
			  </div>
			  <!-- /.module-body --> 
			</div>
			<!-- /.col -->
			
			<div class="col-xs-12 col-sm-6 col-md-3">
			  <div class="module-heading">
				<h4 class="module-title">Company Information</h4>
			  </div>
			  <!-- /.module-heading -->
			  
			  <div class="module-body">
				<ul class='list-unstyled'>
				  <li class="first"><a title="Your Account" href="#">About us</a></li>
				  <li><a href="{{URL::to('/store-location')}}">Store Location</a></li>
				</ul>
			  </div>
			  <!-- /.module-body --> 
			</div>
			<!-- /.col -->
			
			<div class="col-xs-12 col-sm-6 col-md-3">
			  <div class="module-heading">
				<h4 class="module-title">Why Choose Us</h4>
			  </div>
			  <!-- /.module-heading -->
			  
			  <div class="module-body">
				<ul class='list-unstyled'>
				  <li><a href=""> Our payment methods are</a></li>
				  <li><a href=""> safe and reliable</a></li>
				  <li><a href=""> Get your orders delivered to</a></li>
				  <li><a href=""> door step within 20-40mins</a></li>
				</ul>
			  </div>
			  <!-- /.module-body --> 
			</div>
		  </div>
		</div>
	  </div>
	  <div class="copyright-bar">
		<div class="container">
		  <p class="pull-left">Copyright © 2020 Mudos-Pharmacy Inc. All rights reserved.</p>
			<p class="pull-right">Powered by <span><a target="_blank" href="https://wa.me/+2348068166776">Digi-Realm City Solutions Ltd.</a></span></p>
		  <div class="col-xs-12 col-sm-4 no-padding">
			<div class="clearfix payment-methods">
			  <ul>
				<li><img src="{{asset('fontend/images/payments/1.png')}}" alt=""></li>
				<li><img src="{{asset('fontend/images/payments/2.png')}}" alt=""></li>
				<li><img src="{{asset('fontend/images/payments/3.png')}}" alt=""></li>
				<li><img src="{{asset('fontend/images/payments/4.png')}}" alt=""></li>
				<li><img src="{{asset('fontend/images/payments/5.png')}}" alt=""></li>
			  </ul>
			</div>
			<!-- /.payment-methods --> 
		  </div>
		</div>
	  </div>
	</footer>
	<!-- -->

 <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
$(function() {

    var $form = $(".require-validation");

    $('form.require-validation').bind('submit', function(e) {
        var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');

        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });

        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }

  });

  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];

            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }

});
</script>
    <script src="{{asset('fontend/js/jquery.js')}}"></script>
	<script src="{{asset('fontend/js/bootstrap.min.js')}}"></script>
	{{-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> --}}
  	<script src="{{asset('fontend/slick/slick.min.js')}}"  type="text/javascript" charset="utf-8"></script>
	<script src="{{asset('fontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('fontend/js/price-range.js')}}"></script>
    <script src="{{asset('fontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('fontend/js/main.js')}}"></script>
    
    <!--===============================================================================================-->
	<script src="{{asset('fontend/auth/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('fontend/auth/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('fontend/auth/vendor/bootstrap/js/popper.js')}}"></script>
        <script src="{{asset('fontend/auth/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('fontend/auth/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('fontend/auth/vendor/daterangepicker/moment.min.js')}}"></script>
        <script src="{{asset('fontend/auth/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('fontend/auth/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('fontend/auth/js/main.js')}}"></script>
	<script type="text/javascript">
          $(".img-slide").slick({
            autoplay: true,
            autoplaySpeed: 7000,
            arrows: false,
            dots: true,
            fade: true,
            speed: 2000,
            inifinite: true,
            cssEase: 'ease-in-out',
            loop: true,
          });
    </script>
</body>
</html>
