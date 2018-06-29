// Change the button content when you hide a production zone
$(document).ready(function() {
    $('.project-toggle').on('click', function () {
        if ($(this).hasClass("prod-toggle-on")) {
            $(this).removeClass("prod-toggle-on").addClass("prod-toggle-off");
            var amotoggleon = $('.fa-minus-square');
            $(this).find(amotoggleon).removeClass("fa-minus-square").addClass("fa-plus-square");
        } else {
            $(this).removeClass("prod-toggle-off").addClass("prod-toggle-on");
            var amotoggleoff = $('.fa-plus-square');
            $(this).find(amotoggleoff).removeClass("fa-plus-square").addClass("fa-minus-square");
        }
    });
});