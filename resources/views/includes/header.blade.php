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
                                   title="Add the current page into bookmarks">Afegeix a les adreçes d'interès</a></li>
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
                            <li><a href="#" class="icon icon-doc-inv">Nou post</a></li>
                            <li><a href="#" class="icon icon-cog-1">Configuració</a></li>
                        </ul>
                    </li>
                    <li class="menu_user_logout">
                        <a href="#" class="icon icon-logout">Tannca la sessió</a>
                    </li>
                </ul>
            </div>
            <div class="menu_user_area menu_user_left menu_user_contact_area">Contacte amb nosaltres al +34 800 123 456 o <a
                        href="#">support@insolaonline.com</a></div>
        </div>
    </div>
    <!-- /User menu -->
    <!-- Main menu -->
    <div class="menu_main_wrap logo_left">
        <div class="content_wrap clearfix">
            <!-- Logo -->
            <div class="logo">
                <a href="{{URL::to('/')}}">
                    <img src="images/logo_dark.png" class="logo_main" alt="">
                    <img src="images/logo_dark.png" class="logo_fixed" alt="">
                </a>
            </div>
            <!-- Logo -->
            <!-- Navigation -->
            <a href="#" class="menu_main_responsive_button icon-menu-1"></a>
            <nav class="menu_main_nav_area">
                <ul id="menu_main" class="menu_main_nav">
                    <li class="menu-item @if(Request::path() == '/') current-menu-parent current-menu-parent @endif"><a href="{{URL::to('/')}}">Inici</a></li>
                    <li class="menu-item {{Request::is('courses') || Request::is('exercices') || Request::is('exercice*') ? 'current-menu-ancestor current-menu-parent': ''}}"><a href="{{URL::to('/courses')}}">Blocs formatius</a></li>
                    <li class="menu-item  {{Request::is('video') ? 'current-menu-ancestor current-menu-parent':''}}"><a href="{{URL::to('/video')}}">Multimèdia</a></li>
                    <li class="menu-item  {{Request::is('events') ? 'current-menu-ancestor current-menu-parent':''}}"><a href="{{URL::to('/events')}}">Calendari</a></li>
                    <li class="menu-item  {{Request::is('blog*') ? 'current-menu-ancestor current-menu-parent':''}})" ><a href="{{URL::to('/blog')}}">Blog</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->
        </div>
    </div>
    <!-- /Main menu -->
</header>