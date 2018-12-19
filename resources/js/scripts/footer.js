$('.js-footer-menu').on("click", function() {
    var wWidth = $(window).width();

    if(wWidth <= brDesktop) {
        $(this).toggleClass('open').find('.arrow-triangle').toggleClass('down up');;
    }
});

function checkWidthFooter() {
    var wWidth = $(window).width();

    if(wWidth <= brTablet) {
        $('.js-footer-lang').prependTo('.footer-links');
    } else {
        $('.js-footer-lang').prependTo('.js-footer-socials-line');
    }
}


$(function() {
    checkWidthFooter();
});

$(window).resize(function() {
    checkWidthFooter();
});
