@extends('layouts.main')
@php
    $contacts = \App\Models\Contact::all();
    $addresses = $contacts->where('type',\App\Models\Contact::ADDRESS)->all();
    $phones = $contacts->where('type',\App\Models\Contact::MOBILE)->all();
    $schedule =  $contacts->where('type',\App\Models\Contact::SCHEDULE)->all();

@endphp
@section('content')



    <div class="contacts">
        <div class="container">
            <div class="contacts__inner row">
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
                <div class="contacts__descr col-md-5">
                    <div class="contacts__title col-md-10">{{$header->title}}</div>
                    <div class="contacts__subtitle">
                        {!! $header->content !!}
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__link">
                            <img src="{{asset('img/contacts-address.svg')}}" alt="address"/>Адрес:
                        </div>
                        @foreach($addresses as $address)
                            <div class="contacts__link">{{$address->content}}</div>
                        @endforeach
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__link">
                            <img src="{{asset('img/contacts-phone.svg')}}" alt="phone"/> Телефон:
                        </div>
                        @foreach($phones as $phone)
                            <div class="contacts__link">{{$phone->content}}</div>
                        @endforeach
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__link">
                            <img src="{{asset('img/contacts-calendar.svg')}}" alt="calendar"/> График
                            работы:
                        </div>
                        @foreach($schedule as $item)
                            <div class="contacts__link">{{$item->content}}</div>
                        @endforeach

                    </div>
                </div>
                <div class="contacts__map col-md-7">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504.272656311561!2d71.43012991573706!3d51.121878579573625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4245841907efc19f%3A0x6b2c103bff747812!2z0YPQuy4g0KHRi9Cz0LDQvdCw0LogMTgsINCd0YPRgC3QodGD0LvRgtCw0L0gMDIwMDAw!5e0!3m2!1sru!2skz!4v1601374142365!5m2!1sru!2skz"
                        width="100%"
                        height="640px"
                        frameborder="0"
                        style="border: 0"
                        allowfullscreen=""
                        aria-hidden="false"
                        tabindex="0"
                    ></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
