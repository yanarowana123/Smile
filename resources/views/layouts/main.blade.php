@php
    $contacts = \App\Models\Contact::all();
    $whatsapp = $contacts->where('type',\App\Models\Contact::WPP)->first()->content;
    $instagram = $contacts->where('type',\App\Models\Contact::INSTAGRAM)->first()->content;
    $youtube = $contacts->where('type',\App\Models\Contact::YOUTUBE)->first()->content;
    $addresses = $contacts->where('type',\App\Models\Contact::ADDRESS)->all();
    $phones = $contacts->where('type',\App\Models\Contact::MOBILE)->all();
    $schedule =  $contacts->where('type',\App\Models\Contact::SCHEDULE)->all();
    $firstPhone = $contacts->where('type',\App\Models\Contact::MOBILE)->first()->content;

@endphp
    <!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Стоматология "Smile" в Астане | Качественное лечение зубов</title>
    <link rel="short icon" href="img/icon.ico" type="image/x-icon"/>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}"/>
</head>

<body>

@stack('styles')

<section class="active__header">
    <div class="active__menu active__menu-left">
        <a class="active__logo" href="{{route('index')}}"
        ><img src="{{asset('img/logo.svg')}}" alt="logo"
            /></a>
        <div class="container">
            <div class="active__link">
                <a href="{{route('index')}}" class="close_navbar scroll-btn2">@lang('main.Home')</a>
                <a href="{{route('about')}}" class="close_navbar scroll-btn2">@lang('main.About us')</a>
                <a href="{{route('services')}}" class="close_navbar scroll-btn2">@lang('main.Services')</a>
                <a href="{{route('staff')}}" class="close_navbar scroll-btn2">@lang('main.Our team')</a>
                <a href="{{route('works')}}" class="close_navbar scroll-btn2"
                >@lang('main.Our work')</a
                >
                <a href="{{route('contacts')}}" class="close_navbar scroll-btn2"
                >@lang('main.Contact us')</a
                >
                <a href="tel:{{$firstPhone}}" class="">{{$firstPhone}}</a>
                <div class="active__social">
                    <a
                        href="{{$youtube}}"
                    ><img src="{{asset('img/youtube.svg')}}" alt="youtube"
                        /></a>
                    <a
                        href="{{$instagram}}"
                    ><img src="{{asset('img/instagram.svg')}}" alt="youtube"
                        /></a>
                    <a href="https://api.whatsapp.com/send?phone={{$whatsapp}}"
                    ><img src="{{asset('img/whatsapp.svg')}}" alt="youtube"
                        /></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pages">
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a class="header__logo" href="{{route('index')}}"
                ><img src="{{asset('img/logo.svg')}}" alt="Smile-Logo"
                    /></a>
                <div class="header__navbar">
                    <a
                        class="header__link header__link_active scroll-btn"
                        href="{{route('index')}}"
                    >@lang('main.Home')</a
                    >
                    <a
                        class="header__link
                        {{request()->route()->named('about')?'header__link_current_active':''}}
                            scroll-btn"
                        href="{{route('about')}}"
                    >@lang('main.About us')</a
                    >
                    <a
                        class="header__link header__link_active
                                                {{request()->route()->named('services')?'header__link_current_active':''}}

                            scroll-btn"
                        href="{{route('services')}}"
                    >@lang('main.Services')</a
                    >
                    <a
                        class="header__link header__link_active
                                                {{request()->route()->named('staff')?'header__link_current_active':''}}

                            scroll-btn"
                        href="{{route('staff')}}"
                    >@lang('main.Our team')</a
                    >
                    <a
                        class="header__link header__link_active
                                                {{request()->route()->named('works')?'header__link_current_active':''}}

                            scroll-btn"
                        href="{{route('works')}}"
                    >@lang('main.Our work')</a
                    >
                    <a
                        class="header__link header__link_active
                                                {{request()->route()->named('contacts')?'header__link_current_active':''}}

                            scroll-btn"
                        href="{{route('contacts')}}"
                    >@lang('main.Contact us')</a
                    >

                    <a href="tel:{{$firstPhone}}" class="header__phone"
                    >{{$firstPhone}}</a
                    >
                    <div class="header__social">
                        <a
                            href="{{$youtube}}"
                        ><img src="{{asset('img/youtube.svg')}}" alt="youtube"
                            /></a>
                        <a
                            href="{{$instagram}}"
                        ><img src="{{asset('img/instagram.svg')}}" alt="youtube"
                            /></a>
                        <a href="https://api.whatsapp.com/send?phone={{$whatsapp}}"
                        ><img src="{{asset('img/whatsapp.svg')}}" alt="youtube"
                            /></a>
                    </div>
                    <div class="header__navbar__lang">
                        <div class="header__navbar__lang__content">
                            <span>@if(app()->getLocale()=='en')
                                    Eng
                                @elseif(app()->getLocale()=='kk')
                                    Қаз
                                @else
                                    Рус
                                @endif
                            </span>
                            <i class="arrow_down"></i>
                        </div>
                    </div>
                </div>
                <div class="hamburger">
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <div class="whatsapp" id="fixed">
        <a
            class="whatsapp__wrap"
            href="https://api.whatsapp.com/send?phone={{$whatsapp}}"
        ><img src="{{asset('img/whatsappicon.svg    ')}}" alt="whatsapp=icon"
            /></a>
    </div>
