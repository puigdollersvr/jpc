function themerex_init_actions() {
    "use strict";
    return THEMEREX_GLOBALS.vc_edit_mode && 0 == jQuery(".vc_empty-placeholder").length && THEMEREX_GLOBALS.theme_init_counter++ < 30 ? void setTimeout(themerex_init_actions, 200) : (themerex_ready_actions(), themerex_resize_actions(), themerex_scroll_actions(), jQuery(window).resize(function () {
        themerex_resize_actions()
    }), void jQuery(window).scroll(function () {
        themerex_scroll_actions()
    }))
}
function themerex_ready_actions() {
    "use strict";
    window.themerex_skin_ready_actions && themerex_skin_ready_actions(), jQuery(".widget_area ul > li").each(function () {
        jQuery(this).find("ul").length > 0 && jQuery(this).addClass("has_children")
    }), jQuery(".widget_archive a").each(function () {
        var e = jQuery(this).html().split(" ");
        e.length > 1 && (e[e.length - 1] = "<span>" + e[e.length - 1] + "</span>", jQuery(this).html(e.join(" ")))
    }), jQuery(".widget_calendar").on("click", ".month_prev a, .month_next a", function (e) {
        var t = jQuery(this).parents(".wp-calendar"), s = jQuery(this).data("month"), i = jQuery(this).data("year"), r = jQuery(this).data("type");
        return jQuery.post(THEMEREX_GLOBALS.ajax_url, {
            action: "calendar_change_month",
            nonce: THEMEREX_GLOBALS.ajax_nonce,
            month: s,
            year: i,
            post_type: r
        }).done(function (e) {
            var s = JSON.parse(e);
            "" === s.error && t.parent().fadeOut(200, function () {
                jQuery(this).find(".wp-calendar").remove(), jQuery(this).append(s.data).fadeIn(200)
            })
        }), e.preventDefault(), !1
    }), jQuery(".video_background").each(function () {
        var e = jQuery(this).data("youtube-code");
        e && jQuery(this).tubular({videoId: e})
    }), jQuery(".menu_main_wrap ul#menu_main").clone().removeAttr("id").removeClass("menu_main_nav").addClass("menu_main_responsive").insertAfter(".menu_main_wrap ul#menu_main"), jQuery(".menu_main_responsive_button").click(function (e) {
        return jQuery(".menu_main_responsive").slideToggle(), e.preventDefault(), !1
    }), jQuery(".menu_main_wrap .menu_main_responsive li a").click(function (e) {
        return jQuery("body").hasClass("responsive_menu") && jQuery(this).parent().hasClass("menu-item-has-children") && (jQuery(this).siblings("ul:visible").length > 0 ? jQuery(this).siblings("ul").slideUp().parent().removeClass("opened") : jQuery(this).siblings("ul").slideDown().parent().addClass("opened")), "#" == jQuery(this).attr("href") || jQuery("body").hasClass("responsive_menu") && jQuery(this).parent().hasClass("menu-item-has-children") ? (e.preventDefault(), !1) : void 0
    }), themerex_init_sfmenu(".menu_main_wrap ul#menu_main, .menu_user_wrap ul#menu_user"), THEMEREX_GLOBALS.menu_slider && jQuery("#menu_main").spasticNav({color: THEMEREX_GLOBALS.menu_color}), "no" != THEMEREX_GLOBALS.toc_menu && themerex_build_page_toc(), jQuery("#toc, .menu_main_wrap ul li, .menu_user_wrap ul#menu_user li").on("click", "a", function (e) {
        var t = jQuery(this).attr("href");
        if (void 0 !== t) {
            var s = t.indexOf("#");
            if (!(0 > s || 1 == t.length) && jQuery(t.substr(s)).length > 0) {
                var i = window.location.href, r = i.indexOf("#");
                r > 0 && (i = i.substring(0, r));
                var a = 0 == s;
                if (a || (a = i == t.substring(0, s)), a)return themerex_document_animate_to(t.substr(s)), themerex_document_set_location(0 == s ? i + t : t), e.preventDefault(), !1
            }
        }
    }), THEMEREX_GLOBALS.top_panel_height = 0, jQuery(".pager_cur").click(function (e) {
        return jQuery(".pager_slider").slideDown(300, function () {
            themerex_init_shortcodes(jQuery(".pager_slider").eq(0))
        }), e.preventDefault(), !1
    }), jQuery("#viewmore_link").click(function (e) {
        return THEMEREX_GLOBALS.viewmore_busy || jQuery(this).hasClass("viewmore_empty") || (jQuery(this).parent().addClass("loading"), THEMEREX_GLOBALS.viewmore_busy = !0, jQuery.post(THEMEREX_GLOBALS.ajax_url, {
            action: "view_more_posts",
            nonce: THEMEREX_GLOBALS.ajax_nonce,
            page: THEMEREX_GLOBALS.viewmore_page + 1,
            data: THEMEREX_GLOBALS.viewmore_data,
            vars: THEMEREX_GLOBALS.viewmore_vars
        }).done(function (e) {
            var t = JSON.parse(e);
            if (jQuery("#viewmore_link").parent().removeClass("loading"), THEMEREX_GLOBALS.viewmore_busy = !1, "" === t.error) {
                var s = jQuery(".content").eq(0);
                s.find(".isotope_wrap").length > 0 && (s = s.find(".isotope_wrap").eq(0)), s.hasClass("isotope_wrap") ? (s.data("last-width", 0).append(t.data), THEMEREX_GLOBALS.isotope_init_counter = 0, themerex_init_appended_isotope(s, t.filters)) : jQuery("#viewmore").before(t.data), THEMEREX_GLOBALS.viewmore_page++, 1 == t.no_more_data && jQuery("#viewmore_link").addClass("viewmore_empty").parent().hide(), themerex_init_post_formats(), themerex_init_shortcodes(s), themerex_scroll_actions()
            }
        })), e.preventDefault(), !1
    }), jQuery(".woocommerce .mode_buttons a,.woocommerce-page .mode_buttons a").click(function (e) {
        var t = jQuery(this).hasClass("woocommerce_thumbs") ? "thumbs" : "list";
        return jQuery.cookie("themerex_shop_mode", t, {
            expires: 365,
            path: "/"
        }), jQuery(this).siblings("input").val(t).parents("form").get(0).submit(), e.preventDefault(), !1
    }), jQuery("body").bind("added_to_cart", function () {
        var e = jQuery(".menu_user_cart .total .amount").text();
        void 0 != e && jQuery(".cart_button .cart_total").text(e)
    }), jQuery(".menu_user_wrap .popup_link").addClass("inited").click(function (e) {
        var t = jQuery(jQuery(this).attr("href"));
        return 1 === t.length && (themerex_hide_popup(jQuery(t.hasClass("popup_login") ? ".popup_registration" : ".popup_login")), themerex_toggle_popup(t)), e.preventDefault(), !1
    }), jQuery(".popup_wrap .popup_close").click(function (e) {
        var t = jQuery(this).parent();
        return 1 === t.length && themerex_hide_popup(t), e.preventDefault(), !1
    }), jQuery(".popup_form.login_form").submit(function (e) {
        var t = themerex_login_validate(jQuery(this));
        return t || e.preventDefault(), t
    }), jQuery(".popup_form.registration_form").submit(function (e) {
        var t = themerex_registration_validate(jQuery(this));
        return t || e.preventDefault(), t
    }), jQuery("form#commentform").submit(function (e) {
        var t = themerex_comments_validate(jQuery(this));
        return t || e.preventDefault(), t
    }), jQuery(".bookmarks_add").click(function (e) {
        var t = window.document.title.split("|")[0], s = window.location.href, i = jQuery.cookie("themerex_bookmarks"), r = !1;
        if (i) {
            i = JSON.parse(i);
            for (var a = 0; a < i.length; a++)if (i[a].url == s) {
                r = !0;
                break
            }
        } else i = new Array;
        if (r)themerex_message_warning(THEMEREX_GLOBALS.strings.bookmark_exists, THEMEREX_GLOBALS.strings.bookmark_add); else var n = themerex_message_dialog('<label for="bookmark_title">' + THEMEREX_GLOBALS.strings.bookmark_title + '</label><br><input type="text" id="bookmark_title" name="bookmark_title" value="' + t + '">', THEMEREX_GLOBALS.strings.bookmark_add, null, function (e) {
            1 == e && (t = n.find("#bookmark_title").val(), i.push({
                title: t,
                url: s
            }), jQuery(".bookmarks_list").append('<li><a href="' + s + '" class="bookmarks_item">' + t + '<span class="bookmarks_delete icon-cancel-1" title="' + THEMEREX_GLOBALS.strings.bookmark_del + '"></span></a></li>'), jQuery.cookie("themerex_bookmarks", JSON.stringify(i), {
                expires: 365,
                path: "/"
            }), setTimeout(function () {
                themerex_message_success(THEMEREX_GLOBALS.strings.bookmark_added, THEMEREX_GLOBALS.strings.bookmark_add)
            }, THEMEREX_GLOBALS.message_timeout / 4))
        });
        return e.preventDefault(), !1
    }), jQuery(".bookmarks_list").on("click", ".bookmarks_delete", function (e) {
        var t = jQuery(this).parent().index(), s = jQuery.cookie("themerex_bookmarks");
        return s && (s = JSON.parse(s), s.splice(t, 1), jQuery.cookie("themerex_bookmarks", JSON.stringify(s), {
            expires: 365,
            path: "/"
        })), jQuery(this).parent().remove(), e.preventDefault(), !1
    }), jQuery(".scroll_to_top").click(function (e) {
        return jQuery("html,body").animate({scrollTop: 0}, "slow"), e.preventDefault(), !1
    }), themerex_show_system_message(), themerex_init_post_formats(), themerex_init_shortcodes(jQuery("body").eq(0)), window.themerex_init_hidden_elements && themerex_init_hidden_elements(jQuery("body").eq(0))
}
function themerex_scroll_actions() {
    "use strict";
    {
        var e = jQuery(window).scrollTop(), t = jQuery(".scroll_to_top");
        Math.max(0, jQuery("#wpadminbar").height())
    }
    if (0 == THEMEREX_GLOBALS.top_panel_height && (THEMEREX_GLOBALS.top_panel_height = jQuery(".top_panel_wrap").height()), window.themerex_skin_scroll_actions && themerex_skin_scroll_actions(), e > THEMEREX_GLOBALS.top_panel_height ? t.addClass("show") : t.removeClass("show"), !jQuery("body").hasClass("responsive_menu") && THEMEREX_GLOBALS.menu_fixed) {
        var s = 0;
        jQuery(".top_panel_below .slider_wrap").length > 0 && (s = jQuery(".top_panel_below .slider_wrap").height(), 10 > s && (s = jQuery(".slider_wrap").hasClass(".slider_fullscreen") ? jQuery(window).height() : THEMEREX_GLOBALS.slider_height)), e <= s + THEMEREX_GLOBALS.top_panel_height ? jQuery("body").hasClass("top_panel_fixed") && jQuery("body").removeClass("top_panel_fixed") : e > s + THEMEREX_GLOBALS.top_panel_height && (jQuery("body").hasClass("top_panel_fixed") || (jQuery(".top_panel_fixed_wrap").height(THEMEREX_GLOBALS.top_panel_height), jQuery(".top_panel_wrap").css("marginTop", "-150px").animate({marginTop: 0}, 500), jQuery("body").addClass("top_panel_fixed")))
    }
    jQuery("#toc .toc_item").each(function () {
        var t = jQuery(this).find("a").attr("href"), s = t.indexOf("#");
        if (!(0 > s || 1 == t.length)) {
            var i = window.location.href, r = i.indexOf("#");
            r > 0 && (i = i.substring(0, r));
            var a = 0 == s;
            if (a || (a = i == href.substring(0, s)), a) {
                var n = jQuery(t).offset().top, o = jQuery(this).next().find("a").attr("href"), _ = o ? jQuery(o).offset().top : 1e6;
                n < e + .8 * jQuery(window).height() && e + THEMEREX_GLOBALS.top_panel_height < _ ? jQuery(this).addClass("current") : jQuery(this).removeClass("current")
            }
        }
    }), themerex_infinite_scroll(), themerex_parallax_scroll(), themerex_animation_shortcodes()
}
function themerex_infinite_scroll() {
    "use strict";
    if (!THEMEREX_GLOBALS.viewmore_busy) {
        var e = jQuery("#viewmore.pagination_infinite");
        if (e.length > 0) {
            var t = e.find("#viewmore_link:not(.viewmore_empty)");
            t.length > 0 && jQuery(window).scrollTop() + jQuery(window).height() + 100 >= e.offset().top && t.eq(0).trigger("click")
        }
    }
}
function themerex_parallax_scroll() {
    jQuery(".sc_parallax").each(function () {
        var e = jQuery(window).height(), t = jQuery(window).scrollTop(), s = Math.max(jQuery(this).offset().top, e);
        if (t + e >= s) {
            var i = Number(jQuery(this).data("parallax-speed")), r = jQuery(this).data("parallax-x-pos"), a = Math.round((s - t - e) * i + (0 > i ? e * i : 0));
            jQuery(this).find(".sc_parallax_content").css("backgroundPosition", r + " " + a + "px"), jQuery(this).find("div.sc_video_bg").css("top", a + "px")
        }
    })
}
function themerex_resize_actions() {
    "use strict";
    window.themerex_skin_resize_actions && themerex_skin_resize_actions(), themerex_responsive_menu(), themerex_video_dimensions(), themerex_resize_video_background(), themerex_resize_fullscreen_slider()
}
function themerex_responsive_menu() {
    themerex_is_responsive_need(THEMEREX_GLOBALS.menu_responsive) ? jQuery("body").hasClass("responsive_menu") || (jQuery("body").removeClass("top_panel_fixed").addClass("responsive_menu"), jQuery("body").hasClass("menu_relayout") && jQuery("body").removeClass("menu_relayout menu_left").addClass("menu_right"), jQuery("ul.menu_main_nav").hasClass("inited") && jQuery("ul.menu_main_nav").removeClass("inited").superfish("destroy")) : (jQuery("body").hasClass("responsive_menu") && (jQuery("body").removeClass("responsive_menu"), jQuery(".menu_main_responsive").hide(), themerex_init_sfmenu("ul.menu_main_nav"), jQuery(".menu_main_nav_area").show()), themerex_is_responsive_need(THEMEREX_GLOBALS.menu_relayout) ? jQuery("body").hasClass("menu_right") && jQuery("body").removeClass("menu_right").addClass("menu_relayout menu_left") : jQuery("body").hasClass("menu_relayout") && jQuery("body").removeClass("menu_relayout menu_left").addClass("menu_right")), jQuery(".menu_main_wrap").hasClass("menu_show") || jQuery(".menu_main_wrap").addClass("menu_show")
}
function themerex_is_responsive_need(e) {
    "use strict";
    var t = !1;
    if (e > 0) {
        var s = window.innerWidth;
        void 0 == s && (s = jQuery(window).width() + (jQuery(window).height() < jQuery(document).height() || jQuery(window).scrollTop() > 0 ? 16 : 0)), t = e > s
    }
    return t
}
function themerex_video_dimensions() {
    jQuery(".sc_video_frame").each(function () {
        "use strict";
        var e = jQuery(this).eq(0), t = (e.parent(), e.data("ratio") ? e.data("ratio").split(":") : e.find("[data-ratio]").length > 0 ? e.find("[data-ratio]").data("ratio").split(":") : [16, 9]);
        t = 2 != t.length || 0 == t[0] || 0 == t[1] ? 16 / 9 : t[0] / t[1];
        var s = e.data("width"), i = e.data("height");
        if (s && i) {
            var r = "%" == ("" + s).substr(-1);
            s = parseInt(s), i = parseInt(i);
            var a = Math.min(r ? 1e4 : s, e.parents("div,article").width()), n = Math.round(r ? a / t : a / s * i);
            parseInt(e.attr("data-last-width")) != a && (r ? e.height(n) : e.css({
                width: a + "px",
                height: n + "px"
            }), e.attr("data-last-width", a))
        }
    }), jQuery("video.sc_video,video.wp-video-shortcode").each(function () {
        "use strict";
        var e = jQuery(this).eq(0), t = void 0 != e.data("ratio") ? e.data("ratio").split(":") : [16, 9];
        t = 2 != t.length || 0 == t[0] || 0 == t[1] ? 16 / 9 : t[0] / t[1];
        var s = e.parents(".mejs-video"), i = e.parents(".sc_video_frame"), r = i.length > 0 ? i.data("width") : e.data("width"), a = i.length > 0 ? i.data("height") : e.data("height");
        if (!r || !a) {
            if (r = e.attr("width"), a = e.attr("height"), !r || !a)return;
            e.data({width: r, height: a})
        }
        var n = "%" == ("" + r).substr(-1);
        r = parseInt(r), a = parseInt(a);
        var o = Math.round(s.length > 0 ? Math.min(n ? 1e4 : r, s.parents("div,article").width()) : e.width()), _ = Math.round(n ? o / t : o / r * a);
        parseInt(e.attr("data-last-width")) != o && (s.length > 0 && mejs && themerex_set_mejs_player_dimensions(e, o, _), n ? e.height(_) : e.attr({
            width: o,
            height: _
        }).css({width: o + "px", height: _ + "px"}), e.attr("data-last-width", o))
    }), jQuery("video.sc_video_bg").each(function () {
        "use strict";
        var e = jQuery(this).eq(0), t = void 0 != e.data("ratio") ? e.data("ratio").split(":") : [16, 9];
        t = 2 != t.length || 0 == t[0] || 0 == t[1] ? 16 / 9 : t[0] / t[1];
        var s = e.parents(".mejs-video"), i = s.length > 0 ? s.parent() : e.parent(), r = i.width(), a = i.height(), n = Math.ceil(a * t), o = Math.ceil(r / t);
        if (e.parents(".sc_parallax").length > 0) {
            var _ = jQuery(window).height(), l = Number(e.parents(".sc_parallax").data("parallax-speed")), u = Math.ceil(Math.abs((_ - a) * l));
            a + u > o && (o = a + u, n = Math.ceil(o * t))
        }
        a > o && (o = a, n = Math.ceil(o * t)), r > n && (n = r, o = Math.ceil(n / t));
        var d = Math.round((n - r) / 2), m = Math.round((o - a) / 2);
        parseInt(e.attr("data-last-width")) != n && (s.length > 0 ? (themerex_set_mejs_player_dimensions(e, n, o), s.css({
            left: -d + "px",
            top: -m + "px"
        })) : e.css({left: -d + "px", top: -m + "px"}), e.attr({
            width: n,
            height: o,
            "data-last-width": n
        }).css({width: n + "px", height: o + "px"}), 0 == e.css("opacity") && e.animate({opacity: 1}, 3e3))
    }), jQuery("iframe").each(function () {
        "use strict";
        var e = jQuery(this).eq(0), t = void 0 != e.data("ratio") ? e.data("ratio").split(":") : e.find("[data-ratio]").length > 0 ? e.find("[data-ratio]").data("ratio").split(":") : [16, 9];
        t = 2 != t.length || 0 == t[0] || 0 == t[1] ? 16 / 9 : t[0] / t[1];
        var s = e.attr("width"), i = e.attr("height"), r = e.parents(".sc_video_frame");
        if (r.length > 0 && (s = r.data("width"), i = r.data("height")), s && i) {
            var a = "%" == ("" + s).substr(-1);
            s = parseInt(s), i = parseInt(i);
            var n = r.length > 0 ? r.width() : e.width(), o = Math.round(a ? n / t : n / s * i);
            parseInt(e.attr("data-last-width")) != n && e.css({width: n + "px", height: o + "px"})
        }
    })
}
function themerex_resize_video_background() {
    var e = jQuery(".video_bg");
    if (!(e.length < 1)) {
        if (THEMEREX_GLOBALS.media_elements_enabled && 0 == e.find(".mejs-video").length)return void setTimeout(themerex_resize_video_background, 100);
        var t = e.find("video"), s = void 0 != t.data("ratio") ? t.data("ratio").split(":") : [16, 9];
        s = 2 != s.length || 0 == s[0] || 0 == s[1] ? 16 / 9 : s[0] / s[1];
        var i = e.width(), r = e.height(), a = Math.ceil(r * s), n = Math.ceil(i / s);
        r > n && (n = r, a = Math.ceil(n * s)), i > a && (a = i, n = Math.ceil(a / s));
        var o = Math.round((a - i) / 2), _ = Math.round((n - r) / 2);
        e.find(".mejs-container").length > 0 ? (themerex_set_mejs_player_dimensions(e.find("video"), a, n), e.find(".mejs-container").css({
            left: -o + "px",
            top: -_ + "px"
        })) : e.find("video").css({left: -o + "px", top: -_ + "px"}), e.find("video").attr({
            width: a,
            height: n
        }).css({width: a + "px", height: n + "px"})
    }
}
function themerex_set_mejs_player_dimensions(e, t, s) {
    if (mejs)for (var i in mejs.players)mejs.players[i].media.src == e.attr("src") && (mejs.players[i].media.setVideoSize && mejs.players[i].media.setVideoSize(t, s), mejs.players[i].setPlayerSize(t, s), mejs.players[i].setControlsSize())
}
function themerex_resize_fullscreen_slider() {
    var e = jQuery(".slider_wrap.slider_fullscreen");
    if (!(e.length < 1)) {
        var t = e.find(".sc_slider_swiper");
        if (!(t.length < 1)) {
            var s = jQuery(window).height() - jQuery("#wpadminbar").height() - (jQuery("body").hasClass("top_panel_above") && !jQuery("body").hasClass(".top_panel_fixed") ? jQuery(".top_panel_wrap").height() : 0);
            t.height(s)
        }
    }
}
function themerex_init_sfmenu(e) {
    jQuery(e).show().each(function () {
        themerex_is_responsive_need() && "menu_main" == jQuery(this).attr("id") || jQuery(this).addClass("inited").superfish({
            delay: 500,
            animation: {opacity: "show"},
            animationOut: {opacity: "hide"},
            speed: THEMEREX_GLOBALS.css_animation ? 500 : THEMEREX_GLOBALS.menu_slider ? 300 : 200,
            speedOut: THEMEREX_GLOBALS.css_animation ? 500 : THEMEREX_GLOBALS.menu_slider ? 300 : 200,
            autoArrows: !1,
            dropShadows: !1,
            onBeforeShow: function () {
                if (jQuery(this).parents("ul").length > 1) {
                    var e = jQuery(window).width(), t = jQuery(this).parents("ul").offset().left, s = jQuery(this).parents("ul").outerWidth(), i = jQuery(this).outerWidth();
                    t + s + i > e - 20 && t - i > 0 ? jQuery(this).addClass("submenu_left") : jQuery(this).removeClass("submenu_left")
                }
                THEMEREX_GLOBALS.css_animation && (jQuery(this).removeClass("animated fast " + THEMEREX_GLOBALS.menu_animation_out), jQuery(this).addClass("animated fast " + THEMEREX_GLOBALS.menu_animation_in))
            },
            onBeforeHide: function () {
                THEMEREX_GLOBALS.css_animation && (jQuery(this).removeClass("animated fast " + THEMEREX_GLOBALS.menu_animation_in), jQuery(this).addClass("animated fast " + THEMEREX_GLOBALS.menu_animation_out))
            }
        })
    })
}
function themerex_build_page_toc() {
    "use strict";
    var e = "", t = 0;
    jQuery('[id^="toc_"],.sc_anchor').each(function () {
        var s = jQuery(this), i = s.attr("id"), r = s.data("url"), a = s.data("icon");
        a || (a = "icon-record");
        var n = s.attr("title"), o = s.data("description"), _ = s.data("separator");
        t++, e += '<div class="toc_item' + ("yes" == _ ? " toc_separator" : "") + '">' + (o ? '<div class="toc_description">' + o + "</div>" : "") + '<a href="' + (r ? r : "#" + i) + '" class="toc_icon' + (n ? " with_title" : "") + " " + a + '">' + (n ? '<span class="toc_title">' + n + "</span>" : "") + "</a></div>"
    }), t > (THEMEREX_GLOBALS.toc_menu_home ? 1 : 0) + (THEMEREX_GLOBALS.toc_menu_top ? 1 : 0) && (jQuery("#toc").length > 0 ? jQuery("#toc .toc_inner").html(e) : jQuery("body").append('<div id="toc" class="toc_' + THEMEREX_GLOBALS.toc_menu + '"><div class="toc_inner">' + e + "</div></div>"))
}
function themerex_init_isotope() {
    "use strict";
    var e = !0;
    return jQuery(".isotope_wrap:not(.inited)").each(function () {
        e = e && themerex_check_images_complete(jQuery(this))
    }), !e && THEMEREX_GLOBALS.isotope_init_counter++ < 30 ? void setTimeout(themerex_init_isotope, 200) : (jQuery(".isotope_filters:not(.inited)").addClass("inited").on("click", "a", function (e) {
        jQuery(this).parents(".isotope_filters").find("a").removeClass("active"), jQuery(this).addClass("active");
        var t = jQuery(this).data("filter");
        return jQuery(this).parents(".isotope_filters").siblings(".isotope_wrap").eq(0).isotope({filter: t}), "*" == t ? jQuery("#viewmore_link").fadeIn() : jQuery("#viewmore_link").fadeOut(), e.preventDefault(), !1
    }), void jQuery(".isotope_wrap:not(.inited)").each(function () {
        var e = jQuery(this);
        return themerex_init_shortcodes(e), e.parents(".sc_scroll").length > 0 ? void e.addClass("inited").find(".isotope_item").animate({opacity: 1}, 200, function () {
            jQuery(this).addClass("isotope_item_show")
        }) : void setTimeout(function () {
            e.addClass("inited").isotope({
                itemSelector: ".isotope_item",
                animationOptions: {duration: 750, easing: "linear", queue: !1}
            }), e.find(".isotope_item").animate({opacity: 1}, 200, function () {
                jQuery(this).addClass("isotope_item_show")
            })
        }, 500)
    }))
}
function themerex_init_appended_isotope(e, t) {
    "use strict";
    if (!(e.parents(".sc_scroll_horizontal").length > 0)) {
        if (!themerex_check_images_complete(e) && THEMEREX_GLOBALS.isotope_init_counter++ < 30)return void setTimeout(function () {
            themerex_init_appended_isotope(e, t)
        }, 200);
        var s = e.siblings(".isotope_filter");
        for (var i in t)0 == s.find('a[data-filter=".flt_' + i + '"]').length && s.append('<a href="#" class="isotope_filters_button" data-filter=".flt_' + i + '">' + t[i] + "</a>");
        themerex_init_shortcodes(e);
        var r = e.find(".isotope_item:not(.isotope_item_show)");
        setTimeout(function () {
            e.isotope("appended", r), r.animate({opacity: 1}, 200, function () {
                jQuery(this).addClass("isotope_item_show")
            })
        }, 500)
    }
}
function themerex_init_post_formats() {
    "use strict";
    if (themerex_init_media_elements(jQuery("body")), jQuery(".isotope_wrap:not(.inited)").length > 0 && (THEMEREX_GLOBALS.isotope_init_counter = 0, themerex_init_isotope()), jQuery(".isotope_wrap .isotope_item_content.square.effect_dir:not(.inited)").length > 0 && jQuery(".isotope_wrap .isotope_item_content.square.effect_dir:not(.inited)").each(function () {
            jQuery(this).addClass("inited").hoverdir()
        }), "pretty" == THEMEREX_GLOBALS.popup_engine) {
        jQuery("a[href$='jpg'],a[href$='jpeg'],a[href$='png'],a[href$='gif']").attr("rel", "prettyPhoto" + (THEMEREX_GLOBALS.popup_gallery ? "[slideshow]" : ""));
        var e = jQuery("a[rel*='prettyPhoto']:not(.inited):not([data-rel*='pretty']):not([rel*='magnific']):not([data-rel*='magnific'])").addClass("inited");
        try {
            e.prettyPhoto({social_tools: "", theme: "facebook", deeplinking: !1})
        } catch (t) {
        }
    } else if ("magnific" == THEMEREX_GLOBALS.popup_engine) {
        jQuery("a[href$='jpg'],a[href$='jpeg'],a[href$='png'],a[href$='gif']").attr("rel", "magnific");
        var e = jQuery("a[rel*='magnific']:not(.inited):not(.prettyphoto):not([rel*='pretty']):not([data-rel*='pretty'])").addClass("inited");
        try {
            e.magnificPopup({
                type: "image",
                mainClass: "mfp-img-mobile",
                closeOnContentClick: !0,
                closeBtnInside: !0,
                fixedContentPos: !0,
                midClick: !0,
                preloader: !0,
                tLoading: THEMEREX_GLOBALS.strings.magnific_loading,
                gallery: {enabled: THEMEREX_GLOBALS.popup_gallery},
                image: {tError: THEMEREX_GLOBALS.strings.magnific_error, verticalFit: !0}
            })
        } catch (t) {
        }
    }
    jQuery(".post_item_product .product .images a.woocommerce-main-image:not(.hover_icon)").addClass("hover_icon hover_icon_view"), jQuery(".post_counters_likes:not(.inited)").length > 0 && jQuery(".post_counters_likes:not(.inited)").addClass("inited").click(function (e) {
        var t = jQuery(this), s = t.hasClass("enabled") ? 1 : -1, i = t.data("postid"), r = Number(t.data("likes")) + s, a = themerex_get_cookie("themerex_likes");
        return (void 0 === a || null === a) && (a = ""), jQuery.post(THEMEREX_GLOBALS.ajax_url, {
            action: "post_counter",
            nonce: THEMEREX_GLOBALS.ajax_nonce,
            post_id: i,
            likes: r
        }).done(function (e) {
            var n = JSON.parse(e);
            if ("" === n.error) {
                if (1 == s) {
                    var o = t.data("title-dislike");
                    t.removeClass("enabled").addClass("disabled"), a += ("," != a.substr(-1) ? "," : "") + i + ","
                } else {
                    var o = t.data("title-like");
                    t.removeClass("disabled").addClass("enabled"), a = a.replace("," + i + ",", ",")
                }
                t.data("likes", r).attr("title", o).find(".post_counters_number").html(r), themerex_set_cookie("themerex_likes", a, 365)
            } else themerex_message_warning(THEMEREX_GLOBALS.strings.error_like)
        }), e.preventDefault(), !1
    }), jQuery(".sc_video_play_button:not(.inited)").length > 0 && jQuery(".sc_video_play_button:not(.inited)").each(function () {
        jQuery(this).addClass("inited").animate({opacity: 1}, 1e3).click(function (e) {
            if (jQuery(this).hasClass("sc_video_play_button")) {
                var t = jQuery(this).removeClass("sc_video_play_button hover_icon_play").data("video");
                if ("" !== t) {
                    jQuery(this).empty().html(t), themerex_video_dimensions();
                    var s = jQuery(this).find("video"), i = s.width(), r = s.height();
                    themerex_init_media_elements(jQuery(this)), jQuery(this).find("video").css({
                        width: i,
                        height: r
                    }).attr({width: i, height: r})
                }
                return e.preventDefault(), !1
            }
        })
    }), jQuery("a.tribe-events-read-more,.tribe-events-button,.tribe-events-nav-previous a,.tribe-events-nav-next a,.tribe-events-widget-link a,.tribe-events-viewmore a").addClass("sc_button sc_button_style_filled")
}
function themerex_init_media_elements(e) {
    THEMEREX_GLOBALS.media_elements_enabled && e.find("audio,video").length > 0 && (window.mejs ? (window.mejs.MepDefaults.enableAutosize = !1, window.mejs.MediaElementDefaults.enableAutosize = !1, e.find("audio:not(.wp-audio-shortcode),video:not(.wp-video-shortcode)").each(function () {
        if (0 == jQuery(this).parents(".mejs-mediaelement").length) {
            var e = jQuery(this), t = {
                enableAutosize: !0,
                videoWidth: -1,
                videoHeight: -1,
                audioWidth: "100%",
                audioHeight: 30,
                success: function (t) {
                    var s, i;
                    "flash" === t.pluginType && (s = t.attributes.autoplay && "false" !== t.attributes.autoplay, i = t.attributes.loop && "false" !== t.attributes.loop, s && t.addEventListener("canplay", function () {
                        t.play()
                    }, !1), i && t.addEventListener("ended", function () {
                        t.play()
                    }, !1)), e.parents(".sc_audio,.sc_video").addClass("inited sc_show")
                }
            };
            jQuery(this).mediaelementplayer(t)
        }
    })) : setTimeout(function () {
        themerex_init_media_elements(e)
    }, 400))
}
function themerex_show_system_message() {
    THEMEREX_GLOBALS.system_message.message && ("success" == THEMEREX_GLOBALS.system_message.status ? themerex_message_success(THEMEREX_GLOBALS.system_message.message, THEMEREX_GLOBALS.system_message.header) : "info" == THEMEREX_GLOBALS.system_message.status ? themerex_message_info(THEMEREX_GLOBALS.system_message.message, THEMEREX_GLOBALS.system_message.header) : ("error" == THEMEREX_GLOBALS.system_message.status || "warning" == THEMEREX_GLOBALS.system_message.status) && themerex_message_warning(THEMEREX_GLOBALS.system_message.message, THEMEREX_GLOBALS.system_message.header))
}
function themerex_toggle_popup(e) {
    "none" != e.css("display") ? themerex_hide_popup(e) : themerex_show_popup(e)
}
function themerex_show_popup(e) {
    "none" == e.css("display") && (THEMEREX_GLOBALS.css_animation ? e.show().removeClass("animated fast " + THEMEREX_GLOBALS.menu_animation_out).addClass("animated fast " + THEMEREX_GLOBALS.menu_animation_in) : e.slideDown())
}
function themerex_hide_popup(e) {
    "none" != e.css("display") && (THEMEREX_GLOBALS.css_animation ? e.removeClass("animated fast " + THEMEREX_GLOBALS.menu_animation_in).addClass("animated fast " + THEMEREX_GLOBALS.menu_animation_out).delay(500).hide() : e.fadeOut())
}
function themerex_comments_validate(e) {
    "use strict";
    e.find("input").removeClass("error_fields_class");
    var t = themerex_form_validate(e, {
        error_message_text: THEMEREX_GLOBALS.strings.error_global,
        error_message_show: !0,
        error_message_time: 4e3,
        error_message_class: "sc_infobox sc_infobox_style_error",
        error_fields_class: "error_fields_class",
        exit_after_first_error: !1,
        rules: [{
            field: "author",
            min_length: {value: 1, message: THEMEREX_GLOBALS.strings.name_empty},
            max_length: {value: 60, message: THEMEREX_GLOBALS.strings.name_long}
        }, {
            field: "email",
            min_length: {value: 7, message: THEMEREX_GLOBALS.strings.email_empty},
            max_length: {value: 60, message: THEMEREX_GLOBALS.strings.email_long},
            mask: {value: THEMEREX_GLOBALS.email_mask, message: THEMEREX_GLOBALS.strings.email_not_valid}
        }, {
            field: "comment",
            min_length: {value: 1, message: THEMEREX_GLOBALS.strings.text_empty},
            max_length: {value: THEMEREX_GLOBALS.comments_maxlength, message: THEMEREX_GLOBALS.strings.text_long}
        }]
    });
    return !t
}
function themerex_login_validate(e) {
    "use strict";
    e.find("input").removeClass("error_fields_class");
    var t = themerex_form_validate(e, {
        error_message_show: !0,
        error_message_time: 4e3,
        error_message_class: "sc_infobox sc_infobox_style_error",
        error_fields_class: "error_fields_class",
        exit_after_first_error: !0,
        rules: [{
            field: "log",
            min_length: {value: 1, message: THEMEREX_GLOBALS.strings.login_empty},
            max_length: {value: 60, message: THEMEREX_GLOBALS.strings.login_long}
        }, {
            field: "pwd",
            min_length: {value: 4, message: THEMEREX_GLOBALS.strings.password_empty},
            max_length: {value: 30, message: THEMEREX_GLOBALS.strings.password_long}
        }]
    });
    return t || jQuery.post(THEMEREX_GLOBALS.ajax_url, {
        action: "login_user",
        nonce: THEMEREX_GLOBALS.ajax_nonce,
        remember: e.find("#rememberme").val(),
        user_log: e.find("#log").val(),
        user_pwd: e.find("#password").val()
    }).done(function (t) {
        var s = JSON.parse(t), i = e.find(".result");
        0 == i.length && (i = e.siblings(".result")), 0 == i.length && (i = e.after('<div class="result"></div>').next(".result")), i.toggleClass("sc_infobox_style_error", !1).toggleClass("sc_infobox_style_success", !1), "" === s.error ? (i.addClass("sc_infobox sc_infobox_style_success").html(THEMEREX_GLOBALS.strings.login_success), setTimeout(function () {
            location.reload()
        }, 3e3)) : i.addClass("sc_infobox sc_infobox_style_error").html(THEMEREX_GLOBALS.strings.login_failed + "<br>" + s.error), i.fadeIn().delay(3e3).fadeOut()
    }), !1
}
function themerex_registration_validate(e) {
    "use strict";
    e.find("input").removeClass("error_fields_class");
    var t = themerex_form_validate(e, {
        error_message_show: !0,
        error_message_time: 4e3,
        error_message_class: "sc_infobox sc_infobox_style_error",
        error_fields_class: "error_fields_class",
        exit_after_first_error: !0,
        rules: [{
            field: "registration_username",
            min_length: {value: 1, message: THEMEREX_GLOBALS.strings.login_empty},
            max_length: {value: 60, message: THEMEREX_GLOBALS.strings.login_long}
        }, {
            field: "registration_email",
            min_length: {value: 7, message: THEMEREX_GLOBALS.strings.email_empty},
            max_length: {value: 60, message: THEMEREX_GLOBALS.strings.email_long},
            mask: {value: THEMEREX_GLOBALS.email_mask, message: THEMEREX_GLOBALS.strings.email_not_valid}
        }, {
            field: "registration_pwd",
            min_length: {value: 4, message: THEMEREX_GLOBALS.strings.password_empty},
            max_length: {value: 30, message: THEMEREX_GLOBALS.strings.password_long}
        }, {
            field: "registration_pwd2",
            equal_to: {value: "registration_pwd", message: THEMEREX_GLOBALS.strings.password_not_equal}
        }]
    });
    return t || jQuery.post(THEMEREX_GLOBALS.ajax_url, {
        action: "registration_user",
        nonce: THEMEREX_GLOBALS.ajax_nonce,
        user_name: e.find("#registration_username").val(),
        user_email: e.find("#registration_email").val(),
        user_pwd: e.find("#registration_pwd").val()
    }).done(function (t) {
        var s = JSON.parse(t), i = e.find(".result");
        0 == i.length && (i = e.siblings(".result")), 0 == i.length && (i = e.after('<div class="result"></div>').next(".result")), i.toggleClass("sc_infobox_style_error", !1).toggleClass("sc_infobox_style_success", !1), "" === s.error ? (i.addClass("sc_infobox sc_infobox_style_success").html(THEMEREX_GLOBALS.strings.registration_success), setTimeout(function () {
            jQuery(".popup_login_link").trigger("click")
        }, 3e3)) : i.addClass("sc_infobox sc_infobox_style_error").html(THEMEREX_GLOBALS.strings.registration_failed + " " + s.error), i.fadeIn().delay(3e3).fadeOut()
    }), !1
}
function themerex_contact_form_validate(e) {
    "use strict";
    var t = "include/sendmail.php";
    if ("" == t)return !1;
    e.find("input").removeClass("error_fields_class");
    var s = !1, i = "custom" == e.data("formtype");
    return i || (s = themerex_form_validate(e, {
        error_message_show: !0,
        error_message_time: 4e3,
        error_message_class: "sc_infobox sc_infobox_style_error",
        error_fields_class: "error_fields_class",
        exit_after_first_error: !1,
        rules: [{
            field: "username",
            min_length: {value: 1, message: THEMEREX_GLOBALS.strings.name_empty},
            max_length: {value: 60, message: THEMEREX_GLOBALS.strings.name_long}
        }, {
            field: "email",
            min_length: {value: 7, message: THEMEREX_GLOBALS.strings.email_empty},
            max_length: {value: 60, message: THEMEREX_GLOBALS.strings.email_long},
            mask: {value: THEMEREX_GLOBALS.email_mask, message: THEMEREX_GLOBALS.strings.email_not_valid}
        }, {
            field: "subject",
            min_length: {value: 1, message: THEMEREX_GLOBALS.strings.subject_empty},
            max_length: {value: 100, message: THEMEREX_GLOBALS.strings.subject_long}
        }, {
            field: "message",
            min_length: {value: 1, message: THEMEREX_GLOBALS.strings.text_empty},
            max_length: {value: THEMEREX_GLOBALS.contacts_maxlength, message: THEMEREX_GLOBALS.strings.text_long}
        }]
    })), s || "#" == t || jQuery.post(t, {
        action: "send_contact_form",
        nonce: THEMEREX_GLOBALS.ajax_nonce,
        type: i ? "custom" : "contact",
        data: e.serialize()
    }).done(function (t) {
        var s = JSON.parse(t), i = e.find(".result").toggleClass("sc_infobox_style_error", !1).toggleClass("sc_infobox_style_success", !1);
        "" === s.error ? (e.get(0).reset(), i.addClass("sc_infobox_style_success").html(THEMEREX_GLOBALS.strings.send_complete)) : i.addClass("sc_infobox_style_error").html(THEMEREX_GLOBALS.strings.send_error + " " + s.error), i.fadeIn().delay(3e3).fadeOut()
    }), !s
}
jQuery(document).ready(function () {
    "use strict";
    THEMEREX_GLOBALS.theme_init_counter = 0, themerex_init_actions()
});