<header class="top_panel_wrap bg_tint_dark">
    <!-- User menu -->
    <div class="menu_user_wrap">
        <div class="content_wrap clearfix">
            <div class="menu_user_area menu_user_right menu_user_nav_area">
                <ul id="menu_user" class="menu_user_nav">
                    <li class="menu_user_bookmarks">
                        <a href="#" class="bookmarks_show icon-star-1" title="Show bookmarks"></a>
                        <ul class="bookmarks_list">
                            <li><a href="#" class="bookmarks_add icon-star-empty"
                                   title="Add the current page into bookmarks">Add bookmark</a></li>
                        </ul>
                    </li>
                    <li class="menu_user_controls">
                        <a href="#">
										<span class="user_avatar">
											<img alt=""
                                                 src="http://1.gravatar.com/avatar/45e4d63993e55fa97a27d49164bce80f?s=16&d=mm&r=g"
                                                 srcset="http://1.gravatar.com/avatar/45e4d63993e55fa97a27d49164bce80f?s=32&amp;d=mm&amp;r=g 2x"
                                                 class="avatar avatar-16 photo" height="16" width="16"/>
										</span>
                            <span class="user_name">John Doe</span></a>
                        <ul>
                            <li><a href="#" class="icon icon-doc-inv">New post</a></li>
                            <li><a href="#" class="icon icon-cog-1">Settings</a></li>
                        </ul>
                    </li>
                    <li class="menu_user_logout">
                        <a href="#" class="icon icon-logout">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="menu_user_area menu_user_left menu_user_contact_area">Contact us on 0 800 123-4567 or <a
                        href="#">support@themerex.net</a></div>
        </div>
    </div>
    <!-- /User menu -->
    <!-- Main menu -->
    <div class="menu_main_wrap logo_left" style="height: 116px">
        <div class="content_wrap clearfix">
            <!-- Logo -->
            <div class="logo">
                <a href="index.html">
                    <img src="images/logo_dark.png" class="logo_main" alt="">
                    <img src="images/logo_dark.png" class="logo_fixed" alt="">
                </a>
            </div>
            <!-- Logo -->
            <!-- Search -->
            <div class="search_wrap search_style_regular search_ajax" title="Open/close search form">
                <a href="#" class="search_icon icon-search-2"></a>

                <div class="search_form_wrap">
                    <form method="get" class="search_form" action="#">
                        <button type="submit" class="search_submit icon-zoom-1" title="Start search"></button>
                        <input type="text" class="search_field" placeholder="" value="" name="s" title=""/>
                    </form>
                </div>
                <div class="search_results widget_area bg_tint_light">
                    <a class="search_results_close icon-delete-2"></a>

                    <div class="search_results_content">
                    </div>
                </div>
            </div>
            <!-- /Search -->
            <!-- Navigation -->
            <a href="#" class="menu_main_responsive_button icon-menu-1"></a>
            <nav class="menu_main_nav_area">
                <ul id="menu_main" class="menu_main_nav">
                    <li class="menu-item"><a
                                href="{{URL::to('/')}}">Inici</a></li>
                    <li class="menu-item"><a
                                href="{{URL::to('/courses')}}">Blocs formatius</a></li>
                    <li class="menu-item"><a
                                href="{{URL::to('/video')}}">Videos</a></li>
                    <li class="menu-item current-menu-ancestor"><a
                                href="{{URL::to('/events')}}">Calendari</a></li>
                    <li class="menu-item"><a href="#">Bloc</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->
        </div>
    </div>
    <!-- /Main menu -->
</header>