</section>


@yield('content')

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{route('index')}}">
                    <img src="{{asset('img/logo.svg')}}" alt="logo" class="footer__logo"/>
                </a>
                <div class="footer__social">
                    <a href="{{$youtube}}"><img src="{{asset('img/youtube.svg')}}" alt="youtube"/></a>
                    <a href="{{$instagram}}"><img src="{{asset('img/instagram.svg')}}" alt="youtube"/></a>
                    <a href="{{$whatsapp}}"><img src="{{asset('img/whatsapp.svg')}}" alt="youtube"/></a>
                </div>
            @if(app()->getLocale() =='ru')
                <!-- <p class="footer__link mobile-none">© 2018 Все права защищены</p> -->
                    <a href="https://blammo.kz/" class="blammo footer__link mobile-none"
                    >Разработано студией <span>Blammo.kz</span></a>
                @elseif(app()->getLocale() =='kk')
                    <a href="https://blammo.kz/" class="blammo footer__link mobile-none"
                    ><span>Blammo.kz </span> студиясы әзірлеген</a>
                @else
                    <a href="https://blammo.kz/" class="blammo footer__link mobile-none"
                    >Made by <span>Blammo.kz</span> </a>
                @endif
            </div>
            <div class="offset-md-1 col-md-2 col-6">
                <p class="footer__title">@lang('main.navigation')</p>
                <div class="a1 footer__column">
                    <a href="{{route('index')}}" class="footer__link scroll-btn">@lang('main.Home')</a>
                    <a href="{{route('about')}}" class="footer__link scroll-btn">@lang('main.About us')</a>
                    <a href="{{route('services')}}" class="footer__link scroll-btn">@lang('main.Services')</a>
                    <a href="{{route('staff')}}" class="footer__link scroll-btn">@lang('main.Our team')</a>
                    <a href="{{route('works')}}" class="footer__link scroll-btn"
                    >@lang('main.Our work')</a
                    >
                    <a href="{{route('contacts')}}" class="footer__link scroll-btn"
                    >@lang('main.Contact us')</a
                    >

                </div>
            </div>
            <div class="offset-md-1 col-md-4 col-6">
                <div class="footer__column">
                    <p class="footer__title">@lang('main.contacts')</p>
                    @foreach($phones as $phone)
                        <a href="tel:{{$phone->content}}" class="footer__link"
                        >{{$phone->content}}</a
                        >
                    @endforeach
                    @foreach($addresses as $address)
                        <a onclick="return false" href="#" class="footer__link"
                        >{{$address->content}}</a
                        >
                    @endforeach
                </div>
            </div>
            <p class="footer__link mobile-open">© {{date('Y')}} @lang('All rights reserved')</p>
            @if(app()->getLocale() =='ru')
                <a href="https://blammo.kz/" class="footer__link mobile-open">
                    Разработано студией <span>Blammo.kz</span></a>
            @elseif(app()->getLocale() =='en')
                <a href="https://blammo.kz/" class="footer__link mobile-open">
                    Made <span>Blammo.kz</span></a>
            @else
                <a href="https://blammo.kz/" class="footer__link mobile-open">
                    <span>Blammo.kz</span> студиясы әзірлеген</a>
            @endif
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('js/libs.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>


</body>
</html>
