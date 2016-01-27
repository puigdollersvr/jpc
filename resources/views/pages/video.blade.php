@extends('layouts.default')

@section('title')
    Video
@stop

@section('body-classes')
    class="page body_style_wide body_filled article_style_boxed template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide"
@stop

@section('header')
    @include('includes.header')
@stop

@section('content')
<!-- Page title -->
<div class="page_top_wrap page_top_title page_top_breadcrumbs sc_pt_st1">
    <div class="content_wrap">
        <h1 class="page_title">Multimèdia</h1>
    </div>
</div>
<!-- /Page title -->
<!-- Content without sidebar -->
<div class="page_content_wrap">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single page" data-animation="animated fadeInUp normal">
                <section class="post_content">
                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                        <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                            <h4 class="sc_title sc_title_regular margin_top_0 margin_bottom_075em">Video 1</h4>

                            <div class="sc_video_player">
                                <div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play width_100per"
                                     data-width="100%" data-height="647"
                                     data-video="&lt;iframe class=&quot;video_frame&quot; src=&quot;https://youtube.com/embed/fIT0ky72f0I?autoplay=1&quot; width=&quot;100%&quot; height=&quot;647&quot; frameborder=&quot;0&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;">
                                    <img alt="" src="http://i1.ytimg.com/vi/fIT0ky72f0I/0.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="column-1_2 sc_column_item sc_column_item_2 even">
                            <h4 class="sc_title sc_title_regular margin_top_0 margin_bottom_075em">Video 2</h4>

                            <div class="sc_video_player">
                                <div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play width_100per"
                                     data-width="100%" data-height="647"
                                     data-video="&lt;iframe class=&quot;video_frame&quot; src=&quot;https://youtube.com/embed/qYn-2e2Y3sk?autoplay=1&quot; width=&quot;100%&quot; height=&quot;647&quot; frameborder=&quot;0&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;">
                                    <img alt="" src="http://i1.ytimg.com/vi/qYn-2e2Y3sk/0.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sc_line sc_line_style_solid margin_top_3em"></div>
                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                        <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                            <h4 class="sc_title sc_title_regular margin_bottom_075em">Video 3</h4>

                            <div class="sc_video_player">
                                <div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play width_100per"
                                     data-width="100%" data-height="647"
                                     data-video="&lt;iframe class=&quot;video_frame&quot; src=&quot;https://youtube.com/embed/iblm49bJyfA?autoplay=1&quot; width=&quot;100%&quot; height=&quot;647&quot; frameborder=&quot;0&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;">
                                    <img alt="" src="http://i1.ytimg.com/vi/iblm49bJyfA/0.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="column-1_2 sc_column_item sc_column_item_2 even">
                            <h4 class="sc_title sc_title_regular margin_bottom_075em">Video 4</h4>

                            <div class="sc_video_player">
                                <div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play width_100per"
                                     data-width="100%" data-height="647"
                                     data-video="&lt;iframe class=&quot;video_frame&quot; src=&quot;https://youtube.com/embed/jx2FTqx-9HE?autoplay=1&quot; width=&quot;100%&quot; height=&quot;647&quot; frameborder=&quot;0&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;">
                                    <img alt="" src="http://i1.ytimg.com/vi/jx2FTqx-9HE/0.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </div>
    </div>
</div>
<!-- /Content without sidebar -->
@stop