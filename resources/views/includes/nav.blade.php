<!-- Navigation -->
<a href="#" class="menu_main_responsive_button icon-menu-1"></a>
<nav class="menu_main_nav_area">
    <ul id="menu_main" class="menu_main_nav">
        <li class="menu-item @if($_SERVER['REQUEST_URI'] === "/") current-menu-ancestor @endif"><a href="{{URL::to('/')}}">Inici</a></li>
        <li class="menu-item @if($_SERVER['REQUEST_URI'] === "/courses") current-menu-ancestor @endif"><a href="{{URL::to('/courses')}}">Blocs formatius</a></li>
        <li class="menu-item @if($_SERVER['REQUEST_URI'] === "/video") current-menu-ancestor @endif"><a href="{{URL::to('/video')}}">Multimèdia</a></li>
        <li class="menu-item @if($_SERVER['REQUEST_URI'] === "/events") current-menu-ancestor @endif"><a href="{{URL::to('/events')}}">Calendari</a></li>
        <li class="menu-item @if($_SERVER['REQUEST_URI'] === "/blog") current-menu-ancestor @endif" ><a href="{{URL::to('/blog')}}">Bloc</a></li>
    </ul>
</nav>
<!-- /Navigation -->


