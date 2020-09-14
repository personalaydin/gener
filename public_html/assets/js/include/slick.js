import {animate, animateReset} from './animations';
import 'slick-carousel';

$(function() {
    'use strict';

    const SLICK_REFRESH_TIMEOUT = 50;

    let $carousels = $('.js-slick');

    if ($carousels.length === 0) {
        return;
    }

    $carousels.each(function () {
        let $carousel = $(this);

        $carousel.on('init', function(event, slick) {
            let $activeSlides = $('.slick-active', $carousel);

            $activeSlides.each(function(){
                let $currentSlide = $(this);

                animate($currentSlide);
            });

            slidePagination($carousel, slick);
        });

        // Custom dots and arrows
        $('body').on('click', '[data-slick-go-to]', function() {
            // Custom dots
            let $this = $(this),
                $relatedCarousel = (typeof $this.attr('data-related-carousel') === undefined ? $this.parents('.js-slick') : $($this.attr('data-related-carousel')));

            $relatedCarousel.slick('slickGoTo', $this.attr('data-slick-go-to'));
        }).on('click', '[data-slick-next]', function() {
            // Custom arrows
            let $this = $(this),
                $relatedCarousel = (typeof $this.attr('data-related-carousel') === undefined ? $this.parents('.js-slick') : $($this.attr('data-related-carousel')));

            $relatedCarousel.slick('slickNext');
        }).on('click', '[data-slick-prev]', function() {
            // Custom arrows
            let $this = $(this),
                $relatedCarousel = (typeof $this.attr('data-related-carousel') === undefined ? $this.parents('.js-slick') : $($this.attr('data-related-carousel')));

            $relatedCarousel.slick('slickPrev');
        });

        // Before Change
        $carousel.on('beforeChange', function () {
            let $activeSlides = $('.slick-active', $carousel);

            $activeSlides.each(function(){
                let $currentSlide = $(this);

                animateReset($currentSlide);
            });
        });

        // After Change
        $carousel.on('afterChange', function (event,slick) {
            let $activeSlides = $('.slick-active', $carousel);

            $activeSlides.each(function(){
                let $currentSlide = $(this);

                animate($currentSlide);
            });

            slidePagination($carousel, slick);
        });

        initSlick($carousel);

        function initSlick($carousel) {
            $carousel.slick({
                'prevArrow': '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
                'nextArrow': '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
            });
        }

        function slidePagination($carousel, slick) {
            $('[data-slick-pagination]').each(function () {
                let $this = $(this);

                if ($carousel.is($this.attr('data-related-carousel'))) {
                    let current = slick.currentSlide + 1;
                    let total = slick.slideCount;
                    $this.html(current.toString().concat(' / ', total));
                }
            });
        }
    });
});
