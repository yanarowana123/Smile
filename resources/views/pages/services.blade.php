@extends('layouts.main')

@section('content')



    <section class="services">
        <div class="container">
            <div class="services__inner">
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
                <div class="services__title col-md-10 col-lg-8">
                    {{$header->title}}
                </div>
                <div class="services__subtitle col-lg-7 col-md-10">
                    {!! $header->content !!}
                </div>
                <div class="services__items row">
                    @foreach($features as $feature)
                        <div class="services__item">
                            <div class="services__item-wrap">
                                <div class="services__item-title col-md-10">
                                    {{$feature->title}}
                                </div>
                                <div class="services__item-icon">
                                    <img src="{{asset($feature->image)}}" alt=""/>
                                </div>
                            </div>
                            <div class="services__item-descr">
                                {!! $feature->content !!}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>


@endsection
