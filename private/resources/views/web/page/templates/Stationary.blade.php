@extends('web.template.layout')

@section('content')


<div class="header__overflow"></div> 
    <div id="main-carousel" class="js-slick main-slider slick-carousel--full-height" data-slick='{
        "autoplay": true,
        "autoplaySpeed": 1500,
        "arrows": false,
        "fade": false,
        "lazyLoad": "ondemand"
    }'>
    <div class="main-slider__item main-slider__item--2 background-cover d-flex flex-column flex-lg-row align-items-center h-100 mobile-stationary-slide-center"  data-aos="fade-in">
        <div class="wind-machine-slider-item-desktop mt-60 width-lg-60 width-xl-50 width-xxl-60 mx-auto slide-banner">
            <div class="text-main-dark-blue font-weight-700 font-size-20 font-size-md-28 font-size-lg-36 font-size-xxxl-44 line-height-1-1 text-center text-lg-left mb-lg-3 mb-xxxl-5">
                <h1 class="d-block text-main-red font-weight-600 font-size-14 font-size-md-20 font-size-lg-24 font-size-xl-24 font-size-xxxxl-28 ">
                    {!! theSentence('stationary-text') !!}
                </h1>
                <strong>{!! theSentence('portable-text-inside') !!}</strong>
                <h1 class="text-main-dark-blue font-weight-400 font-size-18 font-size-md-24 font-size-lg-32 font-size-xxxl-40 line-height-1-1 text-center text-lg-left mb-lg-3 mb-xxxl-5">
                    {!! theSentence('windmachines-text', false) !!}
                </h1>
            </div>
            <div style="width:300px" class="text-main font-weight-500 font-size-11 font-size-md-13 font-size-lg-14 font-size-xl-14 text-center text-lg-left mb-5 mb-lg-7 mb-xxxl-10">
                {!! theSentence('stationary-2', false) !!}      
            </div>
            <div class="text-main-dark-blue font-weight-700 font-size-lg-18 d-flex align-items-center justify-content-center justify-content-lg-start">
                <div class="vertical-divider__main-red vertical-divider__main-red--explore"></div>
                <a href="javascript:void(0);" class="js-scroll-to h-sweep-to-right py-1 px-5" data-target=".wind-machine-slider-back-button">{!! theSentence('stationary-3', false) !!} </a>
            </div>
            {{-- <div class="text-main-dark-blue font-weight-400 font-size-lg-18 d-flex align-items-center justify-content-center justify-content-lg-start pt-20 ">
                <div class="d-flex align-items-center flex-row-reverse" style="margin-top: -70px; margin-left: -5px;">
                    <div class="horizontal-divider horizontal-divider__arrows"></div>
                    <span class="transition-all-3 py-1 px-2 mr-1  font-size-14 font-weight-500"> 
                        <button  type="button" class="text-color-main" data-related-carousel="#main-carousel" style="background-color: unset !important;">
                            {!! theSentence('stationary-next', false) !!} 
                    </button>
                    </span>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="main-slider__item main-slider__item--4 background-cover d-flex flex-column flex-lg-row align-items-center h-100"  data-aos="fade-down" >
        <div class="wind-machine-slider-item-desktop mt-60 width-lg-60 width-xl-50 width-xxl-60 mx-auto slide-banner">
            <div class="text-main-dark-blue font-weight-700 font-size-20 font-size-md-28 font-size-lg-36 font-size-xxxl-44 line-height-1-1 text-center text-lg-left mb-lg-3 mb-xxxl-5">
                <h1 class="d-block text-main-red font-weight-600 font-size-14 font-size-md-20 font-size-lg-24 font-size-xl-24 font-size-xxxxl-28 ">
                    {!! theSentence('laydown-text') !!}
                </h1>
                <strong>{!! theSentence('portable-text-inside') !!}</strong>
                <h1 class="text-main-dark-blue font-weight-400 font-size-18 font-size-md-24 font-size-lg-32 font-size-xxxl-40 line-height-1-1 text-center text-lg-left mb-lg-3 mb-xxxl-5">
                    {!! theSentence('windmachines-text', false) !!} 
                </h1>
            </div>
            <div style="width:300px" class="text-main font-weight-500 font-size-11 font-size-md-13 font-size-lg-14 font-size-xl-14 text-center text-lg-left mb-5 mb-lg-7 mb-xxxl-10">
                {!! theSentence('stationary-lay-down', false) !!}  
            </div>
            <div class="text-main-dark-blue font-weight-700 font-size-lg-18 d-flex align-items-center justify-content-center justify-content-lg-start">
                <div class="vertical-divider__main-red vertical-divider__main-red--explore"></div>
                <a href="javascript:void(0);" class="js-scroll-to h-sweep-to-right py-1 px-5" data-target=".wind-machine-slider-back-button">{!! theSentence('stationary-3', false) !!} </a>
            </div>
            {{-- <div class=" text-main-dark-blue font-weight-400 font-size-lg-18 d-flex align-items-center justify-content-center justify-content-lg-start pt-20">
                <div class="d-flex align-items-center flex-row-reverse" style="margin-top: -70px; margin-left: -5px;">
                    <div class="horizontal-divider horizontal-divider__arrows"></div>
                    <span class="transition-all-3 py-1 px-2 mr-1  font-size-14 font-weight-500"> 
                        <button type="button" class="text-color-main" data-related-carousel="#main-carousel"  style="background-color: unset !important;">
                            {!! theSentence('stationary-back', false) !!} 
                        </button>
                    </span>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="main-slider__item main-slider__item--3 mobile-slide-banner background-cover d-flex flex-column flex-lg-row align-items-center h-100">
        <div class="wind-machine-slider-item-desktop mt-60 width-lg-60 width-xl-50 width-xxl-60 mx-auto slide-banner">
            <div class="text-main-dark-blue font-weight-700 font-size-20font-size-md-28 font-size-lg-36 font-size-xxxl-44 line-height-1-1 text-center text-lg-left mb-lg-3 mb-xxxl-5">
                <h1 class="d-block text-main-red font-weight-600 font-size-14 font-size-md-20 font-size-lg-24 font-size-xl-24 font-size-xxxxl-28 ">   
                    {!! theSentence('portable-mobil-text') !!} 
                </h1>
                <strong>{!! theSentence('portable-text-inside') !!}</strong>
                <h1 class="text-main-dark-blue font-weight-400 font-size-18 font-size-md-24 font-size-lg-32 font-size-xxxl-40 line-height-1-1 text-center text-lg-left mb-lg-3 mb-xxxl-5">
                    {!! theSentence('portable-models-text') !!}
                </h1>
            </div>
            <div style="width:300px" class="text-main font-weight-500 font-size-11 font-size-md-13 font-size-lg-14 font-size-xl-14 text-center text-lg-left mb-5 mb-lg-7 mb-xxxl-10">
                {!! theSentence('stationary-8', false) !!} 
            </div>
            <div class="text-main-dark-blue font-weight-700 font-size-lg-18 d-flex align-items-center justify-content-center justify-content-lg-start">
                <div class="vertical-divider__main-red vertical-divider__main-red--explore"></div>
                
                <a href="{{ getPageByTemplate('WindMachines')['viewLink'] }}/{!! theSentence('portable-slug') !!}"" class="js-scroll-to h-sweep-to-right py-1 px-5" ><a  class="" href="{{ getPageByTemplate('WindMachines')['viewLink'] }}/{!! theSentence('portable-slug') !!}">{!! theSentence('stationary-3', false) !!}</a></a>
            </div>
        </div>
    </div>   
</div>
<div class="wind-machine-slider-back-button main-slider__custom-arrow wrapper-double w-100 d-lg-flex align-items-center justify-content-center ">
    <button type="button" class="custom-slick-next text-main font-weight-500 font-size-14"  data-slick-next="">
        <div class="d-flex align-items-center flex-row-reverse">
            <div class="horizontal-divider horizontal-divider__arrows"></div>
            <span class="transition-all-3 py-1 px-2 mr-1"><a href="{{ getPageByTemplate('Gallery')['viewLink'] }}">{!! theSentence('stationary-5', false) !!}  </a></span>
        </div>
    </button>
</div>
<ul  data-aos="fade-right" class="content-margin tab-menu-all-stationary tab-menu__service-main justify-content-between nav nav-pills mb-5 mb-lg-15 compare-buttons--desktop" id="pills-tab" role="tablist">
    <li class="nav-item bg-gray-700 text-white font-size-13 font-size-lg-16 font-size-xxxxl-18 font-weight-600 text-center mb-3 mb-lg-0">
        <a class="nav-link d-flex align-items-center justify-content-between active" data-toggle="pill" href="#all-stationary-models" role="tab">
            <div>{!! theSentence('stationary-6', false) !!}</div>  
            <div data-aos="fade-down" class="arrow-icon"></div>
        </a>
    </li>
    <li class="nav-item bg-gray-700 text-white font-size-13 font-size-lg-16 font-size-xxxxl-18 font-weight-600 text-center">
        <a class="nav-link d-flex align-items-center justify-content-between " data-toggle="pill" href="#compare-available-stationary-models" role="tab">
            <div>{!! theSentence('stationary-7', false) !!} </div>
            <div class="arrow-icon"></div>
        </a>
    </li>
</ul>
<div class="wind-machine-slider-item-mobile mt-10">
    <div class="text-main-dark-blue font-weight-700 font-size-30  line-height-1-2 text-center  mb-3 ">
        <strong>STATIONARY</strong>
        <div class="text-main-dark-blue font-weight-400 font-size-18 line-height-1-2 text-center ">
            MODELS
        </div>
    </div>
</div>
<div class="tab-content js-ignore-mobile-tab-content">
<ul class="content-margin  justify-content-between nav nav-pills mb-5 mb-lg-15 compare-buttons--mobile" id="pills-tab" role="tablist">
    <li class="nav-item bg-gray-700 text-white font-size-13 font-size-lg-16 font-size-xxxxl-18 font-weight-600 text-center" style="width: 120% !important">
        <div class="nav-link nav-link-one  d-flex align-items-center justify-content-between active"  style="margin: 0 auto  !important; width: 140% !important; margin-left: -20% !important">
            <div>{!! theSentence('stationary-6', false) !!}</div>  
            <div data-aos="fade-down" class="arrow-icon"></div>
        </div>
    </li>
    
</ul>    
{{-- All Stationary --}}
           
<div class="tab-pane fade show  active  js-ignore-mobile-tab-pane js-ignore-mobile-tab-pane-portable" id="all-stationary-models" role="tabpanel" >
        <div class="wind-machine-slider-item-mobile mt-10 d-none">
            <div class="text-main-dark-blue font-weight-700 font-size-30  line-height-1-2 text-center  mb-3 ">
                <strong> {!! theSentence('stationary-text') !!}</strong>
                <div class="text-main-dark-blue font-weight-400 font-size-18 line-height-1-2 text-center ">
                    {!! theSentence('models-text') !!}
                </div>
            </div>
            <div class="ml-10 mr-10 text-main font-weight-500 font-size-14  text-center  mb-5 ">
            </div>
        </div>
        <div class="d-flex align-items-right content-solution"></div>
        <div class="propeller pt-10 pt-lg-10 text-right mr-lg-n30 ml-lg-auto mb-0 propeller-main-container" >
            <div class="row ml-md-13 mb-md-20 mb-10">
                <h2 class="text-main-red mr-0 font-size-30 ml-md-35">{!! theSentence('stationary-11', false) !!}</h2>
            </div>
            <div class="row position-relative flex-column-reverse flex-lg-row">
                <div class=" col-48 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                    <div class="propeller__item text-center text-lg-left pr-lg-10" >
                        <div class="row ml100" >
                            <div class="horizontal-divider horizontal-divider__stationary horizontal-divider__stationary-mobile mt-md-3 mr-3  d-lg-block "></div>
                            <div class="mb-5 mt-5 mt-lg-0 text-main-dark-blue font-weight-600 font-size-24 font-size-md-24 font-size-lg-30 font-size-xl-24 font-size-xxxxl-38 line-height-1-2 text-center text-lg-left mb-lg-3 mb-xxxl-5 text-align-left ">
                                {!! theSentence('stationary-12', false) !!} 
                            </div>
                        </div>
                        <div class="ml40" style="margin-top:0px;">
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 "> {!! theSentence('stationary-13', false) !!} </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 "> {!! theSentence('stationary-14', false) !!} </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 "> {!! theSentence('stationary-15', false) !!} </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 "> {!! theSentence('stationary-16', false) !!} </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse mb-5">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 "> {!! theSentence('stationary-17', false) !!} </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>      
                        </div>
                    </div>
                </div>
                <div class=" col-48 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                    <div class="propeller__item text-center text-lg-left pr-lg-10" >
                        <div class="row" >      
                            <div class="mb-5  ml-5 pr-10 text-main-dark-blue font-weight-600 font-size-24 font-size-md-24 font-size-lg-30 pos-relative font-size-xl-24 font-size-xxxxl-38 line-height-1-2 text-center text-lg-left mb-lg-3 mb-xxxl-5 text-align-left ">
                                {!! theSentence('stationary-18', false) !!}
                                <div class=" text-right horizontal-divider-mobile-right horizontal-divider horizontal-divider__stationary-tower tower-pos-absolute  mr-3  d-lg-block "></div>
                            </div>
                        </div>
                        <div style="margin-top:0px;">
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">{!! theSentence('stationary-19', false) !!} </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">{!! theSentence('stationary-20', false) !!} </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12  text-align-left font-size-lg-13 ">{!! theSentence('stationary-21', false) !!} </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">{!! theSentence('stationary-22', false) !!} </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row position-relative flex-column-reverse flex-lg-row mt-5 mt-md-20">
                <div class=" col-48 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                    <div class="propeller__item text-center text-lg-left pr-lg-10"  data-aos="fade-right">
                        <div class="row ml100" >
                            <div class="horizontal-divider horizontal-divider__stationary horizontal-divider__stationary-mobile mt-md-3 mr-3  d-lg-block "></div>
                            <div class="mb-5 mt-5 mt-lg-0 text-main-dark-blue font-weight-600 font-size-24 font-size-md-24 font-size-lg-30 font-size-xl-24 font-size-xxxxl-38 line-height-1-2 text-lg-left mb-lg-3 mb-xxxl-5 text-align-left ">
                                {!! theSentence('stationary-23', false) !!} 
                            </div>
                        </div>
                        <div class="ml40" style="margin-top:0px;">
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-24', false) !!} 
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-25', false) !!} 
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-48 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                    <div class="propeller__item text-center text-lg-left pr-lg-10"  data-aos="fade-left">
                        <div class="row" >
                            
                            <div class="mb-5  ml-5  text-main-dark-blue font-weight-600 font-size-24 font-size-md-24 font-size-lg-30 pos-relative font-size-xl-24 font-size-xxxxl-38 line-height-1-2  text-lg-left mb-lg-3 mb-xxxl-5 text-align-left ">
                                {!! theSentence('stationary-26', false) !!}
                                <div class="horizontal-divider-mobile-right horizontal-divider left-hor horizontal-divider__stationary pos-absolute horizontal-divider__stationary-mobile-2 mr-3  d-lg-block "></div>
                            </div>
                        </div>
                        <div style="margin-top:0px;">
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-27', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-28', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12  text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-29', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row position-relative flex-column-reverse flex-lg-row mt-5 mt-md-20">
                <div class=" col-48 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                    <div class="propeller__item text-center text-lg-left pr-lg-10"  data-aos="fade-right">
                        <div class="row ml100" >
                            <div class="horizontal-divider horizontal-divider__stationary horizontal-divider__stationary-mobile mt-md-3 mr-3  d-lg-block "></div>
                            <div class="mb-5 mt-5 mt-lg-0 text-main-dark-blue font-weight-600 font-size-24 font-size-md-24 font-size-lg-30 font-size-xl-24 font-size-xxxxl-38 line-height-1-2  text-lg-left mb-lg-3 mb-xxxl-5 text-align-left ">
                                {!! theSentence('stationary-30', false) !!}
                            </div>
                        </div>
                        <div class="ml40" style="margin-top:0px;">
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-31', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-32', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-33', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-33-2', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class=" col-48 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                    <div class="propeller__item text-center text-lg-left pr-lg-10"  data-aos="fade-left">
                        <div class="row" >
                            <div class="mb-5  ml-5  text-main-dark-blue font-weight-600 font-size-24 font-size-md-24 font-size-lg-30 pos-relative font-size-xl-24 font-size-xxxxl-38 line-height-1-2  text-lg-left mb-lg-3 mb-xxxl-5 text-align-left ">
                                {!! theSentence('stationary-34', false) !!}
                                <div class="horizontal-divider-mobile-right horizontal-divider horizontal-divider__stationary pos-absolute horizontal-divider__stationary-mobile-2 mr-3  d-lg-block "></div>
                            </div> 
                        </div>
                        <div style="margin-top:0px;">
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-35', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-36', false) !!} 
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-36-2', false) !!} 
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row position-relative flex-column-reverse flex-lg-row mt-5 mt-md-20">
                <div class=" col-48 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                    <div class="propeller__item text-center text-lg-left pr-lg-10"  data-aos="fade-right">
                        <div class="row ml100" >
                            <div class="horizontal-divider horizontal-divider__stationary horizontal-divider__stationary-mobile mt-md-3 mr-3  d-lg-block "></div>
                            <div class="mb-5 mt-5 mt-lg-0 text-main-dark-blue font-weight-600 font-size-24 font-size-md-24 font-size-lg-30 font-size-xl-24 font-size-xxxxl-38 line-height-1-2  text-lg-left mb-lg-3 mb-xxxl-5  text-align-left ">
                                {!! theSentence('stationary-37', false) !!}
                            </div>
                        </div>
                        <div class="ml40" style="margin-top:0px;">
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-38', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-39', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-40', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-48 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                    <div class="propeller__item text-center text-lg-left pr-lg-5"  data-aos="fade-left">
                        <div class="row" >
                            
                            <div class="mb-5  ml-5  text-main-dark-blue font-weight-600 font-size-24 font-size-md-24 font-size-lg-30 pos-relative font-size-xl-24 font-size-xxxxl-38 line-height-1-2  text-lg-left mb-lg-3 mb-xxxl-5 text-align-left ">
                                {!! theSentence('stationary-41', false) !!}
                                <div class="horizontal-divider-mobile-right horizontal-divider horizontal-divider__stationary pos-absolute horizontal-divider__stationary-mobile-2 mr-3  d-lg-bloc"></div>
                            </div>   
                        </div>
                        <div style="margin-top:0px;">
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-42', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-43', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-44', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="row position-relative flex-column-reverse flex-lg-row mt-5 mt-md-20">
                <div class=" col-48 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                </div>
                <div class=" col-48 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                    <div class="propeller__item text-center text-lg-left pr-lg-10"  data-aos="fade-left">
                        <div class="row" >
                            <div class="mb-5  ml-5  text-main-dark-blue font-weight-600 font-size-24 pos-relative font-size-md-24 font-size-lg-30 font-size-xl-24 font-size-xxxxl-38 line-height-1-2  text-lg-left mb-lg-3 mb-xxxl-5 text-align-left ">
                                {!! theSentence('stationary-46', false) !!}
                                <div class="horizontal-divider horizontal-divider__stationary pos-absolute horizontal-divider__stationary horizontal-divider__stationary-mobile-2 mr-3  d-lg-block "></div>    
                            </div>       
                        </div>
                        <div style="margin-top:0px;">
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-47', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-48', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            {{-- <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">
                                    {!! theSentence('stationary-49', false) !!}
                                </div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="propeller pt-10 pt-lg-20 text-right mr-lg-n30 ml-lg-auto mb-0 propeller-main-container" >
            <div class="row ml-md-13 mb-md-20 mb-10  mt-10 mt-md-20"   data-aos="fade-right" >
                <h2 class="text-main-red mr-0 font-size-30 ml-md-35">{!! theSentence('stationary-50', false) !!}</h2>
            </div>
            <div class="row position-relative flex-column-reverse flex-lg-row">
                <div class="mt-md-0  col-48 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                    <div class="propeller__item text-center text-lg-left pr-lg-10"  data-aos="fade-right">
                        <div class="row ml100" >
                            <div class=" horizontal-divider horizontal-divider__stationary horizontal-divider__stationary-mobile mr-3  d-lg-block mt-3"></div>
                            
                            <div class="mb-5 mt-5 mt-lg-0 text-main-dark-blue font-weight-600 pos-relative font-size-24 font-size-md-24 font-size-lg-30 font-size-xl-24 font-size-xxxxl-38 line-height-1-2 text-center text-lg-left mb-lg-3 mb-xxxl-5 text-align-left " data-aos="fade-right">
                               
                                {!! theSentence('stationary-51', false) !!} 
                               
                            </div>
                        </div>
                        <div class="ml40" style="margin-top:0px;">
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">{!! theSentence('stationary-52', false) !!}</div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">{!! theSentence('stationary-53', false) !!}</div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                                <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">{!! theSentence('stationary-54', false) !!}</div></div>
                                <div class="horizontal-divider horizontal-divider__point"></div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-48 col-lg-20 offset-lg-4 col-xxl-17 offset-xxl-7 col-xxxxl-15 offset-xxxxl-9">
                    <div class="propeller__item text-center text-lg-left pr-lg-1"   data-aos="fade-left">
                        <div class="row" >
                            <div class="mb-5 ml-5  text-main-dark-blue font-weight-600 font-size-24 font-size-md-24 pos-relative font-size-lg-30 font-size-xl-24 font-size-xxxxl-38 line-height-1-2 text-lg-left mb-lg-3 mb-xxxl-5 text-align-right ">
                                {!! theSentence('stationary-55', false) !!} 
                                <div class=" horizontal-divider horizontal-divider__stationary horizontal-divider__stationary-mobile mt-md-2 mr-3 remote-cntrl  d-lg-block "></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                            <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">{!! theSentence('stationary-55-2', false) !!}</div></div>
                            <div class="horizontal-divider horizontal-divider__point"></div>
                        </div> 
                        <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                            <div class=col><div class="font-weight-500 font-size-12 text-align-left font-size-lg-13 ">{!! theSentence('stationary-55-3', false) !!}</div></div>
                            <div class="horizontal-divider horizontal-divider__point"></div>
                        </div> 
                    </div>  
                </div>
            </div>
        </div>
    </div>
{{-- Compares --}}    
{{-- js-ignore-mobile-tab-pane Important --}}
<div class="tab-pane fade js-ignore-mobile-tab-pane" id="compare-available-stationary-models" role="tabpanel"> 
    <ul class="content-margin  justify-content-between nav nav-pills mb-5 mb-lg-15 compare-buttons--mobile mt-20 mb-20" id="pills-tab" role="tablist">
        <li class="nav-item bg-gray-700 text-white font-size-11 font-size-lg-16 font-size-xxxxl-18 font-weight-600 text-center" style="width: 120% !important">
            <div class="nav-link nav-link-two d-flex align-items-center justify-content-between active" style="margin: 0 auto  !important; width: 140% !important; margin-left: -20% !important">
                <div>{!! theSentence('stationary-7', false) !!}</div>
                <div class="arrow-icon"></div>
            </div>
        </li>
        
    </ul>

   
    {{-- Desktop Compare --}}
    <div class="row w-80 compare-main-container compare-main-container--desktop">
        
        <div class="col-md-12 col-sm-24"></div>
        <div class="col-md-12 col-sm-24">
            <span class="d-block text-main-red font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28 ">S-60</span>
            <span class="d-block text-main-dark-blue font-weight-400 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28">MODEL</span>
            {{-- <span class="d-block text-main-red  font-weight-600 font-size-11 font-size-lg-14 text-align-left"> {!! theSentence('stationary-available', false) !!}   </span> --}}
        </div>
        <div class="col-md-12 col-sm-24 ">
            <span class="d-block text-main-red font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28 ">S-45</span>
            <span class="d-block text-main-dark-blue font-weight-400 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28">MODEL</span>
            {{-- <span class="d-block text-main-red  font-weight-600 font-size-11 font-size-lg-14 text-align-left">{!! theSentence('stationary-available', false) !!}  </span> --}}
        </div>
        <div class="col-md-12 col-sm-24">
            <span class="d-block text-main-red font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28 ">S-35</span>
            <span class="d-block text-main-dark-blue font-weight-400 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28">MODEL</span>
            {{-- <span class="d-block text-main-red  font-weight-600 font-size-11 font-size-lg-14 text-align-left">{!! theSentence('stationary-available', false) !!}  </span> --}}
        </div>

        <div class="col-md-12 col-sm-24" > 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-56', false) !!} 
            </span>
        </div>
        <div class="col-md-12 col-sm-24">{!! theSentence('stationary-57', false) !!}</div>
        <div class="col-md-12 col-sm-24 ">{!! theSentence('stationary-58', false) !!}</div>
        <div class="col-md-12 col-sm-24">{!! theSentence('stationary-59', false) !!}</div>

        <div class="col-md-12 col-sm-24"    data-aos="fade-right"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-60', false) !!}
            </span>
        </div>
        <div class="col-md-12 col-sm-24" data-aos="fade-left">{!! theSentence('stationary-61', false) !!}</div>
        <div class="col-md-12 col-sm-24" data-aos="fade-left">{!! theSentence('stationary-62', false) !!}</div>
        <div class="col-md-12 col-sm-24" data-aos="fade-left">{!! theSentence('stationary-63', false) !!}</div>

        <div class="col-md-12 col-sm-24" data-aos="fade-right"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-64', false) !!}
            </span>
        </div>
        <div class="col-md-12 col-sm-24" data-aos="fade-left">
            {!! theSentence('stationary-65', false) !!}
        </div>
        <div class="col-md-12 col-sm-24 " data-aos="fade-left">
            {!! theSentence('stationary-66', false) !!}
        </div>
        <div class="col-md-12 col-sm-24" data-aos="fade-left">
            {!! theSentence('stationary-67', false) !!} <span class="text-color-red">*</span>
        </div>
        <div class="col-md-12 col-sm-24" data-aos="fade-right"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-68', false) !!}
            </span>
        </div>
        <div class="col-md-12 col-sm-24" data-aos="fade-left">
            <img class="img-fluid w-40" src="{{ asset('assets/img/icons/protection1.png') }}" alt="Güvenlik Ekipmanları">
        </div>
        <div class="col-md-12 col-sm-24 " data-aos="fade-left">
            <img class="img-fluid w-40" src="{{ asset('assets/img/icons/protection2.png') }}" alt="Güvenlik Ekipmanları">
        </div>
        <div class="col-md-12 col-sm-24" data-aos="fade-left">
            <img class="img-fluid w-40" src="{{ asset('assets/img/icons/protection3.png') }}" alt="Güvenlik Ekipmanları">
        </div>

        <div class="col-md-12 col-sm-24" data-aos="fade-right"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-69', false) !!}
            </span>
        </div>
        <div class="col-md-12 col-sm-24" data-aos="fade-left">
            <span class="d-block text-main-red  font-weight-600 font-size-14 font-size-lg-14 text-align-left">
                {!! theSentence('stationary-available', false) !!}
            </span>
        </div>
        <div class="col-md-12 col-sm-24 " data-aos="fade-left">
            <span class="d-block text-main-red  font-weight-600 font-size-14 font-size-lg-14 text-align-left">
                {!! theSentence('stationary-available', false) !!}
            </span>
        </div>
        <div class="col-md-12 col-sm-24" data-aos="fade-left">
            {!! theSentence('stationary-70', false) !!}
        </div>

        <div class="col-md-12 col-sm-24" data-aos="fade-right"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-71', false) !!}
            </span>
        </div>
        <div class="col-md-12 col-sm-24" data-aos="fade-left">{!! theSentence('stationary-72', false) !!}</div>
        <div class="col-md-12 col-sm-24 " data-aos="fade-left">{!! theSentence('stationary-72', false) !!}</div>
        <div class="col-md-12 col-sm-24" data-aos="fade-left">{!! theSentence('stationary-73', false) !!}</div>

        {{-- <div class="col-md-12 col-sm-24" data-aos="fade-right"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-74', false) !!}
            </span>
        </div>
        <div class="col-md-12 col-sm-24">
            <span class="d-block text-main-red  font-weight-600 font-size-11 font-size-lg-14 text-align-left" data-aos="fade-left">{!! theSentence('stationary-available', false) !!} </span>
        </div>
        <div class="col-md-12 col-sm-24 ">
            <span class="d-block text-main-red  font-weight-600 font-size-11 font-size-lg-14 text-align-left" data-aos="fade-left">{!! theSentence('stationary-available', false) !!} </span>
        </div>
        <div class="col-md-12 col-sm-24">
            <span class="d-block text-main-red  font-weight-600 font-size-11 font-size-lg-14 text-align-left" data-aos="fade-left">{!! theSentence('stationary-available', false) !!} </span>
        </div> --}}

        <div class="col-48" data-aos="fade-right">
            <span class="d-block font-weight-600 font-size-11 font-size-lg-12 text-align-left">
                <span class="text-main-red ">*</span> {!! theSentence('stationary-75', false) !!} 
            </span>
        </div>
    </div>
    {{-- Mobil Compare --}}
    <div class="row w-80 compare-main-container compare-main-container--mobile">
        {{-- Mobil Product 1 --}}
        <div class="col-24 offset-24">
            <span class="d-block text-main-red font-weight-600 font-size-20 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28 ">S-60</span>
            <span class="d-block text-main-dark-blue font-weight-400 font-size-20 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28">MODEL</span>
            <span class="d-block text-main-red  font-weight-600 font-size-14 font-size-lg-14 text-align-left">{!! theSentence('stationary-available', false) !!}  </span>
        </div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-56', false) !!} 
            </span>
        </div>
        <div class="col-24">
            {!! theSentence('stationary-57', false) !!}
        </div>
        
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-60', false) !!}
            </span>
        </div>
        <div class="col-24">
            {!! theSentence('stationary-61', false) !!}
        </div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-64', false) !!}
            </span>
        </div>
        <div class="col-24">
            {!! theSentence('stationary-65', false) !!}
        </div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-68', false) !!}
            </span>
        </div>
        <div class="col-24">
            <img class="img-fluid w-40" src="{{ asset('assets/img/icons/protection1.png') }}" alt="Güvenlik Ekipmanları">
        </div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-69', false) !!}
            </span>
        </div>
        <div class="col-24"></div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-71', false) !!}
            </span>
        </div>
        <div class="col-24">
            {!! theSentence('stationary-72', false) !!}
        </div>

        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-74', false) !!}
            </span>
        </div>
        <div class="col-24">
            <span class="d-block text-main-red  font-weight-600 font-size-11 font-size-lg-14 text-align-left">{!! theSentence('stationary-available', false) !!}  </span>
        </div>

        {{-- Mobil Product 2 --}}
        <div class="col-24 offset-24  mt-10">
            <span class="d-block text-main-red font-weight-600 font-size-20 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28 ">S-45</span>
            <span class="d-block text-main-dark-blue font-weight-400 font-size-20 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28">MODEL</span>
            <span class="d-block text-main-red  font-weight-600 font-size-14 font-size-lg-14 text-align-left">{!! theSentence('stationary-available', false) !!}  </span>
        </div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-56', false) !!}
            </span>
        </div>
        <div class="col-24">
            {!! theSentence('stationary-58', false) !!}
        </div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-60', false) !!}
            </span>
        </div>
        <div class="col-24">
            {!! theSentence('stationary-62', false) !!}
        </div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-64', false) !!}
            </span>
        </div>
        <div class="col-24">
            {!! theSentence('stationary-66', false) !!}
        </div>  
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-68', false) !!}
            </span>
        </div>
        <div class="col-24">
            <img class="img-fluid w-40" src="{{ asset('assets/img/icons/protection2.png') }}" alt="Güvenlik Ekipmanları">
        </div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-69', false) !!}
            </span>
        </div>
        <div class="col-24"></div>
        
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-71', false) !!}
            </span>
        </div>
        <div class="col-24">
            {!! theSentence('stationary-72', false) !!}
        </div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-74', false) !!}
            </span>
        </div>
        <div class="col-24">
            <span class="d-block text-main-red  font-weight-600 font-size-11 font-size-lg-14 text-align-left">{!! theSentence('stationary-available', false) !!}  </span>
        </div>
        {{-- Mobil Product 3 --}}
        <div class="col-24 offset-24 mt-10">
            <span class="d-block text-main-red font-weight-600 font-size-20 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28 ">S-45</span>
            <span class="d-block text-main-dark-blue font-weight-400 font-size-20 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28">MODEL</span>
            <span class="d-block text-main-red  font-weight-600 font-size-14 font-size-lg-14 text-align-left">{!! theSentence('stationary-available', false) !!}  </span>
        </div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-56', false) !!}
            </span>
        </div>
        <div class="col-24">
            {!! theSentence('stationary-59', false) !!}
        </div>
        
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-60', false) !!}
            </span>
        </div>
        <div class="col-24">
            {!! theSentence('stationary-63', false) !!} 
        </div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-64', false) !!}
            </span>
        </div>
        <div class="col-24">
            {!! theSentence('stationary-67', false) !!}
        </div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-68', false) !!}
            </span>
        </div>
        <div class="col-24">
            <img class="img-fluid w-40" src="{{ asset('assets/img/icons/protection3.png') }}" alt="Güvenlik Ekipmanları">
        </div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-69', false) !!}
            </span>
        </div>
        <div class="col-24">{!! theSentence('stationary-70', false) !!}</div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-71', false) !!}
            </span>
        </div>
        <div class="col-24">
            {!! theSentence('stationary-73', false) !!}
        </div>
        <div class="col-24"> 
            <span class="d-block text-main-dark-blue font-weight-600 font-size-14 font-size-md-20 font-size-lg-20 font-size-xl-18 font-size-xxxxl-28">
                {!! theSentence('stationary-74', false) !!}
            </span>
        </div>
        <div class="col-24">
            <span class="d-block text-main-red  font-weight-600 font-size-11 font-size-lg-14 text-align-left">{!! theSentence('stationary-available', false) !!}  </span>
        </div>
    </div>
</div>
<div class="propeller propeller-one pt-40 pt-md-20 pt-lg-20 text-right mr-lg-n30 ml-lg-auto mb-0 propeller-main-container" >
    <div class="row position-relative flex-column-reverse flex-lg-row">
        <div class="col-48 col-lg-24 offset-lg-4 col-xxl-17  col-xxxxl-15 offset-xxxxl-9 opacity-60">
            <div class="propeller__item text-center text-lg-left pr-lg-10">
                <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                    <div class="col mt-md-40 mt-10 mt105 portable-center">
                        <img class="mobil-image-center" src="{{ asset('assets/img/product/inner-solidity-right.png') }}" class="ml-md-10" alt="Mobil Makineler">
                        <div class="p-md-10 portable-text-center text-main-dark-blue font-weight-700 font-size-lg-18 d-flex align-items-center justify-content-md-center justify-content-lg-start">
                            <div class="marge1">
                                <div class="vertical-divider__main-red mr-5 vertical-divider__main-red--in">
                                    <span class="h-sweep-to-right text-main-dark-blue font-weight-700 font-size-18 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28 d-block ml-5">{!! theSentence('stationary-text') !!}</span>
                                    <span class="text-main-red font-weight-700 font-size-14 font-size-lg-12  d-block ml-md-5  ml-3 w-100" style="width: 100px !important; color:#c30f1a">{!! theSentence('windmachines-text') !!}</span>
                                    {{-- <span class="font-weight-600 font-size-14 font-size-lg-16 d-block ml-5 w-100 mt-3 text-align-left" style="width: 170px !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>  
        </div>
        <div class=" mt-20 mt-md-0  col-48 col-lg-24 offset-lg-4 col-xxl-17 col-xxxxl-15 offset-xxxxl-9">
            <div class="propeller__item text-center text-lg-left pr-lg-10">
                <div class="ml40" style="margin-top:0px;">
                    <div class="d-flex align-items-center flex-row-reverse max-width-lg-400 mb-2">
                        <a  class="" href="{{ getPageByTemplate('WindMachines')['viewLink'] }}/{!! theSentence('portable-slug') !!}">
                        <div class="col mt-md-40 mt-10 portable-center">
                            <img src="{{ asset('assets/img/product/inner-solidity-left.png') }}" alt="Sabir Rüzgar Makineleri">
                            <div class="p-md-10 portable-text-center text-main-dark-blue font-weight-700 font-size-lg-18 d-flex align-items-center justify-content-md-center justify-content-lg-start">
                                <div class="marge1">
                                    <div class="vertical-divider__main-red mr-5 vertical-divider__main-red--in">
                                    <span class="h-sweep-to-right text-main-dark-blue font-weight-700 font-size-18 font-size-md-20 font-size-lg-20 font-size-xl-20 font-size-xxxxl-28 d-block ml-5">{!! theSentence('portable-text') !!}</span>
                                    <span class="text-main-red font-weight-700 font-size-14 font-size-lg-12  d-block ml-md-5  ml-3 w-100" style="width: 100px !important; color:#c30f1a">{!! theSentence('windmachines-text') !!}</span>
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


</div>



<div class="footer__overflow mt-lg-50"></div>
@endsection