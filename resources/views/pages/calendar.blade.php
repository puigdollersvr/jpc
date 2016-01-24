@extends('layouts.default')

@section('title')
    Calendari
@stop

@section('body-classes')
    class="archive body_style_wide body_filled article_style_stretch layout_excerpt top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide"
@stop

@section('header')
    @include('includes.dark-header')
@stop

@section('content')
    <!-- Page title -->
    <div class="page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="content_wrap">
            <h1 class="page_title">Calendario</h1>
        </div>
    </div>
    <!-- /Page title -->
    <!-- Content -->
    <div class="page_content_wrap">
        <!-- Events calendar -->
        <div class="content_wrap">
            <div class="content">
                <article class="post_item post_item_single page">
                    <section class="post_content">
                        <div class="sc_reviews alignright"></div>
                        <div id="tribe-events" class="tribe-no-js">
                            <div id="tribe-events-content-wrapper" class="tribe-clearfix">
                                <input type="hidden" id="tribe-events-list-hash" value="">

                                <div id="tribe-events-bar">
                                    <form id="tribe-bar-form" class="tribe-clearfix" name="tribe-bar-form" method="post"
                                          action="#">
                                        <div id="tribe-bar-collapse-toggle">
                                            Buscar eventos<span class="tribe-bar-toggle-arrow"></span>
                                        </div>
                                        <div id="tribe-bar-views">
                                            <div class="tribe-bar-views-inner tribe-clearfix">
                                                <h3 class="tribe-events-visuallyhidden">Event Views Navigation</h3>
                                                <label>Ver como</label>
                                                <ul class="tribe-bar-views-list">
                                                    <li class="tribe-bar-views-option tribe-bar-views-option-month tribe-bar-active"
                                                        data-tribe-bar-order="1" data-view="month">
                                                        <a href="#"><span class="tribe-icon-month">Mes</span></a>
                                                    </li>
                                                    <li class="tribe-bar-views-option tribe-bar-views-option-list"
                                                        data-tribe-bar-order="0" data-view="list">
                                                        <a href="#"><span class="tribe-icon-list">Lista</span></a>
                                                    </li>
                                                    <li class="tribe-bar-views-option tribe-bar-views-option-day"
                                                        data-tribe-bar-order="2" data-view="day">
                                                        <a href="#"><span class="tribe-icon-day">Día</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tribe-bar-filters">
                                            <div class="tribe-bar-filters-inner tribe-clearfix">
                                                <div class="tribe-bar-date-filter">
                                                    <label class="label-tribe-bar-date" for="tribe-bar-date">Eventos
                                                        en</label>
                                                    <input type="text" class="pos_rel" name="tribe-bar-date"
                                                           id="tribe-bar-date" value="" placeholder="Fecha">
                                                    <input type="hidden" name="tribe-bar-date-day"
                                                           id="tribe-bar-date-day" class="tribe-no-param" value="">
                                                </div>
                                                <div class="tribe-bar-search-filter">
                                                    <label class="label-tribe-bar-search"
                                                           for="tribe-bar-search">Buscar</label>
                                                    <input type="text" name="tribe-bar-search" id="tribe-bar-search"
                                                           value="" placeholder="Buscar">
                                                </div>
                                                <div class="tribe-bar-submit">
                                                    <input class="tribe-events-button tribe-no-param" type="submit"
                                                           name="submit-bar" value="Buscar eventos"/>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="tribe-events-content" class="tribe-events-month">
                                    <h2 class="tribe-events-page-title">Enero 2016</h2>

                                    <div id="tribe-events-header"
                                         data-title="Events for September 2015 | Education Center">
                                        <h3 class="tribe-events-visuallyhidden">Calendar Month Navigation</h3>
                                        <ul class="tribe-events-sub-nav">
                                            <li class="tribe-events-nav-previous">
                                                <a data-month="2015-08" href="#" rel="prev">
                                                    <span>&laquo;</span> August </a>
                                            </li>
                                            <li class="tribe-events-nav-next"></li>
                                        </ul>
                                    </div>
                                    <table class="tribe-events-calendar">
                                        <thead>
                                        <tr>
                                            <th id="tribe-events-monday" title="Monday" data-day-abbr="Mon">Lun</th>
                                            <th id="tribe-events-tuesday" title="Tuesday" data-day-abbr="Tue">Mar</th>
                                            <th id="tribe-events-wednesday" title="Wednesday" data-day-abbr="Wed">Mie
                                            </th>
                                            <th id="tribe-events-thursday" title="Thursday" data-day-abbr="Thu">Jue</th>
                                            <th id="tribe-events-friday" title="Friday" data-day-abbr="Fri">Vie</th>
                                            <th id="tribe-events-saturday" title="Saturday" data-day-abbr="Sat">Sáb</th>
                                            <th id="tribe-events-sunday" title="Sunday" data-day-abbr="Sun">Dom</th>
                                        </tr>
                                        </thead>
                                        <tbody class="vcalendar">
                                        <tr>
                                            <td class="tribe-events-othermonth tribe-events-past mobile-trigger">
                                                <div id="tribe-events-daynum-31">
                                                    31
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-past mobile-trigger">
                                                <div id="tribe-events-daynum-1">
                                                    1
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-past mobile-trigger">
                                                <div id="tribe-events-daynum-2">
                                                    2
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-past mobile-trigger">
                                                <div id="tribe-events-daynum-3">
                                                    3
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-past mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-4">
                                                    4
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-past mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-5">
                                                    5
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-past mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-6">
                                                    6
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tribe-events-thismonth tribe-events-past mobile-trigger">
                                                <div id="tribe-events-daynum-7">
                                                    7
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-present mobile-trigger">
                                                <div id="tribe-events-daynum-8">
                                                    8
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger">
                                                <div id="tribe-events-daynum-9">
                                                    9
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger">
                                                <div id="tribe-events-daynum-10">
                                                    10
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-11">
                                                    11
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-12">
                                                    12
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-13">
                                                    13
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger">
                                                <div id="tribe-events-daynum-14">
                                                    14
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger">
                                                <div id="tribe-events-daynum-15">
                                                    15
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger">
                                                <div id="tribe-events-daynum-16">
                                                    16
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future tribe-events-has-events mobile-trigger">
                                                <div id="tribe-events-daynum-17">
                                                    <a href="event-example.html">17</a>
                                                </div>
                                                <div id="tribe-events-event-1"
                                                     class="tribe_events type-tribe_events tribe-events-last">
                                                    <h3 class="tribe-events-month-event-title entry-title summary">
                                                        <a href="event-example.html" class="url">Evento de ejemplo</a>
                                                    </h3>

                                                    <div class="tribe-events-tooltip" id="tribe-events-tooltip-1">
                                                        <h4 class="entry-title summary">Evento de ejemplo</h4>

                                                        <div class="tribe-events-event-body">
                                                            <div class="duration">
                                                                <abbr class="tribe-events-abbr updated published dtstart">Setiembre
                                                                    17</abbr>
                                                            </div>
                                                            <div class="tribe-events-event-thumb">
                                                                <img alt="Event Example"
                                                                     src="images/masonry_17-75x75.jpg">
                                                            </div>
                                                            <p class="entry-summary description">Nuevo evento de ejemplo</p>
                                                            <span class="tribe-events-arrow"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-18">
                                                    18
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-19">
                                                    19
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-20">
                                                    20
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger">
                                                <div id="tribe-events-daynum-21">
                                                    21
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger">
                                                <div id="tribe-events-daynum-22">
                                                    22
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger">
                                                <div id="tribe-events-daynum-23">
                                                    23
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger">
                                                <div id="tribe-events-daynum-24">
                                                    24
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-25">
                                                    25
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-26">
                                                    26
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-27">
                                                    27
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger">
                                                <div id="tribe-events-daynum-28">
                                                    28
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger">
                                                <div id="tribe-events-daynum-29">
                                                    29
                                                </div>
                                            </td>
                                            <td class="tribe-events-thismonth tribe-events-future mobile-trigger">
                                                <div id="tribe-events-daynum-30">
                                                    30
                                                </div>
                                            </td>
                                            <td class="tribe-events-othermonth tribe-events-future mobile-trigger">
                                                <div id="tribe-events-daynum-1-new">
                                                    1
                                                </div>
                                            </td>
                                            <td class="tribe-events-othermonth tribe-events-future mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-2-new">
                                                    2
                                                </div>
                                            </td>
                                            <td class="tribe-events-othermonth tribe-events-future mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-3-new">
                                                    3
                                                </div>
                                            </td>
                                            <td class="tribe-events-othermonth tribe-events-future mobile-trigger tribe-events-right">
                                                <div id="tribe-events-daynum-4-new">
                                                    4
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div id="tribe-events-footer">
                                        <h3 class="tribe-events-visuallyhidden">Calendar Month Navigation</h3>
                                        <ul class="tribe-events-sub-nav">
                                            <li class="tribe-events-nav-previous">
                                                <a href="#" rel="prev"><span>&laquo;</span> Diciembre </a></li>
                                            <li class="tribe-events-nav-next"></li>
                                        </ul>
                                    </div>
                                    <a class="tribe-events-ical tribe-events-button"
                                       title="Use this to share calendar data with Google Calendar, Apple iCal and other compatible apps"
                                       href="#">+ Exportar eventos Mensulales</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
            </div>
        </div>
        <!-- /Events calendar -->
    </div>
    <!-- /Content -->
@stop