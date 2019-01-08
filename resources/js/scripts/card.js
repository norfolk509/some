// Save to favorite from card
$('.js-card-favorite').on('click', function(e) {
    var that = $(this);
    e.preventDefault();

    if (that.hasClass('filled')) {
        console.log("action here for 'remove from favorites'");
        // TODO remove the game through ajax from player's favorites
        that.removeClass('filled').find('[class*="icon-"]').removeClass('filled');
    } else {
        console.log("action here for 'add to favorites'");
        // TODO save the game through ajax into player's favorites
        that.addClass('filled').find('[class*="icon-"]').addClass('filled');
    }
});

// Countdown timer
function countdownTimer(container) {
    $(container).each(function() {
        var that = $(this);
        var deadline = new Date(that.find('.counter').data('time')*1000);
        var endSoon = 24 * 60 * 60 * 1000; // 24 hours

        initializeClock(that.find('.counter'), deadline);

        function getTimeRemaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor((t / (1000 * 1)) % 60);
            var minutes = Math.floor((t / (1000 * 60)) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));

            if (Date.parse(endtime) <= Date.now()) {
                seconds = '00';
                minutes = '00';
                hours = '00';
                days = '00';
            }

            return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }

        function initializeClock(clock, endtime) {
            var daysSpan = clock.children('.days');
            var hoursSpan = clock.children('.hours');
            var minutesSpan = clock.children('.minutes');
            var secondsSpan = clock.children('.seconds');

            function updateClock() {
                var t = getTimeRemaining(endtime);

                daysSpan.text(('0' + t.days).slice(-2));
                hoursSpan.text(('0' + t.hours).slice(-2));
                minutesSpan.text(('0' + t.minutes).slice(-2));
                secondsSpan.text(('0' + t.seconds).slice(-2));

                if (t.total <= endSoon) {
                    applyEndSoon(that);
                }

                if (t.total <= 0) {
                    clearInterval(timeinterval);
                }
            }

            updateClock();
            var timeinterval = setInterval(updateClock, 1000);
        }
    });
}

// Change styles when countdown reaches Ending Soon
function applyEndSoon(container) {
    container.addClass('ending-soon');
}


$(function() {
    // Dinamically add content to Card Favorite
    var cardFavorite = $('.js-card-favorite');

    cardFavorite.each(function() {
        var that = $(this);

        that.addClass('favorite flx-a-c').html('<i class="icon-heart"></i> <span class="text">Add to Favorites</span><span class="text-remove">Remove from Favorites</span>');

        if (that.hasClass('filled')) that.find('[class*="icon-"]').addClass('filled');
    });

    // Dinamically add content to Purchased label
    var cardPurchased = $('.js-card-purchased');

    cardPurchased.each(function() {
        var that = $(this);

        that.append('Purchased');
    });
});
