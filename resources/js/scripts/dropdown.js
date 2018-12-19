// Dropdown open on click
$('.js-dropdown-action').on("click", function() {
    $('.js-dropdown-action').not(this).each(function() {
        closeDropdown($(this));
    });

    toggleDropdown($(this));
});

// Open dropdown
function toggleDropdown(container) {
    container.toggleClass('open');
    container.find('.js-dropdown').slideToggle(animationTime);
    container.find('[class*="arrow-"]').toggleClass('down up');
}

// Close dropdown
function closeDropdown(container) {
    container.removeClass('open');
    container.find('.js-dropdown').slideUp(animationTime);
    container.find('[class*="arrow-"]').removeClass('up').addClass('down');
}

closeOutside('.js-dropdown-action');
