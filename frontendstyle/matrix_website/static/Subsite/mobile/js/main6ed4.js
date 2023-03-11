function mainload() {
    function i() {
        var i = window.innerWidth,
            n = window.innerHeight,
            e = $("#header").outerHeight(!0),
            t = n - e;
        i > 767 ? ($.scrollify({
           /*section: "#container > section",*/
            easing: "easeOutExpo",
            scrollSpeed: 3100
        }), $("#container > section").each(function() {
            $(this).css({
                "min-height": n + "px"
            });
            var i = $(this).data("rows"),
                e = $(this).find("> div").outerHeight(!0);
            marginT = (n - e) / i / 2, marginT < 0 && (marginT = 0), $(this).find("> div > .row").css({
                "margin-top": marginT + "px"
            })
        }), $("#banner").css({
            "min-height": t + "px"
        })) : ($.scrollify.destroy(), $("#banner").removeAttr("style"))
    }
    window.innerWidth;
    var n = window.innerHeight;
    jQuery(window).resize(function() {
        window.innerWidth, window.innerHeight;
        setTimeout(function() {
            i()
        }, 500)
    }), jQuery(window).load(function() {}), jQuery(window).scroll(function(i) {}), jQuery(document).ready(function() {
        i(), $(".scroll1,.scroll2,.scroll,.scroll-btn").click(function(i) {
            i.preventDefault(), $.scrollify.next()
        }), $(window).scroll(function() {
            $(this).scrollTop() >= n ? $(".scrollTop").fadeIn(200) : $(".scrollTop").fadeOut(200)
        }), $(".scrollTop").click(function() {
            $("body,html").animate({
                scrollTop: 0
            }, 500)
        }), $(".owl-carousel").each(function() {
            $(this).owlCarousel({
                rtl: !0,
                animateOut: "fadeOut",
                animateIn: "flipInX",
                items: 1,
                margin: 30,
                stagePadding: 30,
                smartSpeed: 450,
                slideBy: 1,
                nav: !1,
                dots: !0
            })
        }), jQuery("a.video").length && jQuery("a.video").click(function() {
            var i = jQuery(this).attr("href");
            return $.fancybox.open({
                padding: 0,
                maxWidth: 800,
                maxHeight: 600,
                fitToView: !1,
                width: "70%",
                height: "70%",
                type: "iframe",
                href: i,
                autoSize: !1,
                closeClick: !0,
                openEffect: "none",
                closeEffect: "none",
                beforeLoad: function() {}
            }), !1
        }), jQuery(".btnTooltip").length > 0 && jQuery(".btnTooltip").tooltip({
            animated: "fade"
        }), $("a").each(function() {
            if ("" != $(this).attr("title")) {
                if ($(this).hasClass("ms-core-menu-root") || jQuery(this).closest(".topIcons2").length) i = "right";
                else var i = "top";
                $(this).tooltip({
                    animated: "fade",
                    placement: i
                })
            }
        })
    })
}
mainload();