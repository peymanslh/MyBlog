$(document).ready(function () {
    $(".my-att a").attr({"data-lightbox": "mygallery"}), lightbox.option({
        resizeDuration: 100,
        fadeDuration: 100
    }), $(function () {
        $("#btn-search").bind("click", function (t) {
            t.preventDefault(), $("#box-search").bPopup()
        })
    })
});