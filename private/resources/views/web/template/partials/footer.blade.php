<footer class="footer background-cover min-height-auto min-lg-height-730 pb-10 py-lg-0">
    <div class="wrapper-double">
        <div class="row align-items-center">
            <div class="col-lg-20 col-xl-24 col-xxxl-26 order-2 order-lg-1 mb-10 mb-lg-0">
                <div class="row">
                    <div class="col-xxl-16 d-none d-lg-block mb-7 mb-lg-14 mb-xxl-0">
                        <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="footer__logo">
                             {{ svg_image('assets/img/logo-1') }}
                        </a>
                    </div>
                    <div class="col-xxl-32">
                        <div class="row flex-column justify-content-between min-height-lg-230">
                            <div class="col-48 mb-lg-7 mb-xxl-0">
                                <div class="row">
                                    <div class="col-xxl-20 mb-lg-7 mb-xxl-0 order-2 order-lg-1">
                                        <div class="footer__menu d-flex flex-column align-items-center flex-lg-row align-items-lg-start">
                                            <div class="vertical-divider__main-red d-none d-lg-block mr-5"></div>
                                            <div class="horizontal-divider horizontal-divider__contact-us d-block d-lg-none mb-5"></div>
                                            <ul class="list-unstyled text-white font-weight-600 font-size-12 text-center text-lg-left">
                                                @if (getPageByTemplate('OurSolutions'))
                                                    <li class="mb-7 hover-main-red transition-all-3 letter-spacing-1">
                                                        <a href="{{ getPageByTemplate('OurSolutions')['viewLink'] }}">{{ textUppercase(getPageByTemplate('OurSolutions')['title']) }}</a>
                                                    </li>
                                                @endif
                                                @if (getPageByTemplate('About'))
                                                    <li class="mb-7 hover-main-red transition-all-3 letter-spacing-1">
                                                        <a href="{{ getPageByTemplate('About')['viewLink'] }}">{{ textUppercase(getPageByTemplate('About')['title']) }}</a>
                                                    </li>
                                                @endif
                                                @if (getPageByTemplate('WindMachines'))
                                                    <li class="mb-7 hover-main-red transition-all-3 letter-spacing-1">
                                                        <a href="{{ getPageByTemplate('WindMachines')['viewLink'] }}">{{ textUppercase(getPageByTemplate('WindMachines')['title']) }}</a>
                                                    </li>
                                                @endif
                                                @if (getPageByTemplate('Gallery'))
                                                    <li class="mb-7 hover-main-red transition-all-3 letter-spacing-1">
                                                        <a href="{{ getPageByTemplate('Gallery')['viewLink'] }}">{{ textUppercase(getPageByTemplate('Gallery')['title']) }}</a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xxl-28 mb-5 mb-lg-0 order-1 order-lg-2">
                                        <div class="d-flex flex-column align-items-center flex-lg-row align-items-lg-start">
                                            <div class="vertical-divider__main-red d-none d-lg-block mr-5"></div>
                                            <div class="horizontal-divider horizontal-divider__contact-us d-block d-lg-none mb-5"></div>
                                            <ul class="list-unstyled text-white font-weight-600 font-size-12 text-center text-lg-left">
                                                @if (setting('phone-1'))
                                                <li class="mb-7 hover-main-red transition-all-3 letter-spacing-1">
                                                    <a href="{{ phoneToURLTel(setting('phone-1')) }}">{{ setting('phone-1') }}</a>
                                                </li>
                                                @endif

                                                @if (setting('phone'))
                                                <li class="mb-7 hover-main-red transition-all-3 letter-spacing-1">
                                                    <a href="{{ phoneToURLTel(setting('phone')) }}">{{ setting('phone') }}</a>
                                                </li>
                                                    
                                                @endif

                                                @if (setting('email'))
                                                    <li class="mb-7 hover-main-red transition-all-3 letter-spacing-1">
                                                        <a href="mailto:{{ setting('email')  }}">{{ textUppercase(setting('email')) }}</a>
                                                    </li>
                                                @endif

                                                <li class="mb-7 hover-main-red transition-all-3 letter-spacing-1">
                                                    @if (setting('map_url'))
                                                        <a href="{{ setting('map_url') }}" target="_blank">
                                                    @endif
                                                            {!! nl2br(setting('address')) !!}
                                                    @if (setting('map_url'))
                                                        </a>
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-48">
                                <div class="font-size-12 text-white text-center text-lg-left">{{ date('Y') }} © Gener Tarımsal Alet Makina| Tüm hakları saklıdır.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-44 offset-2 col-lg-17 offset-lg-0 col-xl-16 col-xxxl-14 order-1 order-lg-2 mb-10 mb-lg-0">
                <div class="footer__form bg-white px-lg-8 px-xxl-15 py-8 py-lg-10 min-height-lg-730">
                    <form action="{{ route('web.'.app()->getLocale().'.ajax.contact') }}" class="js-form-validation-handle mt-lg-n20" method="post">
                        <div class="d-flex flex-column flex-lg-row align-items-center font-size-18 font-size-md-22 font-size-lg-26 font-weight-600 mb-7">
                            <span>
                                {!! theSentence('contact-us') !!}
                            </span>
                            <div class="horizontal-divider horizontal-divider__contact-us mt-2 mt-lg-0 ml-lg-5"></div>
                        </div>
                        @honeypot
                        @csrf

                        <div class="alert alert-success d-none"></div>

                        <div class="form-group">
                            <input name="name" type="text" class="form-control" id="name" placeholder="{!! theSentence('name') !!} *" data-rule-required="true">
                        </div>
                        <div class="form-group">
                            <input name="surname" type="text" class="form-control" id="surname" placeholder="{!! theSentence('surname') !!} *" data-rule-required="true">
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" id="email" placeholder="{!! theSentence('email') !!} *" data-rule-required="true" data-rule-email="true">
                        </div>
                        <div class="form-group">
                            <input name="subject" type="text" class="form-control" id="surname" placeholder="{!! theSentence('subject') !!} *" data-rule-required="true">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" rows="3" data-rule-required="true" placeholder="{!! theSentence('message') !!} *"></textarea>
                        </div>
                        @if (getPageByTemplate('InformationText'))
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input name="information_text" type="checkbox" class="custom-control-input" id="information_text" data-rule-required="true">
                                    <label class="custom-control-label text-main js-popup-ajax" for="information_text">
                                        {!! getSentence('information-text', false, [
                                            'link' => getPageByTemplate('InformationText')['viewLink']
                                        ]) !!}
                                    </label>
                                </div>
                            </div>
                        @endif

                        <button type="submit" class="h-button h-button__light-blue h-sweep-to-right py-2 w-100 px-4 font-weight-600 white-space-nowrap font-size-16">
                            {!! theSentence('send') !!}
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-11 col-xl-8 order-3">
                <div class="d-flex flex-column justify-content-between text-center text-white min-height-lg-330">
                    <div class="d-flex flex-column align-items-center justify-content-center mb-5 mb-lg-0">
                        <div class="vertical-divider__main-red mb-7 d-none d-lg-flex"></div>
                        <div class="horizontal-divider horizontal-divider__contact-us d-block d-lg-none mb-5"></div>
                        @if (setting('social_facebook'))
                            <div class="mb-3 mb-lg-5">
                                <a href="{{ setting('social_facebook') }}" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                        @endif

                        @if (setting('social_instagram'))
                            <div class="mb-3 mb-lg-5">
                                <a href="{{ setting('social_instagram') }}" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="mb-10">
                        <a href="{{ setting('map_url') }}" class="footer__google-maps" target="_blank">
                            <img src="{{ asset('assets/img/icons/google-maps.png') }}" alt="Google Maps">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
