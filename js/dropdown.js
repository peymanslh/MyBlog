(function() {
    var doc = document;
    Element.prototype.hasClass = function (className) {
        return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
    }

    // Dropdown button
    var dropdown = doc.querySelectorAll('.btn-dd');
    var dropdownArray = Array.prototype.slice.call(dropdown,0);
    dropdownArray.forEach(function (el) {
        var btnDropdown = el.querySelector('button[data-toggle=dropdown]'),
            ulDropdown = el.querySelector('button[data-toggle=dropdown]').nextElementSibling;

        btnDropdown.onclick = function (event) {
            if(!ulDropdown.hasClass('show')) {
                ulDropdown.classList.add('show');
                btnDropdown.classList.add('active');
                event.preventDefault();
            } else {
                ulDropdown.classList.remove('show');
                btnDropdown.classList.remove('active');
                event.preventDefault();
            }
        };
    })

}());

