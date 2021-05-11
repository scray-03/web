@extends('layouts.app')
@section('content')
<div class="mobile_menu_overlay"></div><!-- begin content -->
<section id="content_main" class="clearfix jl_spost">
    <div class="container">
        <div class="row main_content">
            <div class="col-md-8  loop-large-post" id="content">
                <div class="widget_container content_page">
                    <!-- start post -->
                    <div class="post-2808 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-gaming tag-morning tag-relaxing"
                        id="post-2808">
                        <div class="single_section_content box blog_large_post_style">
                            <div class="jl_single_style2">
                                <div
                                    class="single_post_entry_content single_bellow_left_align jl_top_single_title jl_top_title_feature">
                                    <h1 class="single_post_title_main">
                                       {{ $post->title }}</h1>
                                    <span class="single-post-meta-wrapper"><span class="post-author"><span>
                                        <span class="post-date updated"><i class="fa fa-clock-o"></i>{{ $post->upload_date }}&nbsp;</span>
                                        <i class="fa fa-eye"></i>&nbsp;{{ $post->visitors }}</span>
                                </div>
                                <div class="single_content_header jl_single_feature_below">
                                    <div class="image-post-thumb jlsingle-title-above">
                                        <img width="1000" height="668"
                                            src="{{ asset('blog/storage/app/public/'.$post->image) }}"
                                            class="attachment-disto_justify_feature size-disto_justify_feature wp-post-image"
                                            alt="" /> </div>
                                </div>
                            </div>
                            <div class="post_content">
                                <p>{!! $post->desc_ka !!}<span id="more-2808"></span>
                                </p>
                            </div>
                            <div class="single_post_share_wrapper">
                                <div class="single_post_share_icons social_popup_close"><i class="fa fa-close"></i>
                                </div>
                                <ul class="single_post_share_icon_post">
                                    <li class="single_post_share_facebook"><a href="" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li class="single_post_share_twitter"><a href="" target="_blank"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="single_post_share_pinterest"><a href="" target="_blank"><i
                                                class="fa fa-pinterest"></i></a></li>
                                    <li class="single_post_share_linkedin"><a href="" target="_blank"><i
                                                class="fa fa-linkedin"></i></a></li>
                                    <li class="single_post_share_ftumblr"><a href="" target="_blank"><i
                                                class="fa fa-tumblr"></i></a></li>
                                </ul>
                            </div> 
                            <div class="fb-comments" data-href="http://localhost/levaniweb/post/{{ $post->id }}" data-width="750" data-numposts="5"></div>

                        </div>
                    </div>
                    <!-- end post -->
                    <div class="brack_space"></div>
                </div>
            </div>

            <div class="col-md-4" id="sidebar">
                <div id="panel-4212-2-1-1" class="so-panel widget widget_disto_category_image_widget_register jellywp_cat_image" data-index="6">
                    <div class="wrapper_category_image">

                    </div>
                </div> <span class="jl_none_space"></span>
                <div id="panel-4212-2-1-2" class="so-panel widget widget_disto_recent_post_widget post_list_widget"
                    data-index="7">
                    <div class="widget_jl_wrapper"> <span class="jl_none_space"></span>
                        <h3 class="widget-title">Recent Posts</h3>
                        <div>
                            <ul class="feature-post-list recent-post-widget">
                                @foreach ($side_news as $side)                                    
                                <li>
                                    <a href="{{ route('post' , $side->id) }}" class="jl_small_format feature-image-link image_post featured-thumbnail"
                                        title="Sitting right here waiting for you come to me">
                                        <img width="120" height="120"
                                            src="{{ asset('blog/storage/app/public/'.$side->image) }}"
                                            class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                            alt="" />
                                        <div class="background_over_image"></div>
                                    </a>
                                    <div class="item-details">
                                        <h3 class="feature-post-title"><a href="{{ route('post' , $side->id) }}">
                                                {{ $side->title }}</a>
                                        </h3>
                                        <span class="post-meta meta-main-img auto_image_with_date"> <span
                                                class="post-date"><i class="fa fa-clock-o"></i> {{ $side->upload_date }}</span></span>
                                    </div>
                                </li>    
                                @endforeach                                      
                            </ul>
                        </div> <span class="jl_none_space"></span>
                    </div>
                </div> <span class="jl_none_space"></span>                
            </div>
        </div>
    </div>
</section>
@endsection
