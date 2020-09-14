@extends('web.template.layout')

@section('content')
    <div class="header__overflow"></div>

    <div class="position-relative">
        <div href="javascript:void(0);" class="ribbon ribbon--gallery bg-white d-flex align-items-center font-weight-700 py-3 px-4 font-size-12 font-size-md-16">
            <a class="mr-2" href="{{ getPageByTemplate('Gallery')['viewLink'] }}">
                <i class="fa fa-chevron-left"></i>
                BACK
            </a>
            <div class="d-flex align-items-stretch">
                <div class="horizontal-divider mr-2"></div>
                <div class="text-center">
                    <h1 class="font-size-16">
                        {!! nl2br(textUppercase($page->getTitle())) !!}
                    </h1>
                </div>
            </div>
        </div>

        <div class="row align-items-stretch gallery no-gutters js-light-gallery">
            @foreach($page->gallery as $galleryItem)
                <div class="col-24 col-md-16 col-lg-12">
                    <a href="{{ $galleryItem->getGalleryImageByTemplate('big') }}" class="js-gallery-item gallery-item h-100">
                        <img src="{{ $galleryItem->getGalleryImageByTemplate('thumbnail') }}" alt="{{ $galleryItem->getTitle() }}" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="footer__overflow mt-10"></div>
@endsection
