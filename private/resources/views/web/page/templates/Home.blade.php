@extends('web.template.layout')

@section('content')
    <div class="header__overflow d-lg-none"></div>
    <div id="main-carousel" class="js-slick main-slider slick-carousel--full-height" data-slick='{
        "autoplay": false,
        "autoplaySpeed": 5000,
        "arrows": false,
        "fade": false,
        "lazyLoad": "ondemand"
    }'>
        <div class="main-slider__item main-slider__item--1 background-cover d-flex flex-column flex-lg-row align-items-center h-100">
            <div class="d-lg-none my-8">
                <img class="mobile-banner-image" src="{{ asset('assets/img/slider/1-mobile.png') }}" alt=" Gener Rüzgar Makineleri">
            </div>
            <div class="width-lg-60 width-xl-50 width-xxl-60 mx-auto">
                <div class="text-main-red font-weight-600 font-size-16 font-size-md-14 font-size-lg-17 text-center text-lg-left mb-1">{!! theSentence('home-slider-1', false) !!}</div>
                <div class="slider-mobile-text-width text-main-dark-blue font-weight-700 font-size-26 font-size-md-26 font-size-lg-36 font-size-xxxl-44 line-height-1-2 text-center text-lg-left mb-lg-3 mb-xxxl-5">
                    <h1>
                        <strong>
                            {!! theSentence('home-slider-2', false) !!}
                        </strong>
                    </h1>
                    <div>
                        <h1>
                            {!! theSentence('home-slider-3', false) !!}
                        </h1>
                    </div>
                </div>
                <div class="text-main font-weight-500 font-size-14 font-size-md-13 font-size-lg-15 font-size-xl-17 text-center text-lg-left mb-5 mb-lg-7 mb-xxxl-10">{!! theSentence('home-slider-4', false) !!}</div>
                <div class="text-main-dark-blue font-weight-700 font-size-lg-18 d-flex align-items-center justify-content-center justify-content-lg-start">
                    <div class="vertical-divider__main-red vertical-divider__main-red--explore"></div>
                    <a href="javascript:void(0);" data-target=".propeller" class="js-scroll-to h-sweep-to-right py-1 px-5">{!! theSentence('home-slider-5', false) !!}  </a>
                </div>
            </div>
        </div>
        {{-- <div class="main-slider__item main-slider__item--1 background-cover d-flex flex-column flex-lg-row align-items-center h-100">
            <div class="d-lg-none my-10 ">
                <img class="mobile-banner-image" src="{{ asset('assets/img/slider/1-mobile.png') }}" alt="">
            </div>
            <div class="width-lg-60 width-xl-50 width-xxl-60 mx-auto">
                <div class="text-main-red font-weight-600 font-size-16 font-size-lg-17 text-center text-lg-left mb-1">ACCUMSAN QUAM</div>
                <div class="text-main-dark-blue font-weight-700 font-size-26 font-size-lg-36 font-size-xxxl-44 line-height-1-2 text-center text-lg-left mb-lg-3 mb-xxxl-5">
                    <strong>LOREM IPSUM</strong>
                    <div>DOLOR SIT AMET</div>
                </div>
                <div class="text-main font-weight-500 font-size-14 font-size-lg-15 font-size-xl-17 text-center text-lg-left mb-5 mb-lg-7 mb-xxxl-10">Vivamus eget velit porttitor, luctus mi at, accumsan quam. <br> Sed eu placerat ligula. </div>
                <div class="text-main-dark-blue font-weight-700 font-size-lg-18 d-flex align-items-center justify-content-center justify-content-lg-start">
                    <div class="vertical-divider__main-red vertical-divider__main-red--explore"></div>
                    <a href="javascript:void(0);" class="h-sweep-to-right py-1 px-5">EXPLORE</a>
                </div>
            </div>
        </div>  --}}
    </div>
    {{-- <div class="main-slider__custom-arrow wrapper-double w-100 d-none d-lg-flex align-items-center justify-content-center">
        <button type="button" class="custom-slick-prev text-main font-weight-500 font-size-14" data-related-carousel="#main-carousel" data-slick-prev>
            <div class="d-flex align-items-center">
                <div class="horizontal-divider horizontal-divider__arrows"></div>
                <span class="transition-all-3 py-1 px-2 ml-1">{!! theSentence('home-slider-back', false) !!}   </span>
                <div class="main-slider__custom-number text-main-red font-weight-500 font-size-18" data-related-carousel="#main-carousel" data-slick-pagination>1/2</div>
            </div>
        </button>
        <button type="button" class="custom-slick-next text-main font-weight-500 font-size-14" data-related-carousel="#main-carousel" data-slick-next>
            <div class="d-flex align-items-center flex-row-reverse">
                <div class="horizontal-divider horizontal-divider__arrows"></div>
                <span class="transition-all-3 py-1 px-2 mr-1">{!! theSentence('home-slider-next', false) !!}  </span>
            </div>
        </button>
    </div> --}}
    <div class="d-none d-lg-block">
        <a href="javascript:void(0);" class="d-flex flex-column align-items-center justify-content-center mb-2">
            <span class="scroll-icon">
                <span class="scroll-icon__wheel-outer">
                    <span class="scroll-icon__wheel-inner"></span>
                </span>
            </span>
            <div class="scroll-icon__down">
                {{ svg_image('assets/img/icons/chevron-down')}}
            </div>
        </a>
        <div class="text-center">
            <a href="javascript:void(0);" class="js-scroll-to h-button h-button__aqua-blue h-sweep-to-right min-width-240 font-size-14 font-weight-600 py-3" data-target=".propeller">{!! theSentence('home-slider-5', false) !!} </a>
        </div>
    </div>
    <div class="width-lg-90 propeller py-10 py-lg-0 pt-lg-60 text-right mr-lg-n30 ml-lg-auto"  >
        <div class="row position-relative flex-column-reverse flex-lg-row">
            <div class="propeller__mobile-position propeller__mobile-position--1 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start mt-lg-10 mt-xxl-0 mt-xxxl-24 position-relative propeller-mobil-item-center">
                    <div class="propeller__item text-center text-lg-left pr-lg-10 pt-lg-60" data-aos="fade-right">
                        <div class="text-main-red font-weight-700 font-size-16 font-size-lg-14">{!! theSentence('home-1', false) !!} </div>
                        <div class="text-main-dark-blue font-weight-700 font-size-26 font-size-md-26 font-size-lg-32 font-size-xl-38 font-size-xxxxl-44 line-height-1-2 text-center text-lg-left mb-lg-3 mb-xxxl-5">
                            {!! theSentence('home-2', false) !!} 
                        </div>
                        <div class="row">
                                <div class="horizontal-divider horizontal-divider__home mt-4  d-none d-lg-block "></div>
                                <div class=col><div class="font-weight-600 font-size-14 font-size-lg-16 mb-0">{!! theSentence('home-3', false) !!} </div></div>
                            </div>
                            <div class="row">
                                <div class="horizontal-divider horizontal-divider__home mt-2  d-none d-lg-block"></div>
                                <div class=col><div class="font-weight-600 font-size-14 font-size-lg-16 mb-0">{!! theSentence('home-4', false) !!} </div></div>
                            </div>
                            <div class="row">
                                <div class="horizontal-divider horizontal-divider__home mt-2  d-none d-lg-block"></div>
                                <div class=col><div class="font-weight-600 font-size-14 font-size-lg-16 mb-2 ">{!! theSentence('home-5', false) !!} </div></div>
                            </div>
                        </div>
                    <div class="propeller__divider"></div>
                </div>
            </div>
            <div class="col-lg-24 d-none d-lg-block">
                <img class="img-fluid" src="{{ asset('assets/img/home/propeller/1.png') }}" alt="">
            </div>
            <div class="col-lg-24 d-lg-none text-center">
                <img class="img-fluid " src="{{ asset('assets/img/home/propeller/1-mobile.png') }}" alt="">
            </div>
        </div>
        <div class="row position-relative flex-column-reverse flex-lg-row">
            <div class="propeller__mobile-position propeller__mobile-position--2 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start mt-lg-10 mt-xxl-0 mt-xxxl-24 propeller-mobil-item-2-center position-relative">
                    <div class="propeller__item text-center text-lg-left pr-lg-10" data-aos="fade-right">       
                        <div class="text-main-dark-blue font-weight-700 font-size-26 font-size-md-26 font-size-lg-32 font-size-xl-38 font-size-xxxxl-44 line-height-1-2 text-center text-lg-left mb-lg-3 mb-xxxl-5">
                            {!! theSentence('home-6', false) !!}
                        </div>
                            <div class="row">
                                <div class="horizontal-divider horizontal-divider__home mt-4  d-none d-lg-block"></div>
                                <div class=col><div class="font-weight-600 font-size-14 font-size-lg-16 mb-0">{!! theSentence('home-7', false) !!}</div></div>
                            </div>
                            <div class="row">
                                <div class="horizontal-divider horizontal-divider__home mt-2  d-none d-lg-block"></div>
                                <div class=col><div class="font-weight-600 font-size-14 font-size-lg-16 mb-0">{!! theSentence('home-8', false) !!}</div></div>
                            </div>
                            <div class="row">
                                <div class="horizontal-divider horizontal-divider__home mt-2  d-none d-lg-block"></div>
                                <div class=col><div class="font-weight-600 font-size-14 font-size-lg-16 mb-2">{!! theSentence('home-9', false) !!}</div></div>
                            </div>
                        </div>
                    
                    <div class="propeller__divider"></div>
                </div>
            </div>
            <div class="col-lg-24 d-none d-lg-block">
                <img class="img-fluid" src="{{ asset('assets/img/home/propeller/2.png') }}" alt="">
            </div>
            <div class="col-lg-24 d-lg-none text-center">
                <img class="img-fluid" src="{{ asset('assets/img/home/propeller/2-mobile.png') }}" alt="Volvo Penta Motor">
            </div>
        </div>
        <div class="row position-relative flex-column-reverse flex-lg-row">
            <div class="propeller__mobile-position propeller__mobile-position--3 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                <div class="d-none d-xxl-block text-left">
                    <img class="width-50 width-xxxl-auto" src="{{ asset('assets/img/home/propeller/volvo-penta-engine.png') }}" alt="Volvo Penta Motor">
                </div>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start mt-lg-40 mt-xxl-0 position-relative propeller-mobil-item-3-center">
                    <div class="propeller__item text-center text-lg-left pr-lg-10" data-aos="fade-right">
                        <div class="text-main-red font-weight-700 font-size-16 font-size-lg-14">{!! theSentence('home-10', false) !!}</div>
                        <div class="text-main-dark-blue font-weight-700 font-size-26 font-size-md-26 font-size-lg-32 font-size-xl-38 font-size-xxxxl-44 line-height-1-2 text-center text-lg-left mb-lg-3 mb-xxxl-5">
                            {!! theSentence('home-11', false) !!}
                        </div>
                    
                        <div class="row">
                            <div class="horizontal-divider horizontal-divider__home mt-4  d-none d-lg-block"></div>
                                <div class=col><div class="font-weight-600 font-size-14 font-size-lg-16 mb-0">{!! theSentence('home-12', false) !!}</div></div>
                            </div>
                            <div class="row">
                                <div class="horizontal-divider horizontal-divider__home mt-2  d-none d-lg-block"></div>
                                <div class=col><div class="font-weight-600 font-size-14 font-size-lg-16 mb-0">{!! theSentence('home-13', false) !!}</div></div>
                            </div>
                            <div class="row">
                                <div class="horizontal-divider horizontal-divider__home mt-2  d-none d-lg-block"></div>
                                <div class=col><div class="font-weight-600 font-size-14 font-size-lg-16 mb-2">{!! theSentence('home-14', false) !!}</div></div>
                            </div>
                        </div>
                    <div class="propeller__divider"></div>         
                </div>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start mt-lg-10 mt-xxl-0 mt-xxxl-24 position-relative propeller-mobil-item-4-center " >
                    <div class="mt-0 mt-md-10 propeller__item text-center text-lg-left pr-lg-10" data-aos="fade-right">
                        <div class="text-main-red font-weight-700 font-size-16 font-size-lg-14">{!! theSentence('home-15', false) !!}</div>
                        <div class="text-main-dark-blue font-weight-700 font-size-26 font-size-md-26 font-size-lg-32 font-size-xl-38 font-size-xxxxl-44 line-height-1-2 text-center text-lg-left mb-lg-3 mb-xxxl-5">
                            {!! theSentence('home-16', false) !!}
                        </div>
                        <div class="row">
                                <div class="horizontal-divider horizontal-divider__home mt-4  d-none d-lg-block"></div>
                                <div class=col>
                                    <div class="font-weight-600 font-size-14 font-size-lg-16 mb-0">{!! theSentence('home-17', false) !!}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="horizontal-divider horizontal-divider__home mt-2  d-none d-lg-block"></div>
                                <div class=col>
                                    <div class="font-weight-600 font-size-14 font-size-lg-16 mb-0">{!! theSentence('home-18', false) !!}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="horizontal-divider horizontal-divider__home mt-2  d-none d-lg-block"></div>
                                <div class=col>
                                    <div class="font-weight-600 font-size-14 font-size-lg-16 mb-2">{!! theSentence('home-19', false) !!}</div>
                                </div>
                            </div>
                    </div>
                    <div class="propeller__divider"></div>
                </div>
            </div>
            <div class="col-lg-24 d-none d-lg-block">
                <img class="img-fluid" src="{{ asset('assets/img/home/propeller/3.png') }}" alt="Volvo Penta Motor">
            </div>
            <div class="col-lg-24 d-lg-none text-center">
                <img class="img-fluid" src="{{ asset('assets/img/home/propeller/4-mobile.png') }}" alt="Volvo Penta Motor">
            </div>
        </div>
        <div class="row position-relative flex-column-reverse flex-lg-row">
            <div class="propeller__mobile-position propeller__mobile-position--3 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9 pt-0 ">
                <div class="col-lg-32 d-lg-block d-none text-left">
                    <img class="width-50 width-xxxl-auto mb-12" src="{{ asset('assets/img/home/propeller/calculate.png') }}" alt="">
                </div>
                <div class="col-lg-24 d-lg-none text-center">
                <img class="img-fluid" src="{{ asset('assets/img/home/propeller/calculate-mobil.png') }}" alt="DCU Otomatik Kontrol">
                </div>
                <div class="mt-md-0 mt-10 d-flex align-items-center justify-content-center justify-content-lg-start mt-lg-40 mt-xxl-0 position-relative">
                    <div class="propeller__item text-center text-lg-left pr-lg-10" data-aos="fade-right">
                        <div class="text-main-red font-weight-700 font-size-16 font-size-lg-14">{!! theSentence('home-20', false) !!}    </div>
                        <div class="text-main-dark-blue font-weight-700 font-size-26 font-size-md-26 font-size-lg-32 font-size-xl-38 font-size-xxxxl-44 line-height-1-2 text-center text-lg-left mb-lg-3 mb-xxxl-5">
                            {!! theSentence('home-21', false) !!} 
                        </div>
                        <div class="row">
                            <div class="horizontal-divider horizontal-divider__home mt-4  d-none d-lg-block"></div>
                                <div class=col><div class="font-weight-600 font-size-14 font-size-lg-16 mb-0">{!! theSentence('home-22', false) !!} </div></div>
                            </div>
                            <div class="row">
                                <div class="horizontal-divider horizontal-divider__home mt-2  d-none d-lg-block"></div>
                                <div class=col>
                                    <div class="font-weight-600 font-size-14 font-size-lg-16 mb-0">{!! theSentence('home-23', false) !!} </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="horizontal-divider horizontal-divider__home mt-2  d-none d-lg-block"></div>
                                <div class=col><div class="font-weight-600 font-size-14 font-size-lg-16 mb-2">{!! theSentence('home-24', false) !!} </div></div>
                            </div>
                        </div>
                     {{-- <div class="propeller__divider"></div>  --}}
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="propeller text-right mr-lg-n30 ml-lg-auto mb-0 propeller-main-container mb-50" >
        <div class="row position-relative flex-column-reverse flex-lg-row">
           
            <div class="col-48 col-lg-24 offset-lg-4 col-xxl-17  col-xxxxl-15 offset-xxxxl-6">
                <div class="propeller__item text-center text-lg-left pr-lg-10">
                    <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                        <a  class="" href="{{ getPageByTemplate('WindMachines')['viewLink'] }}/{!! theSentence('stationary-slug') !!}">
                        <div class="col mt-md-40 mt-10 mt105 portable-center">
                            <img class="mobil-image-center" src="{{ asset('assets/img/product/inner-solidity-right.png') }}" class="ml-md-10" alt="Sabit Makineler">
                            <div class="p-md-10 portable-text-center text-main-dark-blue font-weight-700 font-size-lg-18 d-flex align-items-center justify-content-md-center justify-content-lg-start">
                                <div class="marge1">
                                    <div class="vertical-divider__main-red mr-5 vertical-divider__main-red--in">
                                        <span class="h-sweep-to-right text-main-dark-blue font-weight-700 font-size-18 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28 d-block ml-5">{!! theSentence('stationary-text') !!}</span>
                                        <span class="text-main-red font-weight-700 font-size-10 font-size-lg-12  d-block ml-md-5  ml-4 w-100" style="width: 100px !important; color:#c30f1a">{!! theSentence('windmachines-text') !!}</span>
                                        {{-- <span class="font-weight-600 font-size-14 font-size-lg-16 d-block ml-5 w-100 mt-3 text-align-left" style="width: 170px !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div> 
                </div>  
            </div>
            <div class=" mt-20 mt-md-0  col-48 col-lg-24 offset-lg-4 col-xxl-17 col-xxxxl-15 offset-xxxxl-9">
                <div class="propeller__item text-center text-lg-left pr-lg-10">
                    <div class="ml40" style="margin-top:0px;">
                        <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                            <a  class="" href="{{ getPageByTemplate('WindMachines')['viewLink'] }}/{!! theSentence('portable-slug') !!}">
                            <div class="col mt-md-40 mt-10 portable-center">
                                <img src="{{ asset('assets/img/product/inner-solidity-left.png') }}" alt="Sabit Makineler">
                                <div class="p-md-10 portable-text-center text-main-dark-blue font-weight-700 font-size-lg-18 d-flex align-items-center justify-content-md-center justify-content-lg-start">
                                    <div class="marge1">
                                        <div class="vertical-divider__main-red mr-5 vertical-divider__main-red--in">
                                        <span class="h-sweep-to-right text-main-dark-blue font-weight-700 font-size-18 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28 d-block ml-5">{!! theSentence('portable-text') !!}</span>
                                        <span class="text-main-red font-weight-700 font-size-10 font-size-lg-12  d-block ml-md-5  ml-4 w-100" style="width: 100px !important; color:#c30f1a">{!! theSentence('windmachines-text') !!}</span>
                                        {{-- <span class="font-weight-600 font-size-16 font-size-lg-16 d-block ml-5 w-100 mt-3 text-align-left" style="width: 170px !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</span> --}}
                                    </div>
                                </div>
                                </div>
                            </div>
                            </a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="width-80 mx-auto mb-20 mb-lg-40">
        <div class="row align-items-stretch">
            <div class="col-lg-26 px-0 position-centering">
                <img class="img-fluid w-100" src="{{ asset('assets/img/home/support-service.jpg') }}" alt="Destek Hizmeti">
            </div>
            {{-- <div class="col-lg-24 px-0">
                <div class="bg-gray text-main-dark-blue h-100 px-8 py-10 px-xxl-10 py-xxl-16 px-xxxl-16 py-xxxl-24">
                    <div class="d-flex align-items-center mb-4 mb-xxl-6">
                        <div class="horizontal-divider horizontal-divider__support-services"></div>
                        <div class="pl-2 pl-lg-5 font-weight-700 font-size-18 font-size-sm-20 font-size-lg-26 font-size-xl-32 font-size-xxxl-40 font-size-xxxxl-50">{!! theSentence('home-25', false) !!} </div>
                    </div>
                    <div class="font-size-16 font-size-xxl-20 font-size-xxxl-24 mb-5 mb-xxxl-10">{!! theSentence('home-26', false) !!}  </div>
                    <div class="font-size-14 font-size-lg-15 font-size-xxl-17 font-weight-500">
                        {!! theSentence('home-27', false) !!}  
                        <br><br>
                        {!! theSentence('home-28', false) !!}  
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
