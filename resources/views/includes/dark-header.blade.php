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
                        <a href="#" class="icon icon-logout">Cerrar sessión</a>
                    </li>
                </ul>
            </div>
            <div class="menu_user_area menu_user_left menu_user_contact_area">Contacte con nosotros en 0 800 123-4567 o <a
                        href="#">support@themerex.net</a></div>
        </div>
    </div>
    <!-- /User menu -->
    <!-- Main menu -->
    <div class="menu_main_wrap logo_left">
        <div class="content_wrap clearfix">
            <!-- Logo -->
            <div class="logo">
                <a href="index.html">
                    <img src="images/logo_dark.png" class="logo_main" alt="">
                    <img src="images/logo_dark.png" class="logo_fixed" alt="">
                </a>
            </div>
            <!-- Logo -->
            <!-- Navigation -->
            <a href="#" class="menu_main_responsive_button icon-menu-1"></a>
            <nav class="menu_main_nav_area">
                <ul id="menu_main" class="menu_main_nav">
                    <li class="menu-item @if($_SERVER['REQUEST_URI'] === "/") current-menu-parent current-menu-parent @endif"><a href="{{URL::to('/')}}">Inicio</a></li>
                    <li class="menu-item  @if($_SERVER['REQUEST_URI'] === "/courses" || $_SERVER['REQUEST_URI'] === "/exercices" || $_SERVER['REQUEST_URI'] === "/exercice" || $_SERVER['REQUEST_URI'] === "/exercice-1" || $_SERVER['REQUEST_URI'] === "/exercice-2") current-menu-ancestor current-menu-parent @endif"><a href="{{URL::to('/courses')}}">Bloques formativos</a></li>
                    <li class="menu-item  @if($_SERVER['REQUEST_URI'] === "/video") current-menu-ancestor current-menu-parent @endif"><a href="{{URL::to('/video')}}">Multimedia</a></li>
                    <li class="menu-item  @if($_SERVER['REQUEST_URI'] === "/events") current-menu-ancestor current-menu-parent @endif"><a href="{{URL::to('/events')}}">Calendario</a></li>
                    <li class="menu-item  @if($_SERVER['REQUEST_URI'] === "/blog" || $_SERVER['REQUEST_URI'] === "/blog-article") current-menu-ancestor current-menu-parent @endif" ><a href="{{URL::to('/blog')}}">Blog</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->
        </div>
    </div>
    <!-- /Main menu -->
</header>