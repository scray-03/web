<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Title-->
    <title>News - სიახლეები</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/img/favicon.jpg" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" type="text/css" media="all" />
    <!-- end head -->
</head>

<body class="mobile_nav_class jl-has-sidebar">
    <div class="options_layout_wrapper jl_radius jl_none_box_styles jl_border_radiuss">
        <div class="options_layout_container full_layout_enable_front">
            <!-- Start header -->
            <header
                class="header-wraper jl_header_magazine_style two_header_top_style header_layout_style3_custom jl_cusdate_head">
                <div class="header_top_bar_wrapper ">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div style="text-align: center; color: white;"> <span class="jl_current_title">ახლანდელი დრო:</span> {{ Date('Y-m-d') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Main menu -->
                <div class="jl_blank_nav"></div>
                <div id="menu_wrapper" class="menu_wrapper jl_menu_sticky jl_stick ">
                    <div class="container">
                        <div class="row">
                            <div class="main_menu col-md-12">
                                <div class="logo_small_wrapper_table">
                                    <div class="logo_small_wrapper">
                                        <!-- begin logo -->
                                        <a class="logo_link" href="{{ route('index') }}">
                                            <img src="{{ asset('assets/img/logo.png') }}" alt="Just another WordPress site" />
                                        </a>
                                        <!-- end logo -->
                                    </div>
                                </div>
                                <!-- main menu -->
                                <div class="menu-primary-container navigation_wrapper">
                                    <ul id="mainmenu" class="jl_main_menu">           
                                        @foreach ($providerCategory as $category)
                                            <li class="menu-item"><a href="{{ route('category' , $category->id) }}">{{ $category->name }}<span class="border-menu"></span></a></li> 
                                        @endforeach                             
                                    </ul>
                                </div>
                                <!-- end main menu -->
                                <div class="search_header_menu">
                                    <div class="search_header_wrapper search_form_menu_personal_click"><i
                                            class="fa fa-search"></i>
                                    </div>                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="search_form_menu_personal">
               <div class="menu_mobile_large_close"><span class="jl_close_wapper search_form_menu_personal_click"><span class="jl_close_1"></span><span class="jl_close_2"></span></span>
               </div>
               <form method="get" class="searchform_theme" action="{{ route('search') }}">
                  <input type="text" placeholder="Search..." value="" name="search" class="search_btn" />
                    <button type="submit" class="button"><i class="fa fa-search"></i>
                  </button>
               </form>
            </div>
            @yield('content')
            <!-- Start footer -->
            <footer id="footer-container" class=" enable_footer_columns_dark">
                <div class="footer-columns">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4"> <span class="jl_none_space"></span>
                                <div id="disto_about_us_widget-3" class="widget jellywp_about_us_widget">
                                    <div class="widget_jl_wrapper about_widget_content"> <span
                                            class="jl_none_space"></span>
                                        <div class="widget-title">
                                            <h2>About us</h2>
                                        </div>
                                        <div class="jellywp_about_us_widget_wrapper">
                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut
                                                imperdiet eu, iaculis a sem imperdiet ut imperdiet.</p>
                                        </div> <span class="jl_none_space"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"> <span class="jl_none_space"></span>
                                <div id="disto_recent_post_widget-3" class="widget post_list_widget">
                                    <div class="widget_jl_wrapper"> <span class="jl_none_space"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="categories-4" class="widget widget_categories">
                                    <div class="widget-title">
                                        <h2>Categories</h2>
                                    </div>
                                    <ul>
                                        @foreach ($providerCategory as $category)
                                        <li class="cat-item cat-item-2"><a href="{{ route('category' , $category->id) }}"
                                            title="Sample category description goes here">{{ $category->name }}</a>
                                        </li>  
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom enable_footer_copyright_dark">
                    <div class="container">
                        <div class="row bottom_footer_menu_text">
                            <div style="content-align: center;">© Copyright {{ date('Y') }}. All Rights Reserved </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer -->
        </div>
    </div>
    <div id="go-top"><a href="#go-top"><i class="fa fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/fluidvids.js') }}"></script>
    <script src="{{ asset('assets/js/infinitescroll.js') }}"></script>
    <script src="{{ asset('assets/js/justified.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/theia-sticky-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="w6s9pUek"></script>
</body>

</html>
