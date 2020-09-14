<header class="header py-3 py-lg-10">
    <div class="wrapper-double">
        <div class="row align-items-center">
            <div class="col-11 d-lg-none">
                <div class="dropdown">
                    <button class="header__lang-switcher font-weight-500" type="button" data-toggle="dropdown">
                        {{ textUppercase(app()->getLocale()) }}
                    </button>
                    <div class="dropdown-menu">
                        @foreach(config('app.locales') as $key => $locale)
                            @if ($key === app()->getLocale()) @continue @endif

                            <a class="dropdown-item" href="{{ $localizationURLs[$key] ?? '' }}">
                                {{ textUppercase($key) }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-26 col-lg-7 text-center text-lg-left">
                <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="header__logo h-100">
                    {{ svg_image('assets/img/logo-old') }}
                </a>
            </div>
            <div class="col-11 col-lg-41 d-flex align-items-center justify-content-end d-lg-block">
                <div class="header__menu d-none d-lg-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-stretch font-weight-700 font-size-12 font-size-xl-13 mr-lg-3 mr-xl-5 mr-xxl-10">
                        @if (getPageByTemplate('OurSolutions'))
                            <a class="header__menu__item h-button h-button__main h-sweep-to-right font-size-14 py-1 px-7 mx-2" href="{{ getPageByTemplate('OurSolutions')['viewLink'] }}">{{ getPageByTemplate('OurSolutions')['title'] }}</a>
                        @endif

                        @if (getPageByTemplate('About'))
                            <a class="header__menu__item h-sweep-to-right px-1 px-xxl-4 mx-2" href="{{ getPageByTemplate('About')['viewLink'] }}">{{ textUppercase(getPageByTemplate('About')['title']) }}</a>
                        @endif

                        {{-- @if (getPageByTemplate('WindMachines'))
                            <a class="header__menu__item h-sweep-to-right px-1 px-xxl-4 mx-2" href="{{ getPageByTemplate('WindMachines')['viewLink'] }}">{{ textUppercase(getPageByTemplate('WindMachines')['title']) }}</a>
                        @endif --}}

                        @if (getPageByTemplate('WindMachines'))
                            <a href="javascript:void(0);" data-mega-menu="wind-machines" class="js-open-mega-menu header__menu__item h-sweep-to-right px-1 px-xxl-4 mx-2">
                                {{ textUppercase(getPageByTemplate('WindMachines')['title']) }}
                            </a>
                        @endif

                        @if (getPageByTemplate('Gallery'))
                            <a class="header__menu__item h-sweep-to-right px-1 px-xxl-4 mx-2" href="{{ getPageByTemplate('Gallery')['viewLink'] }}">{{ textUppercase(getPageByTemplate('Gallery')['title']) }}</a>
                        @endif

                        <a class="js-scroll-to header__menu__item h-sweep-to-right px-1 px-xxl-4 mx-2" data-target="footer" href="javascript:void(0);"> {!! theSentence('contact-page') !!}</a>
                    </div>
                    <div class="d-flex align-items-center mr-lg-3 mr-xl-5 mr-xxl-10">
                        @if (setting('social_facebook'))
                            <a target="_blank" href="{{ setting('social_facebook') }}" class="hover-main-red">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        @endif
                        @if (setting('social_facebook') && setting('social_instagram'))
                            <div class="vertical-divider__social-icon mx-lg-3 mx-xl-5"></div>
                        @endif
                        @if (setting('social_instagram'))
                            <a target="_blank" href="{{ setting('social_instagram') }}" class="hover-main-red">
                                <i class="fab fa-instagram"></i>
                            </a>
                        @endif
                    </div>
                    <div class="dropdown">
                        <button class="header__lang-switcher h-sweep-to-right font-weight-500" type="button" data-toggle="dropdown">
                            {{ textUppercase(app()->getLocale()) }}
                        </button>
                        <div class="dropdown-menu">
                            @foreach(config('app.locales') as $key => $locale)
                                @if ($key === app()->getLocale()) @continue @endif

                                <a class="dropdown-item" href="{{ $localizationURLs[$key] ?? '' }}">
                                    {{ textUppercase($key) }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="hamburger-menu-button-wrapper d-lg-none">
                    <button class="js-hamburger-menu-trigger hamburger hamburger--spin" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mega-menu text-color-white" data-mega-menu="wind-machines">
    <div class="header__overflow"></div> 
    <div class="product">
        <div class="product__item product__item--6">
            <div class="row">
                <div class="col-24 hover-mega-menu hover-mega-menu-item-1 mega-center">
                    <a class="" href="{{ getPageByTemplate('WindMachines')['viewLink'] }}/{!! theSentence('stationary-slug') !!}">
                    <div class="center-image">
                        <img class="w-50 img-fluid stationary-image-wild-machines hover-mega-menu-item-1-img" src="{{ asset('assets/img/home/propeller/stationary.png') }}" alt=""  >
                        <div class="overlay-center hover-mega-menu-item-1-overlay">
                            <div class="hover-mega-menu-item-1-text-1 pl-2  text-main-dark-blue font-weight-700 font-size-14 font-size-md-16 font-size-lg-20 font-size-xl-28 font-size-xxxxl-38 line-height-1-2  text-lg-left mb-lg-1 mb-xxxl-1">  
                                {!! theSentence('stationary-text') !!}
                            </div>
                            <div class="hover-mega-menu-item-1-text-2 pl-2  text-main-red font-weight-700 font-size-10 font-size-lg-12"> 
                                <h1 class="font-size-16">
                                    {!! theSentence('mega-menu-windmachines-text') !!}
                                </h1>
                            </div>   
                        </div>    
                    </div>
                    </a>
                </div>
                                             
                <div class="col-24 hover-mega-menu hover-mega-menu-item-2">
                    <a class="" href="{{ getPageByTemplate('WindMachines')['viewLink'] }}/{!! theSentence('portable-slug') !!} ">                   
                    <div class="center-image " >
                        <img class="w-50 img-fluid stationary-image-wild-machines portable-margin" src="{{ asset('assets/img/home/propeller/portable.png') }}" alt="">
                        <div class="overlay-center hover-mega-menu-item-2-overlay">
                            <div class="hover-mega-menu-item-2-text-1 pl-2  text-main-dark-blue font-weight-700 font-size-14 font-size-md-16 font-size-lg-20 font-size-xl-28 font-size-xxxxl-38 line-height-1-2  text-lg-left mb-lg-1 mb-xxxl-1">  
                                {!! theSentence('portable-text') !!}
                            </div>
                            <div class="hover-mega-menu-item-2-text-2 pl-2  text-main-red font-weight-700 font-size-10 font-size-lg-12">
                                <h1 class="font-size-16">
                                    {!! theSentence('mega-menu-windmachines-text') !!}    
                                </h1>
                            </div>   
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>     
</div>
