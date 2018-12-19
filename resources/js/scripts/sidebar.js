// Close sidebar
function closeSidebar() {
    $('.sidebar, .main-content').addClass('sidebar-closed');
    $('.js-sidebar-item').removeClass('active');
    $('[class*="flyout"]').hide().removeClass('display-left');
}

$('.js-close-sidebar').on('click', function() {
    closeSidebar();

    sidebarStatus = 0;
});

// Open sidebar
function openSidebar() {
    $('.sidebar, .main-content').removeClass('sidebar-closed');
}

// Check width and Open/Close sidebar accordingly, selecting the first flyout
function checkSidebar() {
    var wWidth = $(window).width();

    if(wWidth <= brDesktopXl && sidebarStatusMobile == 0) {
        closeSidebar();

        // Close sidebar on click outside
        var elem = $('.sidebar');

        $(document).mouseup(function(e) {
            if (!elem.is(e.target) && elem.has(e.target).length === 0 && !elem.hasClass('sidebar-closed')) {
                setTimeout(function(){
                    closeSidebar();

                    sidebarStatus = 0;
                    sidebarStatusMobile = 0;

                    displayOverlay(false);

                    $('body, .js-menu-icon, .sidebar').removeClass('open');
                }, 1);
            }
        });
    } else if (sidebarStatus == 1) {
        var flyout = $('.js-sidebar-item:first'),
            currentFlyout = flyout.data('item');

        $('.js-sidebar-item').not(flyout).removeClass('active');
        flyout.addClass('active');
        $('#' + currentFlyout).show().addClass('display-left');

        openSidebar();
    }
}

// Open/Close sidebar defined
function displaySidebarFlyout(flyout) {
    var currentFlyout = flyout.data('item');

    $('.js-flyout').hide();

    if(flyout.hasClass('active')) {
        closeSidebar();

        sidebarStatus = 0;
    } else {
        $('.js-sidebar-item').not(flyout).removeClass('active');
        flyout.addClass('active');
        $('#' + currentFlyout).show().addClass('display-left');

        openSidebar();

        sidebarStatus = 1;
    }
}


$(function() {
    checkSidebar();

    $('.sidebar').addClass('sidebar-full-width');

    $('.js-sidebar-item').on('click', function() {
        displaySidebarFlyout($(this));
    });
});

$(window).resize(function() {
    checkSidebar();
});
