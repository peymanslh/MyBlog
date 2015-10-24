!function (o) {
    o.fn.bPopup = function (t, e) {
        function n() {
            switch (w.contentContainer = o(w.contentContainer || S), w.content) {
                case"iframe":
                    var t = o('<iframe class="b-iframe" ' + w.iframeAttr + "></iframe>");
                    t.appendTo(w.contentContainer), v = S.outerHeight(!0), P = S.outerWidth(!0), i(), t.attr("src", w.loadUrl), f(w.loadCallback);
                    break;
                case"image":
                    i(), o("<img />").load(function () {
                        f(w.loadCallback), s(o(this))
                    }).attr("src", w.loadUrl).hide().appendTo(w.contentContainer);
                    break;
                default:
                    i(), o('<div class="b-ajax-wrapper"></div>').load(w.loadUrl, w.loadData, function (t, e, n) {
                        f(w.loadCallback, e), s(o(this))
                    }).hide().appendTo(w.contentContainer)
            }
        }

        function i() {
            w.modal && o('<div class="b-modal ' + m + '"></div>').css({
                backgroundColor: w.modalColor,
                position: "fixed",
                top: 0,
                right: 0,
                bottom: 0,
                left: 0,
                opacity: 0,
                zIndex: w.zIndex + D
            }).appendTo(w.appendTo).fadeTo(w.speed, w.opacity), h(), S.data("bPopup", w).data("id", m).css({
                left: "slideIn" == w.transition || "slideBack" == w.transition ? "slideBack" == w.transition ? z.scrollLeft() + W : -1 * (x + P) : u(!(!w.follow[0] && k || T)),
                position: w.positionStyle || "absolute",
                top: "slideDown" == w.transition || "slideUp" == w.transition ? "slideUp" == w.transition ? z.scrollTop() + H : y + -1 * v : p(!(!w.follow[1] && C || T)),
                "z-index": w.zIndex + D + 1
            }).each(function () {
                w.appending && o(this).appendTo(w.appendTo)
            }), c(!0)
        }

        function a() {
            return w.modal && o(".b-modal." + S.data("id")).fadeTo(w.speed, 0, function () {
                o(this).remove()
            }), w.scrollBar || o("html").css("overflow", "auto"), o(".b-modal." + m).unbind("click"), z.unbind("keydown." + m), B.unbind("." + m).data("bPopup", 0 < B.data("bPopup") - 1 ? B.data("bPopup") - 1 : null), S.undelegate(".bClose, ." + w.closeClass, "click." + m, a).data("bPopup", null), clearTimeout(I), c(), !1
        }

        function l(t) {
            H = B.height(), W = B.width(), g = b(), (g.x || g.y) && (clearTimeout(U), U = setTimeout(function () {
                h(), t = t || w.followSpeed;
                var e = {};
                g.x && (e.left = w.follow[0] ? u(!0) : "auto"), g.y && (e.top = w.follow[1] ? p(!0) : "auto"), S.dequeue().each(function () {
                    T ? o(this).css({left: x, top: y}) : o(this).animate(e, t, w.followEasing)
                })
            }, 50))
        }

        function s(o) {
            var t = o.width(), e = o.height(), n = {};
            w.contentContainer.css({
                height: e,
                width: t
            }), e >= S.height() && (n.height = S.height()), t >= S.width() && (n.width = S.width()), v = S.outerHeight(!0), P = S.outerWidth(!0), h(), w.contentContainer.css({
                height: "auto",
                width: "auto"
            }), n.left = u(!(!w.follow[0] && k || T)), n.top = p(!(!w.follow[1] && C || T)), S.animate(n, 250, function () {
                o.show(), g = b()
            })
        }

        function d() {
            B.data("bPopup", D), S.delegate(".bClose, ." + w.closeClass, "click." + m, a), w.modalClose && o(".b-modal." + m).css("cursor", "pointer").bind("click", a), _ || !w.follow[0] && !w.follow[1] || B.bind("scroll." + m, function () {
                if (g.x || g.y) {
                    var o = {};
                    g.x && (o.left = w.follow[0] ? u(!T) : "auto"), g.y && (o.top = w.follow[1] ? p(!T) : "auto"), S.dequeue().animate(o, w.followSpeed, w.followEasing)
                }
            }).bind("resize." + m, function () {
                l()
            }), w.escClose && z.bind("keydown." + m, function (o) {
                27 == o.which && a()
            })
        }

        function c(o) {
            function t(t) {
                S.css({display: "block", opacity: 1}).animate(t, w.speed, w.easing, function () {
                    r(o)
                })
            }

            switch (o ? w.transition : w.transitionClose || w.transition) {
                case"slideIn":
                    t({left: o ? u(!(!w.follow[0] && k || T)) : z.scrollLeft() - (P || S.outerWidth(!0)) - 200});
                    break;
                case"slideBack":
                    t({left: o ? u(!(!w.follow[0] && k || T)) : z.scrollLeft() + W + 200});
                    break;
                case"slideDown":
                    t({top: o ? p(!(!w.follow[1] && C || T)) : z.scrollTop() - (v || S.outerHeight(!0)) - 200});
                    break;
                case"slideUp":
                    t({top: o ? p(!(!w.follow[1] && C || T)) : z.scrollTop() + H + 200});
                    break;
                default:
                    S.stop().fadeTo(w.speed, o ? 1 : 0, function () {
                        r(o)
                    })
            }
        }

        function r(o) {
            o ? (d(), f(e), w.autoClose && (I = setTimeout(a, w.autoClose))) : (S.hide(), f(w.onClose), w.loadUrl && (w.contentContainer.empty(), S.css({
                height: "auto",
                width: "auto"
            })))
        }

        function u(o) {
            return o ? x + z.scrollLeft() : x
        }

        function p(o) {
            return o ? y + z.scrollTop() : y
        }

        function f(t, e) {
            o.isFunction(t) && t.call(S, e)
        }

        function h() {
            y = C ? w.position[1] : Math.max(0, (H - S.outerHeight(!0)) / 2 - w.amsl), x = k ? w.position[0] : (W - S.outerWidth(!0)) / 2, g = b()
        }

        function b() {
            return {x: W > S.outerWidth(!0), y: H > S.outerHeight(!0)}
        }

        o.isFunction(t) && (e = t, t = null);
        var w = o.extend({}, o.fn.bPopup.defaults, t);
        w.scrollBar || o("html").css("overflow", "hidden");
        var m, g, C, k, T, y, x, v, P, U, I, S = this, z = o(document), B = o(window), H = B.height(), W = B.width(), _ = /OS 6(_\d)+/i.test(navigator.userAgent), D = 0;
        return S.close = function () {
            a()
        }, S.reposition = function (o) {
            l(o)
        }, S.each(function () {
            o(this).data("bPopup") || (f(w.onOpen), D = (B.data("bPopup") || 0) + 1, m = "__b-popup" + D + "__", C = "auto" !== w.position[1], k = "auto" !== w.position[0], T = "fixed" === w.positionStyle, v = S.outerHeight(!0), P = S.outerWidth(!0), w.loadUrl ? n() : i())
        })
    }, o.fn.bPopup.defaults = {
        amsl: 50,
        appending: !0,
        appendTo: "body",
        autoClose: !1,
        closeClass: "b-close",
        content: "ajax",
        contentContainer: !1,
        easing: "swing",
        escClose: !0,
        follow: [!0, !0],
        followEasing: "swing",
        followSpeed: 500,
        iframeAttr: 'scrolling="no" frameborder="0"',
        loadCallback: !1,
        loadData: !1,
        loadUrl: !1,
        modal: !0,
        modalClose: !0,
        modalColor: "#000",
        onClose: !1,
        onOpen: !1,
        opacity: .9,
        position: ["auto", "auto"],
        positionStyle: "absolute",
        scrollBar: !0,
        speed: 250,
        transition: "fadeIn",
        transitionClose: !1,
        zIndex: 9997
    }
}(jQuery);