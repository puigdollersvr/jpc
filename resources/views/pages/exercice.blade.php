@extends('layouts.default')

@section('title')
    Video
@stop

@section('body-classes')
    class="page body_style_fullscreen body_filled article_style_boxed top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide"
@stop

@section('header')
    @include('includes.header')
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
                    <div class="sc_section accent_top bg_tint_light sc_bg1 animated fadeInUp normal" data-animation="animated fadeInUp normal">
                        <div class="sc_section_overlay">
                            <div class="sc_section_content">
                                <div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">
                                    <h2 class="sc_title sc_title_regular sc_align_center margin_top_0 margin_bottom_085em text_center">Resol els dubtes de la teva companya María</h2>
                                    <div class="row">
                                        <div class="col-xs-6 col-md-4">
                                            <img style="position: absolute; right: 0px;" src="{{asset("/images/maria.png")}}"/>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                            <div class="chat">
                                                <div class="bubble me girl visible" >Mauris rhoncus sed enim ut faucibus. Sed sodales at metus malesuada consectetur?</div>
                                                <div id="answer" class="bubble you boy" >Nullam ultrices diam vel velit ornare euismod.</div>
                                                <div id="reanswer" class="bubble me girl">&nbsp;</div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                            <img src="{{asset("/images/marc.png")}}"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-md-4">
                                        </div>
                                        <div id="yes" class="col-xs-3 col-md-2">
                                            <span id="yes-icon" class="circle-check icon-check-1"></span>
                                        </div>
                                        <div id="no" class="col-xs-3 col-md-2">
                                            <span id="no-icon" class="circle-cross icon-cancel-1"></span>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                        </div>
                                    </div>
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