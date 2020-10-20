@extends('layouts.main')

@section('content')



    <section class="gallery-main">
        <div class="container">
            <div class="gallery-main__inner">
                <div class="main__inner__dropdown">
                    <ul>
                        <li>
                            <a href="/ru/{{substr(Request::getRequestUri(), 4)}}"><img src="{{asset('img/rus.png')}}"
                                                                                       alt=""/> RU</a>
                        </li>
                        <li>
                            <a href="/en/{{substr(Request::getRequestUri(), 4)}}"><img src="{{asset('img/eng.png')}}"
                                                                                       alt=""/> EN</a>
                        </li>
                        <li>
                            <a href="/kk/{{substr(Request::getRequestUri(), 4)}}"><img src="{{asset('img/kaz.png')}}"
                                                                                       alt=""/> KZ</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="gallery-main__title col-md-6">{{$header->title}}</div>
                    <div class="gallery-main__subtitle col-md-6">
                        {!! $header->content !!}
                    </div>
                </div>
                <div class="gallery-main__img">
                    <img src="{{asset($header->image)}}" alt="main-photo"/>
                </div>
            </div>
        </div>
    </section>


    <div class="gallery-content">
        <div class="container">
            <div class="gallery-content__inner">
                <div class="row">
                    <aside class="gallery-content__descr col-md-5">
                        <div class="content">
                            {!! $header->content !!}
                        </div>
                    </aside>
                    <div class="gallery-content__photo offset-md-1 col-md-6">
                        @foreach($images as $image)
                            <img src="{{asset($image->path)}}" alt=""/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <div class="gallery-content">--}}
    {{--        <div class="container">--}}
    {{--            <div class="gallery-content__inner">--}}
    {{--                <div class="row">--}}
    {{--                    <aside class="gallery-content__descr col-md-5">--}}
    {{--                        {!! $feature->content !!}--}}
    {{--                    </aside>--}}
    {{--                    <div class="gallery-content__photo offset-md-1 col-md-6">--}}
    {{--                        @foreach($images as $image)--}}
    {{--                            <img src="{{asset($image->path)}}" alt=""/>--}}
    {{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


@endsection

@push('styles')

    <style>
        .gallery-main {
            position: relative;
        }
    </style>
@endpush
