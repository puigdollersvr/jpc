@extends('layouts.default')

@section('title')
    Calendari
@stop

@section('body-classes')
    class="archive body_style_wide body_filled article_style_stretch layout_excerpt top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide"
@stop

@section('header')
    @include('includes.header')
@stop

@section('content')
    <!-- Page title -->
    <div class="page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="content_wrap">
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{URL::to('/')}}">Inici</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="{{URL::to('/courses')}}">Blocs formatius</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Bloc X.X</span>
            </div>
            <h1 class="page_title">Bloc X.X</h1>
        </div>
    </div>
    <!-- /Page title -->
    <!-- Content -->
    <div class="page_content_wrap">
        <!-- Events calendar -->
        <div class="content_wrap">
            <div class="content">
                <article class="post_item post_item_single page">
                    <div class="post_info">
                        <!-- Hover "Circle Effect 15" -->
                        <h2 class="sc_title sc_title_regular margin_top_0"></h2>
                        <div id="sc_blogger_15" class="sc_blogger layout_square_3 template_portfolio sc_blogger_horizontal">
                            <div class="isotope_wrap" data-columns="3">
                                <div class="isotope_item isotope_item_square isotope_item_square_3 isotope_column_3">
                                    <div class="post_item post_item_square post_item_square_3 odd">
                                        <div class="post_content isotope_item_content ih-item colored circle effect15 left_to_right">
                                            <div class="post_featured img">
                                                <a href="post-with-video.html">
                                                    <img alt="Introduction to Computer  Science" src="images/masonry_09-400x400.jpg">
                                                </a>
                                            </div>
                                            <div class="post_info_wrap info">
                                                <div class="info-back">
                                                    <h4 class="post_title">
                                                        <a href="{{URL::to('/exercice')}}">Activitat 1</a>
                                                    </h4>
                                                    <div class="post_descr">
                                                        <p>
                                                            <a href="{{URL::to('/exercice')}}">Curabitur tristique tempus arcu a placerat. Integer venenatis, magna et lobortis aliquet, diam...</a>
                                                        </p>
                                                        <a href="{{URL::to('/exercice')}}"><span class="hover_icon icon-plus-2"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="isotope_item isotope_item_square isotope_item_square_3 isotope_column_3">
                                    <div class="post_item post_item_square post_item_square_3 even">
                                        <div class="post_content isotope_item_content ih-item colored circle effect15 left_to_right">
                                            <div class="post_featured img">
                                                <a href="{{URL::to('/exercice-1')}}">
                                                    <img alt="Medical Chemistry: The  Molecular Basis" src="images/masonry_08-400x400.jpg">
                                                </a>
                                            </div>
                                            <div class="post_info_wrap info">
                                                <div class="info-back">
                                                    <h4 class="post_title">
                                                        <a href="{{URL::to('/exercice-1')}}">Activitat 2</a>
                                                    </h4>
                                                    <div class="post_descr">
                                                        <p>
                                                            <a href="{{URL::to('/exercice-1')}}">Nulla dignissim nisi in nulla aliquet, eget sagittis est suscipit. Morbi quis diam nec libero...</a>
                                                        </p>
                                                        <a href="{{URL::to('/exercice-1')}}"> <span class="hover_icon icon-plus-2"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="isotope_item isotope_item_square isotope_item_square_3 isotope_column_3">
                                    <div class="post_item post_item_square post_item_square_3  odd">
                                        <div class="post_content isotope_item_content ih-item colored circle effect15 left_to_right">
                                            <div class="post_featured img">
                                                <a href="{{URL::to('/exercice-2')}}">
                                                    <img alt="Introduction to Biomedical Imaging" src="images/masonry_07-400x400.jpg">
                                                </a>
                                            </div>
                                            <div class="post_info_wrap info">
                                                <div class="info-back">
                                                    <h4 class="post_title">
                                                        <a href="{{URL::to('/exercice-2')}}">Activitat 3</a>
                                                    </h4>
                                                    <div class="post_descr">
                                                        <p>
                                                            <a href="{{URL::to('/exercice-2')}}">Sed orci dolor, pulvinar nec luctus a, malesuada ac nisl. Aliquam eleifend et dui et suscipit...</a>
                                                        </p>
                                                        <a href="{{URL::to('/exercice-2')}}"><span class="hover_icon icon-plus-2"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="isotope_item isotope_item_square isotope_item_square_3 isotope_column_3">
                                    <div class="post_item post_item_square post_item_square_3  even">
                                        <div class="post_content isotope_item_content ih-item colored circle effect15 left_to_right">
                                            <div class="post_featured img">
                                                <a href="{{URL::to('/exercice')}}">
                                                    <img alt="Entrepreneurship 101:  Who is your customer?" src="images/masonry_06-400x400.jpg">
                                                </a>
                                            </div>
                                            <div class="post_info_wrap info">
                                                <div class="info-back">
                                                    <h4 class="post_title">
                                                        <a href="{{URL::to('/exercice')}}">Activitat 4</a>
                                                    </h4>
                                                    <div class="post_descr">
                                                        <p>
                                                            <a href="{{URL::to('/exercice')}}">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</a>
                                                        </p>
                                                        <a href="{{URL::to('/exercice')}}"><span class="hover_icon icon-plus-2"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="isotope_item isotope_item_square isotope_item_square_3 isotope_column_3">
                                    <div class="post_item post_item_square post_item_square_3 post_format_gallery odd">
                                        <div class="post_content isotope_item_content ih-item colored circle effect15 left_to_right">
                                            <div class="post_featured img">
                                                <a href="{{URL::to('/exercice')}}">
                                                    <img alt="Principles of Written English, Part 1" src="images/masonry_05-400x400.jpg">
                                                </a>
                                            </div>
                                            <div class="post_info_wrap info">
                                                <div class="info-back">
                                                    <h4 class="post_title">
                                                        <a href="{{URL::to('/exercice')}}">Activitat 5</a>
                                                    </h4>
                                                    <div class="post_descr">
                                                        <p>
                                                            <a href="{{URL::to('/exercice')}}">Cras et fringilla lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada...</a>
                                                        </p>
                                                        <a href="{{URL::to('/exercice')}}"><span class="hover_icon icon-plus-2"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="isotope_item isotope_item_square isotope_item_square_3 isotope_column_3">
                                    <div class="post_item post_item_square post_item_square_3 even last">
                                        <div class="post_content isotope_item_content ih-item colored circle effect15 left_to_right">
                                            <div class="post_featured img">
                                                <a href="{{URL::to('/exercice')}}">
                                                    <img alt="Evaluating Social  Programs" src="images/masonry_04-400x400.jpg"></a>
                                            </div>
                                            <div class="post_info_wrap info">
                                                <div class="info-back">
                                                    <h4 class="post_title">
                                                        <a href="{{URL::to('/exercice')}}">Activitat 6</a>
                                                    </h4>
                                                    <div class="post_descr">
                                                        <p>
                                                            <a href="{{URL::to('/exercice')}}">Duis bibendum commodo ultrices. Phasellus venenatis velit mauris, non sagittis tortor...</a>
                                                        </p>
                                                        <a href="{{URL::to('/exercice')}}"> <span class="hover_icon icon-plus-2"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Hover "Circle Effect 15" -->
                    </div>
                </article>
            </div>
        </div>
        <!-- /Events calendar -->
    </div>
    <!-- /Content -->
@stop