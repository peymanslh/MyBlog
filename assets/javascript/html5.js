!function (e, t) {
    function n() {
        var e = g.elements;
        return "string" == typeof e ? e.split(" ") : e
    }

    function a(e) {
        var t = f[e[u]];
        return t || (t = {}, h++, e[u] = h, f[h] = t), t
    }

    function r(e, n, r) {
        return n || (n = t), l ? n.createElement(e) : (r || (r = a(n)), n = r.cache[e] ? r.cache[e].cloneNode() : d.test(e) ? (r.cache[e] = r.createElem(e)).cloneNode() : r.createElem(e), n.canHaveChildren && !s.test(e) ? r.frag.appendChild(n) : n)
    }

    function c(e, t) {
        t.cache || (t.cache = {}, t.createElem = e.createElement, t.createFrag = e.createDocumentFragment, t.frag = t.createFrag()), e.createElement = function (n) {
            return g.shivMethods ? r(n, e, t) : t.createElem(n)
        }, e.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + n().join().replace(/[\w\-]+/g, function (e) {
            return t.createElem(e), t.frag.createElement(e), 'c("' + e + '")'
        }) + ");return n}")(g, t.frag)
    }

    function o(e) {
        e || (e = t);
        var n = a(e);
        if (g.shivCSS && !i && !n.hasCSS) {
            var r, o = e;
            r = o.createElement("p"), o = o.getElementsByTagName("head")[0] || o.documentElement, r.innerHTML = "x<style>article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}</style>", r = o.insertBefore(r.lastChild, o.firstChild), n.hasCSS = !!r
        }
        return l || c(e, n), e
    }

    var i, l, m = e.html5 || {}, s = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i, d = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i, u = "_html5shiv", h = 0, f = {};
    !function () {
        try {
            var e = t.createElement("a");
            e.innerHTML = "<xyz></xyz>", i = "hidden"in e;
            var n;
            if (!(n = 1 == e.childNodes.length)) {
                t.createElement("a");
                var a = t.createDocumentFragment();
                n = "undefined" == typeof a.cloneNode || "undefined" == typeof a.createDocumentFragment || "undefined" == typeof a.createElement
            }
            l = n
        } catch (r) {
            l = i = !0
        }
    }();
    var g = {
        elements: m.elements || "abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",
        version: "3.7.0",
        shivCSS: !1 !== m.shivCSS,
        supportsUnknownElements: l,
        shivMethods: !1 !== m.shivMethods,
        type: "default",
        shivDocument: o,
        createElement: r,
        createDocumentFragment: function (e, r) {
            if (e || (e = t), l)return e.createDocumentFragment();
            for (var r = r || a(e), c = r.frag.cloneNode(), o = 0, i = n(), m = i.length; m > o; o++)c.createElement(i[o]);
            return c
        }
    };
    e.html5 = g, o(t)
}(this, document);