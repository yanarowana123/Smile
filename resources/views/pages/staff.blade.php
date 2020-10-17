@extends('layouts.main')

@section('content')

<section class="team">
    <div class="container">
        <div class="team__inner">
            <div class="team__title col-md-5">{{$header->title}}</div>
            <div class="team__subtitle col-md-6">
                {!! $header->content !!}
            </div>
            <div class="team__box row">
                <div class="team__item col-md-4">
                    <div class="team__photo">
                        <img class="team__photo" src="img/team-1.jpg" alt="team" />
                    </div>
                    <h4 class="team__name">Сарсенов Серик Канаевич</h4>
                    <p class="team__position">
                        Директор, врач-стоматолог, стаж 15 лет
                    </p>
                </div>
                <div class="team__item col-md-4">
                    <div class="team__photo">
                        <img class="team__photo" src="img/team-2.jpg" alt="team" />
                    </div>
                    <h4 class="team__name">Мухиден Махаббат Болаткызы</h4>
                    <p class="team__position">Заместитель директора</p>
                </div>
                <div class="team__item col-md-4">
                    <div class="team__photo">
                        <img class="team__photo" src="img/team-3.jpg" alt="team" />
                    </div>
                    <h4 class="team__name">Карпова Ирина Вячеславовна</h4>
                    <p class="team__position">Врач-стоматолог, стаж 14 лет</p>
                </div>
                <div class="team__item col-md-4">
                    <div class="team__photo">
                        <img class="team__photo" src="img/team-4.jpg" alt="team" />
                    </div>
                    <h4 class="team__name">Гуламова Дильнара Эркиновна</h4>
                    <p class="team__position">Врач-стоматолог, стаж 14 лет</p>
                </div>
                <div class="team__item col-md-4">
                    <div class="team__photo">
                        <img class="team__photo" src="img/team-5.jpg" alt="team" />
                    </div>
                    <h4 class="team__name">Турсунов Азиз Абдуллаевич</h4>
                    <p class="team__position">Врач-стоматолог, стаж 6 лет</p>
                </div>
                <div class="team__item col-md-4">
                    <div class="team__photo">
                        <img class="team__photo" src="img/team-0.jpg" alt="team" />
                    </div>
                    <h4 class="team__name">Бурбаев Абу Ергазыевич</h4>
                    <p class="team__position">Врач-стоматолог, стаж 5 лет</p>
                </div>
                <div class="team__item col-md-4">
                    <div class="team__photo">
                        <img class="team__photo" src="img/team-0.jpg" alt="team" />
                    </div>
                    <h4 class="team__name">Кинжалина Сандугаш Алмазовна</h4>
                    <p class="team__position">Администратор</p>
                </div>
                <div class="team__item col-md-4">
                    <div class="team__photo">
                        <img class="team__photo" src="img/team-8.jpg" alt="team" />
                    </div>
                    <h4 class="team__name">Кинжалина Сандугаш Алмазовна</h4>
                    <p class="team__position">Администратор</p>
                </div>
                <div class="team__item col-md-4">
                    <div class="team__photo">
                        <img class="team__photo" src="img/team-9.jpg" alt="team" />
                    </div>
                    <h4 class="team__name">Жетібаев Мирас Қуанышұлы</h4>
                    <p class="team__position">Ассистент стоматолога</p>
                </div>
                <div class="team__item col-md-4">
                    <div class="team__photo">
                        <img class="team__photo" src="img/team-10.jpg" alt="team" />
                    </div>
                    <h4 class="team__name">Тулеуов Мират</h4>
                    <p class="team__position">Ассистент стоматолога</p>
                </div>
                <div class="team__item col-md-4">
                    <div class="team__photo">
                        <img class="team__photo" src="img/team-11.jpg" alt="team" />
                    </div>
                    <h4 class="team__name">Айтсаутқызы Айгеримт</h4>
                    <p class="team__position">Младший медицинский работник</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
