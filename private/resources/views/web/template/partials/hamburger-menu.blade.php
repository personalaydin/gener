<div class="hamburger-menu bg-white text-black d-flex d-lg-none align-items-center">
    <div class="h-100 w-100 d-flex flex-column justify-content-between">
        <div class="container py-5 py-xs-10 h-100 d-flex flex-column justify-content-between">
            <div class="px-4 w-100 text-main font-size-15 font-size-md-20 font-weight-700 mb-4">
                @if (getPageByTemplate('About'))
                    <div class="hamburger-menu__link">
                        <a href="{{ getPageByTemplate('About')['viewLink'] }}" class="animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="100">
                            {{ textUppercase(getPageByTemplate('About')['title']) }}
                        </a>
                    </div>
                @endif

                @if (getPageByTemplate('WindMachines'))
                    <div class="hamburger-menu__link accoridon-menu-container" >
                        <a href="javascript:void(0);" class="animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="200">
                            {{ textUppercase(getPageByTemplate('WindMachines')['title']) }}
                        </a>
                    </div>
                @endif

                

                <div class="hamburger-menu__link accoridon-menu-element" data-aos="fade-down">
                    <a href="{{ getPageByTemplate('WindMachines')['viewLink'] }}/{!! theSentence('stationary-slug') !!}" class="text-color-red font-weight-400 animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="200">
                        {!! theSentence('stationary-text') !!} {!! theSentence('models-text') !!}
                    </a>
                </div>
                <div class="hamburger-menu__link accoridon-menu-element" data-aos="fade-down">
                    <a href="{{ getPageByTemplate('WindMachines')['viewLink'] }}/{!! theSentence('portable-slug') !!}" class="text-color-red font-weight-400 animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="200">
                        {!! theSentence('portable-text') !!} {!! theSentence('models-text') !!}
                    </a>
                </div>



                @if (getPageByTemplate('Gallery'))
                    <div class="hamburger-menu__link">
                        <a href="{{ getPageByTemplate('Gallery')['viewLink'] }}" class="animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="400">
                            {{ textUppercase(getPageByTemplate('Gallery')['title']) }}
                        </a>
                    </div>
                @endif
                <div class="hamburger-menu__link">
                    <a href="javascript:void(0);" class="js-scroll-to animate animate--fadeIn" data-target="footer" data-animate="fadeInLeft" data-animate-delay="500">
                        CONTACT
                    </a>
                </div>
               
            </div>
            @if (getPageByTemplate('OurSolutions'))
            <div class="hamburger-menu__link ">
                <a class=" h-button h-button__main animate animate--fadeIn px-8 py-2 mx-10 button-center" href="{{ getPageByTemplate('OurSolutions')['viewLink'] }}" data-animate="fadeInLeft" data-animate-delay="600">
                    {{ getPageByTemplate('OurSolutions')['title'] }}
                </a>
            </div>         
            @endif
            <div class="d-flex align-items-center justify-content-center">
                <a href="javascript:void(0);" class="text-main hover-main-red font-size-18 animate animate--fadeIn" data-animate="fadeInDown" data-animate-delay="1000">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <div class="vertical-divider__social-icon vertical-divider__social-icon--bg-red mx-5 animate animate--fadeIn" data-animate="fadeInDown" data-animate-delay="500"></div>
                <a href="javascript:void(0);" class="text-main hover-main-red font-size-18 animate animate--fadeIn" data-animate="fadeInDown" data-animate-delay="1000">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</div>