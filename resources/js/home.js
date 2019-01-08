// Banner cards desktop
var sliderBrPointsBannerCards = [
    {
        breakpoint: 4000,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
        }
    },
    {
        breakpoint: 1280,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
      }
    },
    {
        breakpoint: 900,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    },
];

// Banner cards Mobile
var sliderBrPointsBannerCardsMobile = [
    {
        breakpoint: 4000,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
        }
    },
    {
        breakpoint: 900,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    },
];

var sliderSettingsCardsMobile = {
    "draggable": true,
    "arrows": false,
    "dots": false,
};

// General game cards
var sliderBrPointsGameCards = [
    {
        breakpoint: 1740,
        settings: {
            slidesToShow: 7,
            slidesToScroll: 7,
        }
    },
    {
        breakpoint: 1560,
        settings: {
            slidesToShow: 6,
            slidesToScroll: 6,
        }
    },
    {
        breakpoint: 1280,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
      }
    },
    {
        breakpoint: 1100,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
        }
    },
];

// Exclusive game cards
var sliderBrPointsGameCardsExclusive = [
    {
        breakpoint: 4000,
        settings: {
            slidesToShow: 6,
            slidesToScroll: 6,
        }
    },
    {
        breakpoint: 2000,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
        }
    },
    {
        breakpoint: 1700,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
        }
    },
    {
        breakpoint: 1150,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
        }
    },
];

// Exclusive game cards Mobile
var sliderBrPointsGameCardsExclusiveMobile = [
    {
        breakpoint: 4000,
        settings: {
            slidesToShow: 6,
            slidesToScroll: 6,
        }
    },
    {
        breakpoint: 2000,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
        }
    },
    {
        breakpoint: 1700,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
        }
    },
    {
        breakpoint: 1150,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
        }
    },
    {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
        }
    },
];

// Event cards
var sliderBrPointsEventCards = [
    {
        breakpoint: 4000,
        settings: {
            slidesToShow: 6,
            slidesToScroll: 5,
        }
    },
    {
        breakpoint: 1700,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
        }
    },
    {
        breakpoint: 1300,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
        }
    },
    {
        breakpoint: 1100,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
        }
    },
];

$(function() {
    if ($('body').hasClass('dsktp')) {
        attachSlider('.js-banner-slider', sliderBrPointsBannerCards);

        attachSlider('.js-game-card-language-slider', sliderBrPointsGameCards);

        attachSlider('.js-game-card-free-slider', sliderBrPointsGameCards);

        attachSlider('.js-game-card-premium-slider', sliderBrPointsGameCards);

        attachSlider('.js-game-card-latest-slider', sliderBrPointsGameCards);

        attachSlider('.js-game-card-newest-slider', sliderBrPointsGameCards);

        attachSlider('.js-game-card-exclusive-slider', sliderBrPointsGameCardsExclusive);

        countdownTimer('.js-countdown');

        attachSlider('.js-event-card-events-slider', sliderBrPointsEventCards);
    } else {
        attachSlider('.js-banner-slider', sliderBrPointsBannerCardsMobile, sliderSettingsCardsMobile);

        attachSlider('.js-game-card-exclusive-slider', sliderBrPointsGameCardsExclusiveMobile, sliderSettingsCardsMobile);

        $('[class*="cnt-home-games"] .loader').remove();
    }
});
