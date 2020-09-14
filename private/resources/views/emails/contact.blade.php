@component('mail::message')
# Merhaba,

**{{ now() }}** tarihinde iletişim formunu dolduran kişinin bilgileri şu şekildedir:

Bu e-postayı **cevaplayarak** iletişime geçebilirsiniz.

@if ($request->input('name'))
**Ad:** {{ $request->input('name') }}
@endif

@if ($request->input('surname'))
**Soyad:** {{ $request->input('surname') }}
@endif

@if ($request->input('email'))
**E-posta:** {{ $request->input('email') }}
@endif

@if ($request->input('subject'))
**Konu:** {{ $request->input('subject') }}
@endif

@if ($request->input('message'))
**Mesaj:** {!! strip_tags(nl2br($request->input('message')), '<br>') !!}
@endif

{{ config('app.name') }}
@endcomponent
