@extends('layouts.default')

@section('title')
    Blocs formatius
@stop

@section('body-classes')
    class="page body_style_wide body_filled article_style_boxed layout_courses_3 template_portfolio top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide"
    @stop

    @section('header')
    @include('includes.dark-header')
    @stop

    @section('content')

            <!-- Page title -->
    <div class="page_top_wrap page_top_title page_top_breadcrumbs sc_pt_st1">
        <div class="content_wrap">
            <!--<div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{URL::to('/')}}">Inici</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Blocs formatius</span>
            </div>-->
            <h1 class="page_title">Bloques formativos</h1>
        </div>
    </div>
    <!-- /Page title -->
    <!-- Content with sidebar -->
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <div class="isotope_filters isotope-courses-streampage"></div>
                <div class="isotope_wrap" data-columns="3">
                    <!-- Courses item -->
                    <div class="isotope_item isotope_item_courses isotope_column_3 flt_55">
                        <article class="post_item post_item_courses odd">
                            <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
                                <div class="post_featured img">
                                    <a href="paid-course.html">
                                        <img alt="Principles of Written English, Part 2"
                                             src="images/masonry_15-400x400.jpg"></a>
                                    <h4 class="post_title">
                                        <a href="paid-course.html">Bloque 0.0: Lorem ipsum sit amet</a>
                                    </h4>

                                    <div class="post_descr">
                                        <div class="post_category">
                                            <a href="tag-page.html">Resultado</a>
                                        </div>
                                        <div class="post_rating reviews_summary blog_reviews">
                                            <div class="criteria_summary criteria_row">
                                                <div class="reviews_stars reviews_style_stars" data-mark="60.5">
                                                    <div class="reviews_stars_wrap">
                                                        <div class="reviews_stars_bg"><span class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                        <div class="reviews_stars_hover width_61per"><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                    </div>
                                                    <div class="reviews_value">60.5</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_info_wrap info">
                                    <div class="info-back">
                                        <h4 class="post_title">
                                            <a href="paid-course.html">Bloque 0.0: Lorem ipsum sit amet</a>
                                        </h4>

                                        <div class="post_descr">
                                            <p>
                                                <a href="paid-course.html">Nam id leo massa. Cras at condimentum nisi,
                                                    vulputate ultrices turpis.</a>
                                            </p>

                                            <div class="post_buttons">
                                                <div class="post_button">
                                                    <a href="{{URL::to('/exercices')}}"
                                                       class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">ACCEDER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- /Courses item -->
                    <!-- Courses item -->
                    <div class="isotope_item isotope_item_courses isotope_column_3 flt_55">
                        <article class="post_item post_item_courses even">
                            <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
                                <div class="post_featured img">
                                    <a href="#">
                                        <img alt="Entrepreneurship 101: Who is your customer?"
                                             src="images/masonry_06-400x400.jpg">
                                    </a>
                                    <h4 class="post_title">
                                        <a href="paid-course.html">Bloque 0.1: Lorem ipsum dolor</a>
                                    </h4>

                                    <div class="post_descr">
                                        <div class="post_category">
                                            <a href="tag-page.html">Resultado</a>
                                        </div>
                                        <div class="post_rating reviews_summary blog_reviews">
                                            <div class="criteria_summary criteria_row">
                                                <div class="reviews_stars reviews_style_stars" data-mark="76.3">
                                                    <div class="reviews_stars_wrap">
                                                        <div class="reviews_stars_bg"><span class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                        <div class="reviews_stars_hover width_76per"><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                    </div>
                                                    <div class="reviews_value">76.3</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_info_wrap info">
                                    <div class="info-back">
                                        <h4 class="post_title">
                                            <a href="paid-course.html">Bloque 0.1: Lorem ipsum dolor</a>
                                        </h4>

                                        <div class="post_descr">
                                            <p>
                                                <a href="paid-course.html">Quisque a nulla eget ante vestibulum lacinia
                                                    eu quis massa.</a>
                                            </p>

                                            <div class="post_buttons">
                                                <div class="post_button">
                                                    <a href="{{URL::to('/exercices')}}"
                                                       class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">ACCEDER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- /Courses item -->
                    <!-- Courses item -->
                    <div class="isotope_item isotope_item_courses isotope_column_3 flt_43">
                        <article class="post_item post_item_courses odd">
                            <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
                                <div class="post_featured img">
                                    <a href="free-course.html">
                                        <img alt="Evaluating Social Programs" src="images/masonry_04-400x400.jpg">
                                    </a>
                                    <h4 class="post_title">
                                        <a href="free-course.html">Bloque 1.0: Lorem ipsum</a>
                                    </h4>

                                    <div class="post_descr">
                                        <div class="post_category">
                                            <a href="tag-page.html">Resultado</a>
                                        </div>
                                        <div class="post_rating reviews_summary blog_reviews">
                                            <div class="criteria_summary criteria_row">
                                                <div class="reviews_stars reviews_style_stars" data-mark="53.5">
                                                    <div class="reviews_stars_wrap">
                                                        <div class="reviews_stars_bg"><span class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                        <div class="reviews_stars_hover width_54per"><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                    </div>
                                                    <div class="reviews_value">53.5</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_info_wrap info">
                                    <div class="info-back">
                                        <h4 class="post_title">
                                            <a href="free-course.html">Bloque 1.0: Lorem ipsum</a>
                                        </h4>

                                        <div class="post_descr">
                                            <p>
                                                <a href="free-course.html">Nunc finibus vestibulum dui a fringilla.
                                                    Maecenas maximus in massa sit amet maximus.</a>
                                            </p>

                                            <div class="post_buttons">
                                                <div class="post_button">
                                                    <a href="{{URL::to('/exercices')}}"
                                                       class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">ACCEDER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- /Courses item -->
                    <!-- Courses item -->
                    <div class="isotope_item isotope_item_courses isotope_column_3 flt_57">
                        <article class="post_item post_item_courses even">
                            <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
                                <div class="post_featured img">
                                    <a href="paid-course.html">
                                        <img alt="Principles of Written English, Part 1"
                                             src="images/masonry_05-400x400.jpg">
                                    </a>
                                    <h4 class="post_title">
                                        <a href="paid-course.html">Bloque 2.0: Lorem ipsum lorem ipsum</a>
                                    </h4>

                                    <div class="post_descr">
                                        <div class="post_category">
                                            <a href="tag-page.html">Resultados</a>
                                        </div>
                                        <div class="post_rating reviews_summary blog_reviews">
                                            <div class="criteria_summary criteria_row">
                                                <div class="reviews_stars reviews_style_stars" data-mark="0.0">
                                                    <div class="reviews_stars_wrap">
                                                        <div class="reviews_stars_bg"><span class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                        <div class="reviews_stars_hover width_00per"><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                    </div>
                                                    <div class="reviews_value">0.0</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_info_wrap info">
                                    <div class="info-back">
                                        <h4 class="post_title">
                                            <a href="paid-course.html">Bloque 2.0: Lorem ipsum lorem ipsum</a>
                                        </h4>

                                        <div class="post_descr">
                                            <p>
                                                <a href="paid-course.html">Duis aute irure dolor in reprehenderit in
                                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.</a>
                                            </p>

                                            <div class="post_buttons">
                                                <div class="post_button">
                                                    <a href="{{URL::to('/exercices')}}"
                                                       class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">ACCEDER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- /Courses item -->
                    <!-- Courses item -->
                    <div class="isotope_item isotope_item_courses isotope_column_3 flt_52">
                        <article class="post_item post_item_courses odd">
                            <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
                                <div class="post_featured img">
                                    <a href="paid-course.html">
                                        <img alt="Introduction to Biomedical Imaging"
                                             src="images/masonry_03-400x400.jpg"></a>
                                    <h4 class="post_title">
                                        <a href="paid-course.html">Bloque 3.0: Sit amet dolor</a>
                                    </h4>

                                    <div class="post_descr">
                                        <div class="post_category">
                                            <a href="tag-page.html">Resultado</a>
                                        </div>
                                        <div class="post_rating reviews_summary blog_reviews">
                                            <div class="criteria_summary criteria_row">
                                                <div class="reviews_stars reviews_style_stars" data-mark="74.8">
                                                    <div class="reviews_stars_wrap">
                                                        <div class="reviews_stars_bg"><span class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                        <div class="reviews_stars_hover width_75per"><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                    </div>
                                                    <div class="reviews_value">74.8</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_info_wrap info">
                                    <div class="info-back">
                                        <h4 class="post_title">
                                            <a href="paid-course.html">Bloque 3.0: Sit amet dolor</a>
                                        </h4>

                                        <div class="post_descr">
                                            <p>
                                                <a href="paid-course.html">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit</a>
                                            </p>

                                            <div class="post_buttons">
                                                <div class="post_button">
                                                    <a href="{{URL::to('/exercices')}}"
                                                       class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">ACCEDER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- /Courses item -->
                    <!-- Courses item -->
                    <div class="isotope_item isotope_item_courses isotope_column_3 flt_53">
                        <article class="post_item post_item_courses even last">
                            <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
                                <div class="post_featured img">
                                    <a href="paid-course.html">
                                        <img alt="Introduction to Computer  Science"
                                             src="images/masonry_02-400x400.jpg">
                                    </a>
                                    <h4 class="post_title">
                                        <a href="paid-course.html">Bloque 4.0: Dolor ipsum lorem</a>
                                    </h4>

                                    <div class="post_descr">
                                        <div class="post_category">
                                            <a href="tag-page.html">Resultado</a>
                                        </div>
                                        <div class="post_rating reviews_summary blog_reviews">
                                            <div class="criteria_summary criteria_row">
                                                <div class="reviews_stars reviews_style_stars" data-mark="73">
                                                    <div class="reviews_stars_wrap">
                                                        <div class="reviews_stars_bg"><span class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                        <div class="reviews_stars_hover width_73per"><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span><span
                                                                    class="reviews_star"></span></div>
                                                    </div>
                                                    <div class="reviews_value">73</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_info_wrap info">
                                    <div class="info-back">
                                        <h4 class="post_title">
                                            <a href="paid-course.html">Bloque 4.0: Dolor ipsum lorem</a>
                                        </h4>

                                        <div class="post_descr">
                                            <p>
                                                <a href="paid-course.html">Sed interdum felis diam, vitae rutrum urna
                                                    laoreet vehicula.</a>
                                            </p>

                                            <div class="post_buttons">
                                                <div class="post_button">
                                                    <a href="{{URL::to('/exercices')}}"
                                                       class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">ACCEDER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- /Courses item -->
                </div>
                <div id="viewmore" class="pagination_wrap pagination_viewmore">
                    <a href="#" id="viewmore_link" class="theme_button viewmore_button">
                        <span class="icon-spin3 animate-spin viewmore_loading"></span>
                        <span class="viewmore_text_1">Cargar más</span>
                        <span class="viewmore_text_2">Cargando ...</span>
                    </a>
                    <span class="viewmore_loader"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /Content -->

@stop