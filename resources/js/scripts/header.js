// Click to open menu on devices
$('.js-menu-icon').on('click', function() {
    var that = $(this);

    if(that.hasClass('open')) {
        sidebarStatus = 0;
        sidebarStatusMobile = 0;

        displayOverlay(false);
    } else {
        sidebarStatus = 1;
        sidebarStatusMobile = 1;

        displayOverlay(true, 'side-bar');
    }

    that.add('body, .sidebar').toggleClass('open');

    checkSidebar();
});


$(function() {
    $('.js-header-nav a').each(function() {
        $('.js-navbar .menu-list').append($(this).clone());
    });
});
