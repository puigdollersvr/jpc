@extends('layouts.default')

@section('title')
    Bloc
@stop

@section('body-classes')
    class="archive category category-post-formats-with-sidebar body_style_wide body_filled article_style_stretch layout_excerpt top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_show sidebar_right"
    @stop

    @section('header')
    @include('includes.dark-header')
    @stop

    @section('content')
    <!-- Page title -->
    <div class="page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="content_wrap">
            <h1 class="page_title">Blog</h1>
        </div>
    </div>
    <!-- /Page title -->
    <!-- Content with sidebar -->
    <div class="page_content_wrap">
        <div class="content_wrap">
            <!-- Content-->
            <div class="content">
                <!-- Post without image-->
                <article class="post_item post_item_excerpt odd post type-post">
                    <h3 class="post_title">
                        <a href="post-without-image.html">
                            <span class="post_icon icon-book-2"></span>Publicació 1
                        </a>
                    </h3>

                    <div class="post_content clearfix">
                        <div class="post_info">
                                    <span class="post_info_item post_info_posted">Publicat
										<a href="#" class="post_info_date">Desembre 28, 2014</a>
									</span>
                                    <span class="post_info_item post_info_posted_by">per
										<a href="#" class="post_info_author">John Doe</a>
									</span>
                                    <span class="post_info_item post_info_counters">
										<a class="post_counters_item post_counters_views icon-eye" title="Views - 215"
                                           href="#">215</a>
										<a class="post_counters_item post_counters_comments icon-comment-1"
                                           title="Comments - 4" href="#">
                                            <span class="post_counters_number">4</span>
                                        </a>
										<a class="post_counters_item post_counters_likes icon-heart enabled"
                                           title="Like" href="#">
                                            <span class="post_counters_number">1</span>
                                        </a>
                                    </span>
                        </div>
                        <div class="post_descr">
                            <p>Duis auctor arcu ac mi bibendum posuere. Integer diam orci, faucibus ut mi sed, tincidunt
                                vehicula erat. Sed ultricies tempor nunc, nec malesuada tortor vehicula ac. Curabitur
                                imperdiet massa ac ex pretium, et mollis metus aliquet. Phasellus...</p>
                            <a href="{{URL::to("/blog-article")}}"
                               class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LLEGIR MÉS</a>
                        </div>
                    </div>
                </article>
                <!-- /Post without image-->
            </div>
            <!-- /Content-->
            <!-- Sidebar -->
            <div class="sidebar widget_area bg_tint_light sidebar_style_white">

                <!-- Search widget -->
                <aside class="widget widget_search">
                    <h5 class="widget_title">Cerca</h5>

                    <form method="get" class="search_form" action="#">
                        <input type="text" class="search_field" placeholder="Cerca &hellip;" value="" name="s"
                               title="Search for:"/>
                        <button type="submit" class="search_button icon-search-2"></button>
                    </form>
                </aside>
                <!-- /Search widget -->

                <!-- Categories widget -->
                <aside class="widget">
                    <h5 class="widget_title">Categories</h5>
                    <ul>
                        <li><a href="#">Totes las publicacions</a> (22)
                            <ul class="children">
                                <li><a href="#">Categoria 1</a> (12)</li>
                                <li><a href="#">Categoria 2</a> (10)</li>
                            </ul>
                        </li>
                    </ul>
                </aside>
                <!-- /Categories widget -->
                <!-- Recent posts widget -->
                <aside class="widget">
                    <h5 class="widget_title">Publicacions recents</h5>
                    <article class="post_item first">
                        <div class="post_thumb">
                            <img alt="Medical Chemistry: The Molecular Basis" src="images/masonry_01-75x75.jpg"></div>
                        <div class="post_content">
                            <h6 class="post_title">
                                <a href="#">Lorem ipsum dolor</a>
                            </h6>

                            <div class="post_info">
										<span class="post_info_item post_info_posted">
											<a href="#" class="post_info_date">Gener 14, 2015</a>
										</span>
										<span class="post_info_item post_info_posted_by">de
											<a href="#" class="post_info_author">John Doe</a>
										</span>
										<span class="post_info_item post_info_counters">
											<a href="#" class="post_counters_item icon-eye"><span>29</span></a>
										</span>
                            </div>
                        </div>
                    </article>
                    <article class="post_item">
                        <div class="post_thumb">
                            <img alt="Introduction to Computer  Science" src="images/masonry_02-75x75.jpg">
                        </div>
                        <div class="post_content">
                            <h6 class="post_title">
                                <a href="post-without-sidebar.html">Dolor ipsum lorem</a>
                            </h6>

                            <div class="post_info">
										<span class="post_info_item post_info_posted">
											<a href="#" class="post_info_date">Gener 14, 2015</a>
										</span>
										<span class="post_info_item post_info_posted_by">de
											<a href="#" class="post_info_author">John Doe</a>
										</span>
										<span class="post_info_item post_info_counters">
											<a href="#" class="post_counters_item icon-eye"><span>0</span></a>
										</span>
                            </div>
                        </div>
                    </article>
                </aside>
                <!-- /Recent posts widget -->
                <!-- Archive widget -->
                <aside class="widget widget_archive">
                    <h5 class="widget_title">Històric</h5>
                    <ul>
                        <li><a href="#">Febrer 2015</a>&nbsp;(8)</li>
                        <li><a href="#">Gener 2015</a>&nbsp;(12)</li>
                        <li><a href="#">Desembre 2014</a>&nbsp;(10)</li>
                    </ul>
                </aside>
                <!-- /Archive widget -->
            </div>
            <!-- /Sidebar -->

        </div>
        <!-- /div class="content_wrap" -->
    </div>
    <!-- /.page_content_wrap -->


    <!-- /Content -->
@stop