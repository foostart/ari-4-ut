$(document).ready(function (e) {
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $(".tables_dynamic").toggleClass("toggled");
    });
});