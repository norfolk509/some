// Slick slider for game cards and banners
function attachSlider(container, breakpoints, settings) {
    var set_draggable = false,
        set_arrows = true,
        set_dots = true;

    var sliderClass = '.slider';
    var initialState = true;

    if (typeof settings !== 'undefined') {
        if (typeof settings['draggable'] !== 'undefined') set_draggable = settings['draggable'];
        if (typeof settings['arrows'] !== 'undefined') set_arrows = settings['arrows'];
        if (typeof settings['dots'] !== 'undefined') set_dots = settings['dots'];
    }

    $(function() {
        var slider_load = $(container).find(sliderClass).slick({
            draggable: set_draggable,
            infinite: true,
            speed: 1000,
            arrows: set_arrows,
            prevArrow: '<span class="slick-prev slick-arrow flx-c"><i class="arrow-lines left"></i></span>',
            nextArrow: '<span class="slick-next slick-arrow flx-c"><i class="arrow-lines right"></i></span>',
            dots: set_dots,
            appendDots: $(container).find('.pagination'),
            slidesToShow: 8,
            slidesToScroll: 8,
            responsive: breakpoints,
        });

        $(container).find('.slick-next').on('click', function() {
            var slider = $(container).find('.slick-slider');

            initialState = false;

            setTimeout(function(){
                slider.find('.slick-prev').removeClass('slick-disabled');
                slider.find('.slick-slide.hidden').removeClass('hidden');
            }, 500);
        });

        $(container).find(sliderClass).on('touchend', function() {
            var slider = $(container).find('.slick-slider');

            initialState = false;

            setTimeout(function(){
                slider.find('.slick-prev').removeClass('slick-disabled');
                slider.find('.slick-slide.hidden').removeClass('hidden');
            }, 500);
        });

        $.when(slider_load).done(function() {
            $(container).find(sliderClass).addClass('show-slider');
            $(container).find('.loader').remove();
        });
    });

    $(container).find(sliderClass).on('init, setPosition', function(slick) {
        var that = $(this);

        if(initialState == true){
            that.find('.slick-prev').addClass('slick-disabled');
            that.find('.slick-current').prev().addClass('hidden');
        }
    });
}
