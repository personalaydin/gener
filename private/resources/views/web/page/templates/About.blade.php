@extends('web.template.layout')

@section('content')
    <div class="header__overflow"></div>
    
    <div class="row align-items-center mb-40 pb-lg-40 mb-lg-40">
        <div class="width-100 width-lg-55 width-xxxl-50">
            <img src="{{ asset('assets/img/about/about.jpg') }}" alt="Gener Hakkımızda">
        </div>
        <div class="width-100 width-lg-45 width-xxxl-50">
            <div class="container">
                <div class="col-48 col-lg-36 col-xxxl-30">
                    <h1 class="text-main-dark-blue mb-5 mb-lg-15 font-size-30">{!! theSentence('about-4', false) !!}  </h1>
                    <div class="font-weight-500 font-size-14 font-size-lg-16">
                        {!! theSentence('about-2', false) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="bg-blue500 w-100 pb-10 pb-lg-40">
            <div class="container">
                <div class="col-48">
                    <div class="js-light-gallery max-width-1000 mx-auto mt-n30 mt-lg-n60 mb-10">
                        <a href="https://www.youtube.com/watch?v=Uuu6VxSns3s" class="js-gallery-item gallery__our-solutions d-block">
                            <img src="{{ asset('assets/img/about/about-video.jpg') }}" alt="Hakkımızda"/>
                            {{ svg_image('assets/img/icons/play') }}
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-18">
                            <div class="font-size-12 text-main-dark-blue mb-5 mb-lg-0">{!! theSentence('about-3', false) !!}</div>
                        </div>
                        <div class="col-lg-24 offset-lg-2">
                            <div class="d-flex align-items-center text-main-dark-blue font-weight-700">
                                <div class="vertical-divider__main-red vertical-divider__main-red--gallery mr-3"></div>
                                @if (getPageByTemplate('Gallery'))
                                    <a href="{{ getPageByTemplate('Gallery')['viewLink'] }}" class="font-size-lg-18">{{ textUppercase(getPageByTemplate('Gallery')['title']) }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__overflow mt-lg-10"></div>
@endsection
