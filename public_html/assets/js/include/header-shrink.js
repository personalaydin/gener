$(function() {
    'use strict';

    function shrinkHeader() {
        let windowScroll = $(window).scrollTop(),
            $header = $('.header');

        if (windowScroll > 0) {
            $header.addClass('header--shrink');
        } else {
            $header.removeClass('header--shrink');
        }
    }

    shrinkHeader();
    $(window).scroll(shrinkHeader);
});