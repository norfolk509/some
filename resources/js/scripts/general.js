// Close on click outside element
function closeOutside(element) {
    var elem = $(element);

    $(document).mouseup(function(e) {
        if (!elem.is(e.target) && elem.has(e.target).length === 0 && elem.hasClass('open'))
            closeDropdown(elem);
    });
}

// Display / Hide overlay (with optional custom class)
function displayOverlay(display, customClass) {
    customClass = customClass || '';
    var overlay = $('.overlay');

    if (display == true) {
        overlay.addClass(customClass).show();
    }

    if (display == false) overlay.removeClass(customClass).hide();
}
