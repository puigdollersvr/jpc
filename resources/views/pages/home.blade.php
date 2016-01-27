@extends('layouts.default')
@section('title')
    Inici
@stop
@section('body-classes')
    class="home page body_style_fullscreen body_filled article_style_stretch layout_single-standard top_panel_style_dark top_panel_opacity_transparent top_panel_show top_panel_over menu_right user_menu_show sidebar_hide"
@stop
@section('slider')
    <div class="top_panel_fix"></div>
    @include('includes.slider')
@stop

@section('header')
    @include('includes.header')
@stop

@section('content')
    <div class="page_content_wrap">
            <div class="content">
                <article class="post_item post_item_single page">
                    <section class="post_content">
                        <!-- Features section -->
                        <div class="sc_section" data-animation="animated zoomIn normal">
                            <div class="sc_content content_wrap margin_top_3em_imp margin_bottom_3em_imp sc_features_st1">
                                <div class="columns_wrap sc_columns columns_fluid sc_columns_count_3">
                                    <div class="column-1_3 sc_column_item sc_column_item_1 odd first text_center">
                                        <a href="#"
                                           class="sc_icon icon-woman-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>

                                        <div class="sc_section font-w_400 margin_top_1em_imp">
                                            <p>
                                                <a class="menu_color" href="#">Take computer science courses<br/>
                                                    with personalized support</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column-1_3 sc_column_item sc_column_item_2 even text_center">
                                        <a href="#"
                                           class="sc_icon icon-rocket-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>

                                        <div class="sc_section font-w_400 margin_top_1em_imp">
                                            <p>
                                                <a class="menu_color" href="#">Build cool projects<br/>
                                                    to showcase your skills</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column-1_3 sc_column_item sc_column_item_3 odd text_center">
                                        <a href="#"
                                           class="sc_icon icon-world-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>

                                        <div class="sc_section font-w_400 margin_top_1em_imp">
                                            <p>
                                                <a class="menu_color" href="#">Earn certificates<br/>
                                                    recognized by Industry</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Features section -->
                    </section>
                </article>
            </div>
    </div>
@stop