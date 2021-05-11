@extends('layouts.app')
@section('content')
<div class="mobile_menu_overlay"></div>
<div class="main_title_wrapper category_title_section jl_cat_img_bg">
    <div class="category_image_bg_image"
        style="background-image: url('{{ asset('assets/img/2019/02/soroush-karimi-253940-unsplash-1920x982.jpg') }}');">
    </div>
    <div class="category_image_bg_ov"></div>
    <div class="jl_cat_title_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 main_title_col">
                    <div class="jl_cat_mid_title">
                        <h3 class="categories-title title">ძებნა</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jl_post_loop_wrapper">
    <div class="container" id="wrapper_masonry">
        <div class="row">
            <div class="col-md-8 grid-sidebar" id="content">
                <div class="jl_wrapper_cat">
                    <div id="content_masonry" class="pagination_infinite_style_cat ">
                       @foreach ($results as $result)
                        <div class="box jl_grid_layout1 blog_grid_post_style post-2970 post type-post status-publish format-gallery has-post-thumbnail hentry category-business tag-inspiration tag-morning tag-racing post_format-post-format-gallery"
                            data-aos="fade-up">
                            <div class="post_grid_content_wrapper">
                                <div class="image-post-thumb">
                                    <a href={{ route('post' , $result->id) }} class="link_image featured-thumbnail"
                                        title="People are enjoy the job that they love">
                                        <img width="250" height="250"
                                            src="{{ asset('blog/storage/app/public/'.$result->image) }}"
                                            class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                            alt="" />
                                        <div class="background_over_image"></div>
                                    </a> <span class="meta-category-small"></span> <span
                                        class="jl_post_type_icon"><i class="la la-camera"></i></span>
                                </div>
                                <div class="post-entry-content">
                                    <div class="post-entry-content-wrapper">
                                        <div class="large_post_content">
                                            <h3 class="image-post-title"><a href={{ route('post' , $result->id) }}>
                                                    {{ $result->title }}</a></h3>
                                            <span class="jl_post_meta"><span class="jl_author_img_w"></span><span class="post-date"><i
                                                        class="fa fa-clock-o"></i>{{ $result->upload_date }}&nbsp;&nbsp;</span><i class="fa fa-eye"></i>&nbsp;{{ $result->visitors }}</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      @endforeach
                    </div>
                    <nav class="jellywp_pagination"></nav>
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
                                  <a href={{ route('post' , $side->id) }} class="jl_small_format feature-image-link image_post featured-thumbnail"
                                      title="Sitting right here waiting for you come to me">
                                      <img width="100" height="100"
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
                                              class="post-date"><i class="fa fa-clock-o"></i> {{ $side->upload_date }}</span><i class="fa fa-eye"></i>&nbsp;{{ $side->visitors }}</span></span>
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
