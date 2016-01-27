@extends('layouts.default')

@section('title')
    Lorem Ipsum Dolor - Centre
@stop

@section('body-classes')
    class="single body_style_wide body_filled article_style_stretch top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide"
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
                <a class="breadcrumbs_item all" href="{{URL::to('/blog')}}">Blog</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item cat_post" href="{{URL::to('/blog')}}">Categoria</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Títol de la publicació</span>
            </div>
            <h1 class="page_title">Títol de la publicació</h1>
        </div>
    </div>
    <!-- /Page title -->
    <!-- Content -->
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <article class="post_item post_item_single post_featured_right post">
                    <div class="post_info">
                                <span class="post_info_item post_info_posted">Publicat
									<a href="#" class="post_info_date date updated" content="2014-12-28">Desembre 28, 2014</a>
								</span>
                                <span class="post_info_item post_info_posted_by">per
									<a href="#" class="post_info_author">John Doe</a>
								</span>
                                <span class="post_info_item post_info_tags">a
									<a class="category_link" href="post-formats.html">Categoria 1</a>,
									<a class="category_link" href="post-formats-with-sidebar.html">Categoria 2</a>
								</span>
                                <span class="post_info_item post_info_counters">
									<span class="post_counters_item post_counters_views icon-eye" title="Views - 222">222</span>
									<a class="post_counters_item post_counters_comments icon-comment-1" title="Comments - 4" href="#">
                                        <span class="post_counters_number">4</span>
                                    </a>
									<a class="post_counters_item post_counters_likes icon-heart enabled" title="Like" href="#">
                                        <span class="post_counters_number">1</span>
                                    </a>
                                </span>
                    </div>
                    <section class="post_content">
                        <p>Duis auctor arcu ac mi bibendum posuere. Integer diam orci, faucibus ut mi sed, tincidunt vehicula erat. Sed ultricies tempor nunc, nec malesuada tortor vehicula ac. Curabitur imperdiet massa ac ex pretium, et mollis metus aliquet. Phasellus tempor nunc et odio interdum iaculis. Vestibulum ac pretium erat. Maecenas sollicitudin sagittis tellus at malesuada. Mauris eget maximus elit. Proin feugiat tellus vitae aliquet mattis. Vivamus porta massa lacus, quis venenatis felis elementum et. Sed eu mauris auctor, auctor erat a, molestie lacus. Praesent cursus dignissim hendrerit. Ut tincidunt elementum diam, eget pretium est. Integer laoreet felis a magna cursus semper.</p>
                        <p>Nam efficitur turpis at nibh aliquet, sed viverra felis accumsan. Curabitur lacinia vitae nulla sit amet mollis. Suspendisse quis augue lorem. Mauris finibus sem nec venenatis sagittis. Pellentesque mattis pulvinar tellus a malesuada. Curabitur nec ex vitae nisl molestie euismod et vel justo. Aenean sed rhoncus tortor. Sed at sagittis elit, sed hendrerit ligula. Nunc porta, purus eget pretium varius, metus ipsum tincidunt ipsum, a aliquet quam felis quis diam. Sed gravida augue risus, at egestas leo gravida in.</p>
                        <div class="post_info post_info_bottom">
                                    <span class="post_info_item post_info_tags">Tags:
										<a class="post_tag_link" href="tag-page.html">standard</a>
									</span>
                        </div>
                    </section>
                </article>
            </div>
        </div>
        <!-- Comments section -->
        <section class="related_wrap scroll_wrap">
            <div class="content_wrap">
                <div class="content">
                    <section class="comments_wrap">
                        <div id="comments" class="comments_list_wrap">
                            <h2 class="section_title comments_list_title">Comentaris</h2>
                            <ul class="comments_list">
                                <li id="comment-3" class="comment even thread-even depth-1 comment_item">
                                    <div class="comment_author_avatar">
                                        <img alt="" src="http://0.gravatar.com/avatar/94320af4941a3300ed3036c9fcedfd90?s=75&d=mm&r=g" srcset="http://0.gravatar.com/avatar/94320af4941a3300ed3036c9fcedfd90?s=150&amp;d=mm&amp;r=g 2x" class="avatar avatar-75 photo" height="75" width="75" />
                                    </div>
                                    <div class="comment_content">
                                        <div class="comment_info">
                                            <span class="comment_author">Sarah Jefferson</span>
                                                <span class="comment_date">
													<span class="comment_date_label">Publicat</span>
													<span class="comment_date_value">Gener 13, 2015</span>
												</span>
                                            <span class="comment_time">7:11 am</span>
                                        </div>
                                        <div class="comment_text_wrap">
                                            <div class="comment_text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                        <div class="comment_reply">
                                            <a class="comment-reply-link" href="#">Respondre</a>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li id="comment-4" class="comment odd alt depth-2 comment_item">
                                            <div class="comment_author_avatar">
                                                <img alt="" src="http://1.gravatar.com/avatar/dec74897a5a377cfc7b1f524f1339fdc?s=75&d=mm&r=g" srcset="http://1.gravatar.com/avatar/dec74897a5a377cfc7b1f524f1339fdc?s=150&amp;d=mm&amp;r=g 2x" class="avatar avatar-75 photo" height="75" width="75" />
                                            </div>
                                            <div class="comment_content">
                                                <div class="comment_info">
                                                    <span class="comment_author">Douglas Adams</span>
															<span class="comment_date"><span class="comment_date_label">Publicat</span>
															<span class="comment_date_value">Enero 13, 2015</span>
														</span>
                                                    <span class="comment_time">8:28 am</span>
                                                </div>
                                                <div class="comment_text_wrap">
                                                    <div class="comment_text">
                                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                                                    </div>
                                                </div>
                                                <div class="comment_reply">
                                                    <a class="comment-reply-link" href="#">Respondre</a>
                                                </div>
                                            </div>
                                            <ul class="children">
                                                <li id="comment-5" class="comment even depth-3 comment_item">
                                                    <div class="comment_author_avatar">
                                                        <img alt="" src="http://0.gravatar.com/avatar/6c09e59577442164452f39fb8cad053e?s=75&d=mm&r=g" srcset="http://0.gravatar.com/avatar/6c09e59577442164452f39fb8cad053e?s=150&amp;d=mm&amp;r=g 2x" class="avatar avatar-75 photo" height="75" width="75" />
                                                    </div>
                                                    <div class="comment_content">
                                                        <div class="comment_info">
                                                            <span class="comment_author">Sebastian Jones</span>
                                                                <span class="comment_date">
																	<span class="comment_date_label">Publicat</span>
																	<span class="comment_date_value">Gener 13, 2015</span>
																</span>
                                                            <span class="comment_time">8:29 am</span>
                                                        </div>
                                                        <div class="comment_text_wrap">
                                                            <div class="comment_text">
                                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                                                            </div>
                                                        </div>
                                                        <div class="comment_reply">
                                                            <a class="comment-reply-link" href="#">Respondre</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li id="comment-6" class="comment odd alt thread-odd thread-alt depth-1 comment_item">
                                    <div class="comment_author_avatar">
                                        <img alt="" src="http://0.gravatar.com/avatar/32854e049bd5f275add014e89b395836?s=75&d=mm&r=g" srcset="http://0.gravatar.com/avatar/32854e049bd5f275add014e89b395836?s=150&amp;d=mm&amp;r=g 2x" class="avatar avatar-75 photo" height="75" width="75" />
                                    </div>
                                    <div class="comment_content">
                                        <div class="comment_info">
                                            <span class="comment_author">Betsy Borns</span>
                                                <span class="comment_date">
													<span class="comment_date_label">Publicat</span>
													<span class="comment_date_value">Gener 13, 2015</span>
												</span>
                                            <span class="comment_time">8:30 am</span>
                                        </div>
                                        <div class="comment_text_wrap">
                                            <div class="comment_text">
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                            </div>
                                        </div>
                                        <div class="comment_reply">
                                            <a class="comment-reply-link" href="#">Respondre</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="comments_pagination"></div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <!-- /Comments section -->
        <!-- Comments form -->
        <div class="content_wrap">
            <div class="content">
                <section class="comments_wrap">
                    <div class="comments_form_wrap">
                        <h2 class="section_title comments_form_title">Afegir comentari</h2>
                        <div class="comments_form">
                            <div id="respond" class="comment-respond">
                                <form action="#" method="post" id="commentform" class="comment-form">
                                    <p class="comments_notes">La teva direcció de correu electrònic no es publicarà. Els camps obligatoris estàn senyalats amb el símbol "*"</p>
                                    <div class="columns_wrap">
                                        <div class="comments_field comments_author column-1_2">
                                            <label for="author" class="required">Nom</label>
                                            <input id="author" name="author" type="text" placeholder="Nom *" value="" size="30" aria-required="true" />
                                        </div>
                                        <div class="comments_field comments_email column-1_2">
                                            <label for="email" class="required">Direcció de correu electrònic</label>
                                            <input id="email" name="email" type="text" placeholder="Direcció de correu electrònic *" value="" size="30" aria-required="true" />
                                        </div>
                                    </div>
                                    <div class="comments_field comments_message">
                                        <label for="comment" class="required">El teu missatge</label>
                                        <textarea id="comment" name="comment" placeholder="Comentari" aria-required="true"></textarea>
                                    </div>
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="send_comment" class="submit" value="Publica el comentari" />
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /Comments form -->
    </div>
    <!-- /Content -->
@stop