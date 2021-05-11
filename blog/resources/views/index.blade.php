@extends('layouts.app')
@section('content')
<br>
<h2 style="padding-top:100px; text-align:center">დღის სიახლეები</h2>
<!-- Home grid section -->
<div class="jl_home_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 jl_mid_main_3col">
                <div class="jl_3col_wrapin">
                    <div class="jelly_homepage_builder jl_nonav_margin homepage_builder_3grid_post jl_fontsize22 jl_cus_grid3 colstyle1">
                        <div class="homepage_builder_title">
                            <br>
                            <span class="jl_hsubt"></span>
                        </div>
                        <div class="jl_wrapper_row">
                            <div class="row">
                                @foreach ($last_news as $l_news)                                    
                                <div class="col-md-4 blog_grid_post_style  jl_row_1">
                                    <div class="jl_grid_box_wrapper">
                                        <div class="image-post-thumb">
                                            <a href="{{ route('post' , $l_news->id) }}" class="link_image featured-thumbnail"
                                                title="This is a great photo and nice for shooting">
                                                <img width="200px" height="200px"
                                                    src="{{ asset('blog/storage/app/public/'.$l_news->image) }}"
                                                    class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                    alt="" />
                                                <div class="background_over_image"></div>
                                        </div>
                                        <div class="post-entry-content">
                                            <h3 class="image-post-title"><a href="{{ route('post' , $l_news->id) }}">
                                                    {{ $l_news->title }}</a>
                                            </h3>
                                            <span class="jl_post_meta"><span class="jl_author_img_w"> </span><span class="post-date"><i
                                                        class="fa fa-clock-o"></i>{{ $l_news->upload_date }} &nbsp;</span><span class="view_options"><i class="fa fa-eye"></i>&nbsp;{{ $l_news->visitors }}</span></span>
                                            <div class="content_post_grid">
                                                <p>{!! Str::limit($l_news->desc_ka, 35, '...') !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></a>
<h2 style="text-align:center">პოპულარული</h2>
<br>
<div class="jl_home_section">
    <div class="container">
        <div class="row">
            <div class="col-md-8" id="content">
                @foreach ($pop_news as $pop)
                <div
                    class="post_list_medium_widget jl_nonav_margin page_builder_listpost jelly_homepage_builder jl-post-block-725291">
                    <div class="blog_list_post_style">
                        <div class="image-post-thumb featured-thumbnail home_page_builder_thumbnial">
                            <div class="jl_img_container"> <span class="image_grid_header_absolute"
                                    style="background-image: url('{{ asset('blog/storage/app/public/'.$pop->image) }}')"></span>
                                <a href={{ route('post' , $pop->id) }} class="link_grid_header_absolute"></a>
                            </div>
                        </div>
                        <div class="post-entry-content"> </span> <span
                                class="post-meta meta-main-img auto_image_with_date"><span class="post-date"><i
                                        class="fa fa-clock-o"></i>{{ $pop->upload_date }}</span><span class="meta-comment"><a
                                        href={{ route('post' , $pop->id) }}></a></span><span class="view_options"><i class="fa fa-eye"></i>&nbsp;{{ $pop->visitors }}</span></span>
                            <h3 class="image-post-title"><a href={{ route('post' , $pop->id) }}>
                                    {{ $pop->title }}</a>
                            </h3>
                            <div class="large_post_content">
                                <p>{!! Str::limit($pop->desc_ka, 35, '...') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>                            
                @endforeach
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
                                    <a href={{ route('post' , $side->id) }} class="jl_small_format feature-image-link image_post featured-thumbnail"
                                        title="Sitting right here waiting for you come to me">
                                        <img width="120" height="120"
                                            src="{{ asset('blog/storage/app/public/'.$side->image) }}"
                                            class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                            alt="" />
                                        <div class="background_over_image"></div>
                                    </a>
                                    <div class="item-details">
                                        <h3 class="feature-post-title"><a href={{ route('post' , $side->id) }}>
                                                {{ $side->title }}</a>
                                        </h3>
                                        <span class="post-meta meta-main-img auto_image_with_date"> <span
                                                class="post-date"><i class="fa fa-clock-o"></i> {{ $side->upload_date }}</span><span class="view_options"><i class="fa fa-eye"></i>&nbsp;{{ $side->visitors }}</span></span>
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
</div>
<!-- end content -->
@endsection
