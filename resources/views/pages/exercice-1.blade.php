@extends('layouts.default')

@section('title')
    Video
@stop

@section('body-classes')
    class="page body_style_fullscreen body_filled article_style_boxed top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide"
    @stop

    @section('header')
    @include('includes.dark-header')
    @stop

    @section('content')
            <!-- Page title -->
    <div class="page_top_wrap page_top_title page_top_breadcrumbs sc_pt_st1">
        <div class="content_wrap">
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{URL::to('/')}}">Inici</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="{{URL::to('/courses')}}">Blocs formatius</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="{{URL::to('/exercices')}}">Bloc X.X</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Activitat X</span>
            </div>
            <h1 class="page_title">Títol de l'activitat</h1>
        </div>
    </div>
    <!-- /Page title -->
    <!-- Content without sidebar -->
    <div class="page_content_wrap">
        <div class="content">
            <article class="post_item post_item_single page">
                <section class="post_content">
                    <!-- Info section -->
                    <div class="sc_section accent_top bg_tint_light sc_bg1 animated fadeInUp normal"
                         data-animation="animated fadeInUp normal">
                        <div class="sc_section_overlay">
                            <div class="sc_section_content">
                                <div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">
                                    <h2 class="sc_title sc_title_regular sc_align_center margin_top_0 margin_bottom_085em text_center">
                                        Exercici tipus test</h2>

                                    <form>
                                        <span>
                                            <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                                consectetur elementum orci, in fringilla velit tempus et. Vestibulum
                                                blandit arcu faucibus tellus tincidunt, luctus venenatis nisi
                                                scelerisque.</b>
                                        </span>
                                        <br>
                                        <input type="radio" id="radio0" name="gender" value="male" class="css-checkbox"
                                               checked>
                                        <label for="radio0" class="css-label">A: Quisque sodales sit amet nulla sit amet
                                            tempor.</label><br>
                                        <input type="radio" id="radio1" name="gender" value="female"
                                               class="css-checkbox">
                                        <label for="radio1" class="css-label">B: Mauris cursus, nisi et commodo
                                            molestie, sapien tellus tempor purus, a accumsan libero ligula at
                                            erat.</label>
                                        <br>
                                        <input type="radio" id="radio2" name="gender" value="other"
                                               class="css-checkbox">
                                        <label for="radio2" class="css-label">C: Morbi non magna a tellus luctus
                                            pulvinar eget ut dolor.</label>
                                        <br>
                                        <br>
                                        <span>
                                            <b>Pellentesque urna sem, varius eget placerat in, facilisis nec
                                                arcu.</b>
                                        </span>
                                        <br>
                                        <input type="radio" id="radio3" name="gender" value="male" class="css-checkbox">
                                        <label for="radio3" class="css-label">A: Quisque sodales sit amet nulla sit amet
                                            tempor.</label><br>
                                        <input type="radio" id="radio4" name="gender" value="female"
                                               class="css-checkbox">
                                        <label for="radio4" class="css-label">B: Mauris cursus, nisi et commodo
                                            molestie, sapien tellus tempor purus, a accumsan libero ligula at
                                            erat.</label><br>
                                        <input type="radio" id="radio5" name="gender" value="other"
                                               class="css-checkbox">
                                        <label for="radio5" class="css-label">C: Morbi non magna a tellus luctus
                                            pulvinar eget ut dolor</label><br>
                                        <span><b><br/>Nullam imperdiet faucibus odio quis fermentum. Etiam quis lorem
                                                dapibus, vehicula ante eu, mollis turpis.</b></span>
                                        <br>
                                        <input type="radio" id="radio6" name="gender" value="male" class="css-checkbox">
                                        <label for="radio6" class="css-label">A: Quisque sodales sit amet nulla sit amet
                                            tempor.</label><br>
                                        <input type="radio" id="radio7" name="gender" value="female"
                                               class="css-checkbox">
                                        <label for="radio7" class="css-label">B: Mauris cursus, nisi et commodo
                                            molestie, sapien tellus tempor purus, a accumsan libero ligula at
                                            erat.</label><br>
                                        <input type="radio" id="radio8" name="gender" value="other"
                                               class="css-checkbox">
                                        <label for="radio8" class="css-label">C: Morbi non magna a tellus luctus
                                            pulvinar eget ut dolor</label><br>
                                        <span><b><br/>Cras pharetra mattis cursus. Suspendisse id augue id ligula
                                                elementum feugiat.</b></span>
                                        <br>
                                        <input type="radio" id="radio9" name="gender" value="male" class="css-checkbox">
                                        <label for="radio9" class="css-label">A: Quisque sodales sit amet nulla sit amet
                                            tempor.</label><br>
                                        <input type="radio" id="radio10" name="gender" value="female"
                                               class="css-checkbox">
                                        <label for="radio10" class="css-label">B: Mauris cursus, nisi et commodo
                                            molestie, sapien tellus tempor purus, a accumsan libero ligula at
                                            erat.</label><br>
                                        <input type="radio" id="radio11" name="gender" value="other"
                                               class="css-checkbox">
                                        <label for="radio11" class="css-label">C: Morbi non magna a tellus luctus
                                            pulvinar eget ut dolor</label>
                                        <br>
                                        <br>
                                        <div class="post_buttons button_align_center">
                                            <br/>

                                            <div class="post_button">
                                                <a href="{{URL::to('/exercices')}}"
                                                   class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">VALIDA</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Info section -->
                </section>
            </article>
        </div>
    </div>
    <!-- /Content without sidebar -->
@stop