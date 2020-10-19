@extends('layouts.app')
@section('content')
    <section class="main">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <a class="header__logo" href="{{route('index')}}"
                    ><img src="{{asset('img/logo.svg')}}" alt="Smile-Logo"
                        /></a>
                    <div class="header__navbar">
                        <a
                            class="header__link header__link_current_active scroll-btn"
                            href="{{route('index')}}"
                        >@lang('main.Home')</a
                        >
                        <a
                            class="header__link header__link_active scroll-btn"
                            href="{{route('about')}}"
                        >@lang('main.About us')</a
                        >
                        <a
                            class="header__link header__link_active scroll-btn"
                            href="{{route('services')}}"
                        >@lang('main.Services')</a
                        >
                        <a
                            class="header__link header__link_active scroll-btn"
                            href="{{route('staff')}}"
                        >@lang('main.Our team')</a
                        >
                        <a
                            class="header__link header__link_active scroll-btn"
                            href="{{route('works')}}"
                        >@lang('main.Our work')</a
                        >
                        <a
                            class="header__link header__link_active scroll-btn"
                            href="{{route('contacts')}}"
                        >@lang('main.Contact us')</a
                        >
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

        <div class="container">
            <div class="main__inner">
                <div class="main__inner__dropdown">
                    <ul>
                        <li>
                            <a href="/ru"><img src="{{asset('img/rus.png')}}"
                                               alt=""/> RU</a>
                        </li>
                        <li>
                            <a href="/en"><img src="{{asset('img/eng.png')}}"
                                               alt=""/> EN</a>
                        </li>
                        <li>
                            <a href="/kk"><img src="{{asset('img/kaz.png')}}"
                                                                                       alt=""/> KZ</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="main__descr col-md-6">
                        <div class="main__title col-lg-10">
                            {{$header->title}}
                        </div>
                        <div class="main__subtitle">
                            {!! $header->content !!}
                        </div>
                        <button class="button">@lang('main.Online consultation')</button>
                    </div>
                    <div class="main__img offset-lg-1 col-md-5">
                        <img src="img/main-icon.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-us" data-aos="fade-up" data-aos-duration="500">
        <div class="container">
            <div class="about-us__inner">
                <div class="about-us__wrapper row">
                    <div class="about-us__description col-lg-5">
                        <div class="title about-us__title">О нас</div>
                        <p>
                        {!! $about->content !!}
                        <div class="about-us__button">
                            <a href="{{route('about')}}" class="button" style="padding: 18px 83px">
                                @lang('main.More')
                            </a>
                        </div>
                    </div>
                    <div class="about-us__img offset-lg-1 col-lg-6">
                        <img src="{{$aboutImg->path}}" alt="about-us"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="working" data-aos="fade-up" data-aos-duration="500">
        <div class="container">
            <div class="working__inner">
                <div class="title">@lang('main.How we work?')</div>
                <div class="working__wrapper row">
                    @foreach($howItWorks as $key=>$howItWork)
                        <div class="working__item col-lg-3 col-md-6">
              <span
                  class="working__number animate__animated animate__fadeIn wow"
                  data-wow-delay="0.4s"
              >0{{$key+1}}</span
              >
                            <p
                                class="working__description col-lg-12 animate__animated animate__fadeIn wow"
                                data-wow-delay="0.4s"
                            >
                                {{$howItWork->content}}
                            </p>
                        </div>


                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="plasmolifting" data-aos="fade-up" data-aos-duration="500">
        <div class="container">
            <div class="plasmolifting__inner row">
                <div class="plasmolifting__description col-md-5">
                    <div class="title">{{$innovation->title}}</div>
                    <p class="plasmolifting__subtitle">
                        {!! $innovation->content !!}
                    </p>
                </div>
                <div class="plasmolifting__stages offset-md-1 col-md-5">
                    @foreach($innovationFeatures as $key=>$feature)
                        <p class="plasmolifting__stages-{{$key+1}}">
                            {!! $feature->content !!}
                        </p>
                    @endforeach


                </div>
            </div>
        </div>
    </section>

    <section class="advantages" data-aos="fade-up" data-aos-duration="500">
        <div class="container">
            <div class="advantages__inner row">
                <div class="title col-md-3">@lang('main.Advantages')</div>
                <div
                    class="advantages__wrapper offset-lg-1 col-lg-8 offset-md-2 col-md-7"
                >
                    @foreach($features as $feature)
                        <div class="advantages__descr">
                            {!! $feature->content !!}
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="discound" data-aos="fade-up" data-aos-duration="500">
        <div class="container">
            <div class="discound__inner row">
                <div class="discound__wrapper col-md-6">
                    <div class="title">
                        {{$consultant->title}}
                    </div>
                    <div class="discound__button">
                        <button class="button">@lang('main.Online consultation')</button>
                    </div>
                </div>
                <div class="discound__descr offset-md-1 col-md-5">
                    {!! $consultant->content !!}
                </div>
            </div>
        </div>
    </section>

    <section class="main-slick" data-aos="fade-up" data-aos-duration="500">
        <div class="container">
            <div class="main-slick__inner col-md-12">
                <div class="main-slick__carousel">
                    @foreach($slides as $slide)
                        <img src="{{asset($slide->path)}}" alt=""/>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
