@extends('layouts.main')

@section('content')

    <section class="team">
        <div class="container">
            <div class="team__inner">
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
                <div class="team__title col-md-5">{{$header->title}}</div>
                <div class="team__subtitle col-md-6">
                    {!! $header->content !!}
                </div>
                <div class="team__box row">
                    @foreach($staff as $emp)
                        <div class="team__item col-md-4">
                            <div class="team__photo">
                                <img class="team__photo" src="{{asset($emp->image)}}" alt="team"/>
                            </div>
                            <h4 class="team__name">{{$emp->name}}</h4>
                            <p class="team__position">
                                {{$emp->content}}
                            </p>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>


@endsection
