<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from laravel.spruko.com/dashfox/ltr/index by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 May 2021 08:38:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Dashfox - Laravel Admin & Dashboard Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, laravel, php framework, php laravel, laravel framework, php mvc, laravel admin panel, laravel admin panel, laravel template, laravel bootstrap, blade laravel, best php framework"/>


        <!-- Title -->
		<title> AdminPanel </title>
        @stack('css')
        <!-- Favicon -->
		<link rel="icon" href="{{ asset('assets/adminassets/img/brand/favicon.png') }}" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="{{ asset('assets/adminassets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />

		<!-- Icons css -->
		<link href="{{ asset('assets/adminassets/plugins/icons/icons.css') }}" rel="stylesheet">

		<!--  Right-sidemenu css -->
		<link href="{{ asset('assets/adminassets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

		<!--  Left-Sidebar css -->
		<link rel="stylesheet" href="{{ asset('assets/adminassets/css/sidemenu.css') }}">

		<!--- Dashboard-2 css-->
		<link href="{{ asset('assets/adminassets/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/adminassets/css/style-dark.css') }}" rel="stylesheet">

		<!--- Color css-->
		<link id="theme" href="{{ asset('assets/adminassets/css/colors/color.css') }}" rel="stylesheet">

		
		<!--  Owl-carousel css-->
		<link href="{{ asset('assets/adminassets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

		<!-- Maps css -->
		<link href="{{ asset('assets/adminassets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

		<!-- Jvectormap css -->
        <link href="{{ asset('assets/adminassets/plugins/jqvmap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />


		<!---Skinmodes css-->
		<link href="{{ asset('assets/adminassets/css/skin-modes.css') }}" rel="stylesheet" />

		<!--- Animations css-->
		<link href="{{ asset('assets/adminassets/css/animate.css') }}" rel="stylesheet">

		<!---Switcher css-->
		<link href="{{ asset('assets/adminassets/switcher/css/switcher.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/adminassets/switcher/demo.css') }}" rel="stylesheet">

    </head>

    <body  class="main-body light-theme app sidebar-mini active leftmenu-color">
        

        <!-- Loader -->
		<div id="global-loader">
			<img src="{{ asset('assets/adminassets/img/loader-2.svg') }}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

        <!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href="index.html">
					<img src="{{ asset('assets/adminassets/img/brand/logo.png') }}" class="main-logo logo-color1" alt="logo">
					<img src="{{ asset('assets/adminassets/img/brand/logo2.png') }}" class="main-logo logo-color2" alt="logo">
					<img src="{{ asset('assets/adminassets/img/brand/logo3.png') }}" class="main-logo logo-color3" alt="logo">
					<img src="{{ asset('assets/adminassets/img/brand/logo4.png') }}" class="main-logo logo-color4" alt="logo">
					<img src="{{ asset('assets/adminassets/img/brand/logo5.png') }}" class="main-logo logo-color5" alt="logo">
					<img src="{{ asset('assets/adminassets/img/brand/logo6.png') }}" class="main-logo logo-color6" alt="logo">
				</a>
				<a class="desktop-logo logo-dark active" href="index.html"><img src="{{ asset('') }}assets/adminassets/img/brand/logo-white.png" class="main-logo dark-theme" alt="logo"></a>
				<div class="app-sidebar__toggle" data-toggle="sidebar">
					<a class="open-toggle" href="#"><i class="header-icon fe fe-chevron-left"></i></a>
					<a class="close-toggle" href="#"><i class="header-icon fe fe-chevron-right"></i></a>
				</div>
			</div>
			<div class="main-sidemenu sidebar-scroll">
				<ul class="side-menu">
					<li class="slide">
						<a class="side-menu__item" href="index.html"><div class="side-angle1"></div><div class="side-angle2"></div><div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg>
						<span class="side-menu__label">მთავარი</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><div class="side-angle1"></div><div class="side-angle2"></div><div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17 7H7V4H5v16h14V4h-2z" opacity=".3"/><path d="M19 2h-4.18C14.4.84 13.3 0 12 0S9.6.84 9.18 2H5c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm7 18H5V4h2v3h10V4h2v16z"/></svg>
						<span class="side-menu__label">სიახლეები</span><i class="angle fe fe-chevron-right"></i></a>
						<ul class="slide-menu">
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="{{ route('admin.news.index') }}"><span class="sub-side-menu__label">სიახლეების სია</span><i class="sub-angle fe fe-chevron"></i></a>
							</li>
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="{{ route('admin.news.create') }}"><span class="sub-side-menu__label">სიახლის დამატება</span><i class="sub-angle fe fe-chevron"></i></a>
							</li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><div class="side-angle1"></div><div class="side-angle2"></div><div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17 7H7V4H5v16h14V4h-2z" opacity=".3"/><path d="M19 2h-4.18C14.4.84 13.3 0 12 0S9.6.84 9.18 2H5c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm7 18H5V4h2v3h10V4h2v16z"/></svg>
						<span class="side-menu__label">კატეგორიები</span><i class="angle fe fe-chevron-right"></i></a>
						<ul class="slide-menu">
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">კატეგორიების სია</span><i class="sub-angle fe fe-chevron"></i></a>
							</li>
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">კატეგორიის დამატება</span><i class="sub-angle fe fe-chevron"></i></a>
							</li>
						</ul>
					</li>
				</ul>
				<div class="app-sidefooter">
					<a class="side-menu__item" href="#"><svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/></g></svg> <span class="side-menu__label">Logout</span></a>
				</div>
			</div>
		</aside>
		<!-- main-sidebar -->
		<!-- main-content -->
		<div class="main-content app-content">

        <!-- main-header -->
			<div class="main-header sticky side-header nav nav-item">
				<div class="container-fluid">
					<div class="main-header-left">
						<div class="app-sidebar__toggle d-md-none" data-toggle="sidebar">
							<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
							<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
						</div>
					</div>
					<div class="main-header-right">
						<div class="nav nav-item  navbar-nav-right ml-auto">
							<div class="nav-link" id="bs-example-navbar-collapse-1">
								<form class="navbar-form" role="search">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search">
										<span class="input-group-btn">
											<button type="reset" class="btn btn-default">
												<i class="fas fa-times"></i>
											</button>
											<button type="submit" class="btn btn-default nav-link resp-btn">
												<i class="fe fe-search"></i>
											</button>
										</span>
									</div>
								</form>
							</div>
							<div class="main-header-search ml-0 d-sm-none d-none d-lg-block">
								<input class="form-control" id="search-input"  placeholder="Search for anything..." type="text"> <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /main-header -->
            @yield('content')

            <!-- Footer opened -->
		<div class="main-footer ht-40">
			<div class="container-fluid pd-t-0-f ht-100p">
				<span>Copyright © 2021 <a href="#">Dashfox</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
			</div>
		</div>
		<!-- Footer closed -->
        <!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>
		<!-- Internal Data tables -->


		<!--Internal  Datatable js -->

		<!-- Jquery js-->
		<script src="{{ asset('assets/adminassets/plugins/jquery/jquery.min.js') }}"></script>

		<!-- Bootstrap4 js-->
		<script src="{{ asset('assets/adminassets/plugins/bootstrap/popper.min.js') }}"></script>
		<script src="{{ asset('assets/adminassets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!-- Ionicons js-->
		<script src="{{ asset('assets/adminassets/plugins/ionicons/ionicons.js') }}"></script>

		<!-- Moment js -->
		<script src="{{ asset('assets/adminassets/plugins/moment/moment.js') }}"></script>	

		<!-- P-scroll js -->
		<script src="{{ asset('assets/adminassets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
		<script src="{{ asset('assets/adminassets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

		<!-- Sidebar js -->
		<script src="{{ asset('assets/adminassets/plugins/side-menu/sidemenu.js') }}"></script>

		<!-- Rating js-->
		<script src="{{ asset('assets/adminassets/plugins/rating/jquery.rating-stars.js') }}"></script>
		<script src="{{ asset('assets/adminassets/plugins/rating/jquery.barrating.js') }}"></script>		

		<!-- Suggestion js-->
		<script src="{{ asset('assets/adminassets/plugins/suggestion/jquery.input-dropdown.js') }}"></script>
		<script src="{{ asset('assets/adminassets/js/search.js') }}"></script>

		<!-- Right-sidebar js -->
		<script src="{{ asset('assets/adminassets/plugins/sidebar/sidebar.js') }}"></script>
		<script src="{{ asset('assets/adminassets/plugins/sidebar/sidebar-custom.js') }}"></script>

		<!-- Sticky js-->
		<script src="{{ asset('assets/adminassets/js/sticky.js') }}"></script>

		<!-- eva-icons js -->
		<script src="{{ asset('assets/adminassets/plugins/eva-icons/eva-icons.min.js') }}"></script>

		
		<!--Internal  Chart.bundle js -->
		<script src="{{ asset('assets/adminassets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

		<!--Internal Sparkline js -->
		<script src="{{ asset('assets/adminassets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

		<!-- Moment js -->
		<script src="{{ asset('assets/adminassets/plugins/raphael/raphael.min.js') }}"></script>

		<!--Internal  Flot js-->
		<script src="{{ asset('assets/adminassets/plugins/jquery.flot/jquery.flot.js') }}"></script>
		<script src="{{ asset('assets/adminassets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
		<script src="{{ asset('assets/adminassets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
		<script src="{{ asset('assets/adminassets/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
		<script src="{{ asset('assets/adminassets/js/dashboard.sampledata.js') }}"></script>
		<script src="{{ asset('assets/adminassets/js/chart.flot.sampledata.js') }}"></script>

		<!-- Chart-circle js -->
		<script src="{{ asset('assets/adminassets/plugins/circle-progress/circle-progress.min.js') }}"></script>
		<script src="{{ asset('assets/adminassets/plugins/chart-circle/chart-circle.js') }}"></script>

		<!-- ECharts js-->
		<script src="{{ asset('assets/adminassets/plugins/echart/echart.js') }}"></script>

		<!--Internal  index js -->
		<script src="{{ asset('assets/adminassets/plugins/apexcharts/apexcharts.js') }}"></script>
		<script src="{{ asset('assets/adminassets/js/index.js') }}"></script>


		<!-- custom js -->
		<script src="{{ asset('assets/adminassets/js/custom.js') }}"></script>

		<!-- Switcher js -->
		<script src="{{ asset('assets/adminassets/switcher/js/switcher.js') }}"></script>
		
    </body>
</html>