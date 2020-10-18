@extends('layouts.main')

@section('content')


    <section class="our-works">
        <div class="container">
            <div class="our-works__inner">
                <div class="main__inner__dropdown">
                    <ul>
                        <li>
                            <a href="/ru/{{substr(Request::getRequestUri(), 4)}}"><img src="{{asset('img/rus.png')}}" alt=""/> RU</a>
                        </li>
                        <li>
                            <a href="/en/{{substr(Request::getRequestUri(), 4)}}"><img src="{{asset('img/eng.png')}}" alt=""/> EN</a>
                        </li>
                        <li>
                            <a href="/kk/{{substr(Request::getRequestUri(), 4)}}"><img src="{{asset('img/kaz.png')}}" alt=""/> KZ</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="our-works__wrap col-md-6">
                        <div class="our-works__title">{{$header->title}}</div>
                        <div class="our-works__subtitle">
                            {!! $header->content !!}
                        </div>
                    </div>
                    <div class="our-works__bg offset-md-1 col-md-5">
                        <img src="{{asset($header->image)}}" alt="works-bg"/>
                    </div>
                </div>
                <div class="our-works__descr col-md-6">
                    {!! $feature->content !!}
                </div>
                <div class="our-works__box row">
                    @foreach($images as $key=>$image)
                        @if($key ==0)
                            <img
                                class="our-works__box-img col-md-4"
                                src="{{asset($image->path)}}"
                                alt=""
                            />
                        @elseif($key==1)
                            <img
                                class="our-works__box-img col-md-8"
                                src="{{asset($image->path)}}"
                                alt=""
                            />
                        @elseif($key==2)

                            <img
                                class="our-works__box-img col-md-5"
                                src="{{asset($image->path)}}"
                                alt=""
                            />

                        @elseif($key==3)
                            <img
                                class="our-works__box-img col-md-4"
                                src="{{asset($image->path)}}"
                                alt=""
                            />
                        @else
                            <img
                                class="our-works__box-img col-md-3"
                                src="{{asset($image->path)}}"
                                alt=""
                            />
                        @endif

                    @endforeach


                </div>
            </div>
        </div>
    </section>

@endsection
