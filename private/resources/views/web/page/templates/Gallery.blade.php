@extends('web.template.layout')

@section('content')
    <div class="header__overflow"></div>

    <div class="gallery-grid">
        <div class="parent">
            @foreach($page->children as $child)
                {{-- <a href="{{ $child->getViewLink() }}" class="gallery-item grid-item grid-{{ $loop->iteration }}"> --}}
                <a href="{{ $child->getViewLink() }}" class="gallery-item grid-item">
                    <img src="{{ $child->getImageByTemplate('featured') }}" alt="{{ $child->getTitle() }}" alt="Sabit Makineler">

                    <div class="bg-white grid-item__title text-center p-3 font-weight-700">
                        <h1 class="font-size-16">
                            {!! nl2br(textUppercase($child->getTitle())) !!}
                        </h1>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="footer__overflow mt-10"></div>
@endsection
