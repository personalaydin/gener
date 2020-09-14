@extends('web.template.layout')

@section('content')
    <div class="header__overflow"></div>

    <a href="" class="js-gallery-item gallery__our-solutions d-block">


    <div class="js-light-gallery max-width-900 mx-auto mt-10 mt-lg-20 mb-40">
        
        @if (app()->getLocale() == 'tr') 
            <a href="https://www.youtube.com/watch?v=KpllcwrwzVA&feature=youtu.be" class="js-gallery-item gallery__our-solutions d-block">
                <img src="{{ asset('data/our-solutions/about-video.png') }}"  alt="Hakkımzda Video"/>
                {{ svg_image('assets/img/icons/play') }}
            </a>
        @else 
            <a href="https://www.youtube.com/watch?v=s2x68xPv_sI" class="js-gallery-item gallery__our-solutions d-block">
                <img src="{{ asset('data/our-solutions/about-video.png') }}" alt="Hakkımızda Video"/>
                {{ svg_image('assets/img/icons/play') }}
            </a>
        @endif

       


    </div>
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row align-items-lg-center mb-10 mb-lg-20">
            <div class="col-lg-24">
                <div class="d-flex align-items-center mb-10">
                    <h1 class="text-main-dark-blue mr-5 font-size-30">{!! theSentence('solution-1', false) !!} </h1>
                    <div class="horizontal-divider horizontal-divider__our-solutions"></div>
                </div>
                <div class="max-width-lg-400">
                    <div class="font-weight-700 mb-7">{!! theSentence('solution-2', false) !!} </div>
                    <div class="font-weight-500">{!! theSentence('solution-3', false) !!}  </div>
                </div>
            </div>
            <div class="col-lg-24">
                <img class="mb-8 mb-lg-0" src="{{ asset('assets/img/our-solutions/1.png') }}" alt="Zirai Don Nedir?">
            </div>
        </div>
        <div class="row flex-column-reverse flex-lg-row-reverse align-items-lg-center mb-10 mb-lg-40">
            <div class="col-lg-24">
                <div class="max-width-lg-400">
                    <div class="font-weight-700 mb-7">{!! theSentence('solution-4', false) !!}  </div>
                </div>
            </div>
            <div class="col-lg-24">
                <img class="mb-8 mb-lg-0" src="{{ asset('assets/img/our-solutions/2.png') }}" alt="Radyant Don Olayları">
            </div>
        </div>
        <div class="row flex-column-reverse flex-lg-row align-items-lg-center mb-10 mb-lg-40">
            <div class="col-lg-24">
                <div class="max-width-lg-400">
                    <div class="font-weight-700 mb-7">{!! theSentence('solution-5', false) !!}  </div>
                    <div class="font-weight-500">{!! theSentence('solution-6', false) !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-24">
                <img class="mb-8 mb-lg-0" src="{{ asset('assets/img/our-solutions/3.png') }}" alt="Gener Rüzgar Makineleri">
            </div>
        </div>
    </div>

    <div class="footer__overflow mt-10"></div>
@endsection
