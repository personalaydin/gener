import {animate, animateReset} from "./animations";

$(function() {
    'use strict';

    const HAMBURGER_MENU_BUTTON_ACTIVE_CLASS = 'is-active';
    const HAMBURGER_MENU_ACTIVE_CLASS = 'hamburger-menu--active';
    const BODY_CLASS = 'hamburger-menu__is-open';
    const HEADER_ACTIVE_BG = 'bg-white';

    function hamburgerMenu() {
        let $menuTrigger = $('.js-hamburger-menu-trigger');

        $menuTrigger.on('click', function () {
            let $hamburgerMenu = $('.hamburger-menu'),
                $body = $('body'),
                $header = $('.header');

            $menuTrigger.toggleClass(HAMBURGER_MENU_BUTTON_ACTIVE_CLASS);
            $hamburgerMenu.toggleClass(HAMBURGER_MENU_ACTIVE_CLASS);
            $body.toggleClass(BODY_CLASS);
            $header.toggleClass(HEADER_ACTIVE_BG);

            animateReset($hamburgerMenu);
            animate($hamburgerMenu, 'hamburgerMenu');
        });

        // DEBUG
        // $menuTrigger.click();
    }

    hamburgerMenu();
});
