@php
    $contacts = \App\Models\Contact::all();
    $whatsapp = $contacts->where('type',\App\Models\Contact::WPP)->first()->content;
    $instagram = $contacts->where('type',\App\Models\Contact::INSTAGRAM)->first()->content;
    $youtube = $contacts->where('type',\App\Models\Contact::YOUTUBE)->first()->content;
    $addresses = $contacts->where('type',\App\Models\Contact::ADDRESS)->all();
    $phones = $contacts->where('type',\App\Models\Contact::MOBILE)->all();
    $schedule =  $contacts->where('type',\App\Models\Contact::SCHEDULE)->all();

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

<section class="active__header">
    <div class="active__menu active__menu-left">
        <a class="active__logo" href="index.html"
        ><img src="img/logo.svg" alt="logo"
            /></a>
        <div class="container">
            <div class="active__link">
                <a href="{{route('index')}}" class="close_navbar scroll-btn2">Главная</a>
                <a href="{{route('about')}}" class="close_navbar scroll-btn2">О нас</a>
                <a href="{{route('services')}}" class="close_navbar scroll-btn2">Услуги</a>
                <a href="{{route('staff')}}" class="close_navbar scroll-btn2">Команда</a>
                <a href="{{route('works')}}" class="close_navbar scroll-btn2"
                >Наши работы</a
                >
                <a href="{{route('contacts')}}" class="close_navbar scroll-btn2"
                >Контакты</a
                >
            </div>
        </div>
    </div>
</section>

<section class="popup">
    <div class="container">
        <div class="popup__inner offset-md-1 col-md-10">
            <div class="popup__title">
                Пройдите онлайн консультацию и получите скидку!
                <span aria-hidden="true" class="popup_icon">&times;</span>
            </div>
            <div class="popup__subtitle col-md-10">
                Онлайн консультация – выдает вам необходимые рекомендации, но не
                сможет поставить точный диагноз, так как для этого требуется
                инструментальный осмотр и рентген зуба.
            </div>
            <form action="/feedback" class="popup__form row"
                  @submit.prevent="submitData"
                  x-data="contactForm()"
            >
                <div class="col-md-6">
                    <input type="text" name="name" class="popup__input"
                           x-model="formData.name"
                           placeholder="Имя"/>
                    <input
                        type="text"
                        name="phone"
                        x-model="formData.phone"
                        class="popup__input"
                        placeholder="Номер телефона"
                    />
                    <input type="text" class="popup__input"
                           name="email"
                           x-model="formData.email"

                           placeholder="E-mail"/>
                </div>
                <div class="col-md-6">
              <textarea
                  class="popup__textarea"
                  name="message"
                  x-model="formData.message"

                  placeholder="Что вас беспокоит?"
              ></textarea>
                </div>
                <div class="popup__button">
                    <button class="button"
                            type="submit"
                            :disabled="loading"
                    >Записаться</button>
                </div>
            </form>

        </div>
    </div>
</section>

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="index.html">
                    <img src="{{asset('img/logo.svg')}}" alt="logo" class="footer__logo"/>
                </a>
                <div class="footer__social">
                    <a href="{{$youtube}}"><img src="{{asset('img/youtube.svg')}}" alt="youtube"/></a>
                    <a href="{{$instagram}}"><img src="{{asset('img/instagram.svg')}}" alt="youtube"/></a>
                    <a href="{{$whatsapp}}"><img src="{{asset('img/whatsapp.svg')}}" alt="youtube"/></a>
                </div>
                <!-- <p class="footer__link mobile-none">© 2018 Все права защищены</p> -->
                <a href="https://blammo.kz/" class="blammo footer__link mobile-none"
                >Разработано студией <span>Blammo.kz</span></a
                >
            </div>
            <div class="offset-md-1 col-md-2 col-6">
                <p class="footer__title">навигация</p>
                <div class="a1 footer__column">
                    <a href="{{route('index')}}" class="footer__link scroll-btn">Главная</a>
                    <a href="{{route('about')}}" class="footer__link scroll-btn">О нас</a>
                    <a href="{{route('services')}}" class="footer__link scroll-btn">Услуги</a>
                    <a href="{{route('staff')}}" class="footer__link scroll-btn">Команда</a>
                    <a href="{{route('works')}}" class="footer__link scroll-btn"
                    >Наши работы</a
                    >
                    <a href="{{route('contacts')}}" class="footer__link scroll-btn"
                    >Контакты</a
                    >
                </div>
            </div>
            <div class="offset-md-1 col-md-4 col-6">
                <div class="footer__column">
                    <p class="footer__title">контакты</p>
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
            <p class="footer__link mobile-open">© 2020 Все права защищены</p>
            <a href="https://blammo.kz/" class="footer__link mobile-open"
            >Разработано студией <span>Blammo.kz</span></a
            >
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('js/libs.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js" defer></script>

<script>
    function contactForm() {
        return {
            formData: {
                name: '',
                email: '',
                phone: '',
                message: '',
                _token: "{{ csrf_token() }}"
            },
            message: '',
            loading:'',

            submitData() {
                this.loading = true;
                this.message = '';
                fetch('/feedback', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify(this.formData)
                })
                    .then((response) => {
                        console.log(response);

                        this.message = 'Form sucessfully submitted!'
                    })
                    .catch(() => {
                        this.message = 'Ooops! Something went wrong!'
                    })
                    .finally(() => {
                        this.loading = false;
                    })
            }
        }
    }
</script>
</body>
</html>
