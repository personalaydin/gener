import '@babel/polyfill';

import 'jquery';
import 'bootstrap';

import './include/auto-scroll-element-with-hash';
import './include/scroll-to';
import './include/calculate-viewport-height';
import './include/form-validation-and-handle';
import './include/magnific-popup';
import './include/slick';
import './include/header-shrink';
import './include/hamburger-menu';
import './include/lightgallery';
import './include/tab-menu';
import './include/cre-animate';


AOS.init({
    duration: 1200,
  })
  


$(".hover-mega-menu-item-1").hover(function() {

    $(this).css("background-color", "#e13438");
    $('.hover-mega-menu-item-1-text-1').removeClass("text-main-dark-blue");
    $('.hover-mega-menu-item-1-text-2').removeClass("text-main-red");
    $('.hover-mega-menu-item-1-text-1').addClass("text-color-white");
    $('.hover-mega-menu-item-1-text-2').addClass("text-color-white");
    $('.hover-mega-menu-item-1-overlay').css("border-left", "2px solid #ffffff");
    $(this).find("img").attr("src", "/assets/img/home/propeller/stationaryhover.png")
    
    }, function() {
    $(this).css("background-color", "#E0EDF3 ");
    $(this).find("img").attr("src", "/assets/img/home/propeller/stationary.png");
    $('.hover-mega-menu-item-1-text-1').removeClass("text-color-white");
    $('.hover-mega-menu-item-1-text-2').removeClass("text-color-white");
    $('.hover-mega-menu-item-1-text-1').addClass("text-main-dark-blue");
    $('.hover-mega-menu-item-1-text-2').addClass("text-main-red");
    $('.hover-mega-menu-item-1-overlay').css("border-left", "2px solid #e13438");
})

$(".hover-mega-menu-item-2").hover(function() {
    $(this).css("background-color", "#e13438");
    $('.hover-mega-menu-item-2-text-1').removeClass("text-main-dark-blue");
    $('.hover-mega-menu-item-2-text-2').removeClass("text-main-red");
    $('.hover-mega-menu-item-2-text-1').addClass("text-color-white");
    $('.hover-mega-menu-item-2-text-2').addClass("text-color-white");
    $('.hover-mega-menu-item-2-overlay').css("border-left", "2px solid #ffffff");
    $(this).find("img").attr("src", "/assets/img/home/propeller/portablehover.png")
    
    }, function() {
    $(this).css("background-color", "#E0EDF3 ");
    $('.hover-mega-menu-item-2-text-1').removeClass("text-color-white");
    $('.hover-mega-menu-item-2-text-2').removeClass("text-color-white");
    $('.hover-mega-menu-item-2-text-1').addClass("text-main-dark-blue");
    $('.hover-mega-menu-item-2-text-2').addClass("text-main-red");
    $('.hover-mega-menu-item-2-overlay').css("border-left", "2px solid #e13438");
    $(this).find("img").attr("src", "/assets/img/home/propeller/portable.png")
    
})


megaMenu();


$(document).ready(function(){


   if(window.matchMedia("(max-width: 991px)").matches){
       $('.js-ignore-mobile-tab-pane').removeClass('tab-pane fade')
       $('.js-ignore-mobile-tab-content').removeClass('tab-content')
   } else{
       $('.js-ignore-mobile-tab-pane').addClass('tab-pane fade')
       $('.js-ignore-mobile-tab-content').addClass('tab-content')
   }

   $('body').on('click','.js-ignore-mobile-tab-content .nav-link-one', function () {
       var $this = $(this);
       var $content = $this.closest('.js-ignore-mobile-tab-content').find('.js-ignore-mobile-tab-pane').first();
        $content.toggle();

   });
   $('body').on('click','.js-ignore-mobile-tab-content .nav-link-two', function () {
    var $this = $(this);
    var $content = $this.closest('.js-ignore-mobile-tab-pane').find('.compare-main-container-portable').first();
     $content.toggle();
     $('.propeller-one').toggle();

});
$('body').on('click','.js-ignore-mobile-tab-content .nav-link-two', function () {
    var $this = $(this);
    var $content = $this.closest('.js-ignore-mobile-tab-pane').find('.compare-main-container--mobile').first();
     $content.toggle();
     $('.propeller-one').toggle();

});
});





// Mega Menu
function megaMenu() {
   // Open when trigger clicked
   $('.js-open-mega-menu').on('click', function() {
       var $megaMenu = $('.mega-menu[data-mega-menu="'+$(this).attr('data-mega-menu')+'"]');

       open($megaMenu);
   });

   // Close when somewhere clicked
   $(document).on('click', function (e) {
       var $megaMenu = $('.mega-menu--open'),
           $target = $(e.target);

       if ($target.hasClass('js-open-mega-menu') ||
           $target.hasClass('mega-menu__item') || $target.parents('.mega-menu__item').length > 0 ||
           $target.hasClass('js-mega-menu-back') || $target.parents('.js-mega-menu-back').length > 0
       ) {
           return;
       }

       close($megaMenu);
   });

   // Close when Escape key pressed
   $(document).keyup(function(e) {
       if (e.which === 27) { // Escape
           var $megaMenu = $('.mega-menu--open');

           close($megaMenu);
       }
   });

   function open($megaMenu) {
       $megaMenu.addClass('mega-menu--open');
       animate($megaMenu);
   }

   function close($megaMenu) {
       if ($megaMenu.length === 0) {
           return;
       }

       $megaMenu.removeClass('mega-menu--open');
       animateReset($megaMenu);
   }
}

function megaMenuMultiLevel() {
   var multiLevelTrigger = $('.js-multi-level'),
       multiLevelMainClass = $('.js-mega-menu'),
       multiLevelBack = $('.js-mega-menu-back'),
       originalMegaMenuTitle = $('.js-mega-menu-title').text();

   multiLevelTrigger.on('click', function(){
       var $this = $(this),
           multiLevelInclusive = $('#' + $this.attr('data-target-id'));

       animateReset(multiLevelInclusive);
       animate(multiLevelInclusive);
       multiLevelMainClass.addClass('mega-menu--slide');
       multiLevelInclusive.removeClass('mega-menu__item__sub-menu--open');
       multiLevelInclusive.addClass('mega-menu__item__sub-menu--open');

       // Change Title
       $('.js-mega-menu-title').html($this.find('span').text());
   });

   multiLevelBack.on('click', function() {
       animateReset($('.js-mega-menu'));
       animate($('.js-mega-menu'));

       $('.mega-menu__item__sub-menu').removeClass('mega-menu__item__sub-menu--open');

       multiLevelMainClass.removeClass('mega-menu--slide');

       // Change Title
       $('.js-mega-menu-title').html(originalMegaMenuTitle);
   });
}

$('.accoridon-menu-element').hide();



$(document).ready(function(){
    $(".accoridon-menu-container").click(function(){
      $(".accoridon-menu-element").toggle();
    });
  });


                



