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
                <a class="breadcrumbs_item home" href="{{URL::to('/')}}">Inicio</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="{{URL::to('/courses')}}">Unidades formativas</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="{{URL::to('/exercices')}}">Bloque X.X</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Ejercicio X</span>
            </div>
            <h1 class="page_title">Título del ejercicio</h1>
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
                                        Completa las frases</h2>

                                    <form>
                                        <p>Lorem <input type="text" class="complete-sentence"/> dolor sit amet, consectetur adipiscing elit. Suspendisse ante nisl, consequat eget dui quis, ullamcorper faucibus lectus.</p>
                                        <p>Vivamus cursus rutrum mauris, ut ornare augue efficitur <input type="text" class="complete-sentence"/>. Fusce vel eleifend elit. Nam in iaculis ligula. Morbi fringilla erat fermentum metus finibus, eget pellentesque mauris malesuada.</p>
                                        <p>Aliquam hendrerit turpis et ex placerat dictum. <input type="text" class="complete-sentence"/> aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                        <p>Maecenas facilisis turpis eu est sodales, imperdiet convallis velit facilisis. Curabitur sapien odio, scelerisque quis laoreet at, vehicula at <input type="text" class="complete-sentence"/>. </p>
                                        <p><input type="text" class="complete-sentence"/> blandit elit nec nulla efficitur, non congue tortor porta. Sed iaculis non ligula sed posuere.</p>
                                        <br>
                                        <br>
                                        <div class="post_buttons button_align_center">
                                            <br/>

                                            <div class="post_button">
                                                <a href="{{URL::to('/exercices')}}"
                                                   class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">VALIDAR</a>
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