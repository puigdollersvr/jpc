<!DOCTYPE html>
<html>
<head>
    <!-- Head -->
    @include('includes.head')
    <!-- /Head -->
    <!-- Styles -->
    @include('includes.styles')
    <!-- / Styles -->
</head>
    <body @yield('body-classes')>
        <a id="toc_top" class="sc_anchor" title="To Top"
           data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page"
           data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
        <!-- Body -->
        <div class="body_wrap">
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>

                <!-- Header -->
                @yield('header')
                <!-- /Header -->

                <!-- Slider -->
                @yield('slider')
                <!-- / Slider -->

                <!-- Content -->
                @yield('content')
                <!-- /Content -->

                <!-- Contacts Footer -->
                @include('includes.contacts-footer')
                <!-- /Contacts Footer -->

                <!-- Copyright -->
                @include('includes.copyright')
                <!-- /Copyright -->
            </div>
        </div>
        <!-- /Body -->
        <a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>
        @include('includes.scripts')
        </body>
</html>
<!-- Localized -->