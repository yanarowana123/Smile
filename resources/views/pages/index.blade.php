@extends('layouts.app')
@section('content')
    <section class="main">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <a class="header__logo" href="index.html"
                    ><img src="img/logo.svg" alt="Smile-Logo"
                        /></a>
                    <div class="header__navbar">
                        <a
                            class="header__link header__link_active scroll-btn"
                            href="index.html"
                        >Главная</a
                        >
                        <a
                            class="header__link header__link_active scroll-btn"
                            href="gallery.html"
                        >О нас</a
                        >
                        <a
                            class="header__link header__link_active scroll-btn"
                            href="services.html"
                        >Услуги</a
                        >
                        <a
                            class="header__link header__link_active scroll-btn"
                            href="team.html"
                        >Команда</a
                        >
                        <a
                            class="header__link header__link_active scroll-btn"
                            href="our-works.html"
                        >Наши работы</a
                        >
                        <a
                            class="header__link header__link_active scroll-btn"
                            href="contacts.html"
                        >Контакты</a
                        >
                    </div>
                    <div class="hamburger">
                        <span></span>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="main__inner">
                <div class="row">
                    <div class="main__descr col-md-6">
                        <div class="main__title col-lg-10">
                            {{$header->title}}
                        </div>
                        <div class="main__subtitle">
                            {!! $header->content !!}
                        </div>
                        <button class="button">Онлайн консультация</button>
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
                            <a href="{{route('about')}}" class="button" style="padding: 18px 83px">Подробнее</a>
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
                <div class="title">Как мы работаем?</div>
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
                <div class="title col-md-3">Преимущества</div>
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
                        Пройдите онлайн консультацию и получите скидку!
                    </div>
                    <div class="discound__button">
                        <button class="button">{{$consultant->title}}</button>
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
