<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">

    {{-- SEO Meta --}}
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}

    {{-- Meta --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" href="/favicon.png">


    {{-- <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-165428182-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date()); 

    gtag('config', 'UA-165428182-1');
</script> --}}



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174660488-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-174660488-2');
</script>




<script type='application/ld+json'> 
    {
      "@context": "http://www.schema.org",
      "@type": "WebSite",
      "name": "Gener",
      "alternateName": "Gener Rüzgar Makinaları",
      "url": "https://gener.com.tr/tr"
    }
     </script>

{{-- 
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174660488-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174660488-2');
</script> --}}

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900&display=swap&subset=latin-ext" rel="stylesheet">

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset(mix('assets/dist/css/style.min.css')) }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- Variables --}}
    <script>
        var App = {
            url: "{{ env('APP_URL') }}",
            currentUrl: "{{ url()->current() }}",
            locale: "{{ app()->getLocale() }}",
        };
    </script>

    {{-- Breadcrumbs --}}
    {{ Breadcrumbs::view('breadcrumbs::json-ld') }}
</head>
<body class="locale-{{ app()->getLocale() }}">
    {{-- Header --}}
    @yield('headerBefore')
    @include('web.template.partials.header')
    @include('web.template.partials.hamburger-menu')
    @yield('headerAfter')

    {{-- Content --}}
    @yield('contentBefore')
    @yield('content')
    @yield('contentAfter')

    {{-- Footer --}}
    @yield('footerBefore')
    @include('web.template.partials.footer')
    @yield('footerAfter')

    {{-- Script --}}
    @yield('scriptBefore')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset(mix('assets/dist/js/scripts.min.js')) }}"></script>
    @yield('scriptAfter')
</body>
</html>
