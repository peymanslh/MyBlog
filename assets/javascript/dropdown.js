!function () {
    var t = document;
    Element.prototype.hasClass = function (t) {
        return this.className && new RegExp("(^|\\s)" + t + "(\\s|$)").test(this.className)
    };
    var e = t.querySelectorAll(".btn-dd"), s = Array.prototype.slice.call(e, 0);
    s.forEach(function (t) {
        var e = t.querySelector("button[data-toggle=dropdown]"), s = t.querySelector("button[data-toggle=dropdown]").nextElementSibling;
        e.onclick = function (t) {
            s.hasClass("show") ? (s.classList.remove("show"), e.classList.remove("active"), t.preventDefault()) : (s.classList.add("show"), e.classList.add("active"), t.preventDefault())
        }
    })
}();