// $('ul.nav li.dropdown').hover(function() {
//     $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
// }, function() {
//     $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
// });

$('ul.nav li.dropdown').hover(
    function() {
        $(this).children("ul").stop(true, true).delay(200).fadeIn(500);
    },
    function() {
        $(this).children("ul").stop(true, true).delay(200).fadeOut(500);
    },
);

$('.active').hover(
    function() {
        $(this).children("ul").addClass('child').stop(true, true).delay(200).fadeIn(500);
    },
    function() {
        $(this).children("ul").stop(true, true).delay(200).fadeOut(500);
    }
);
